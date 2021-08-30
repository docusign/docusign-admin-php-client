<?php
/**
 * User: Naveen Gopala
 * Date: 1/25/16
 * Time: 4:58 PM
 */
 
use PHPUnit\Framework\TestCase;

class UnitTests extends TestCase
{

    /*
	 * Test 0 - login
	 */
    public function testLogin()
    {
        $testConfig = new TestConfig();        

        $config = new DocuSign\Admin\Configuration();
        $config->setHost($testConfig->getHost());

        $testConfig->setApiClient(new DocuSign\Admin\Client\ApiClient($config));
        $testConfig->getApiClient()->getOAuth()->setBasePath($testConfig->getHost());

        $scope = ["signature","organization_read","user_read","user_write"];

        $token = $testConfig->getApiClient()->requestJWTUserToken($testConfig->getIntegratorKey(),$testConfig->getUserId(), $testConfig->getClientKey(), $scope);

        $this->assertInstanceOf('DocuSign\Admin\Client\Auth\OAuthToken', $token[0]);
        $this->assertArrayHasKey('access_token', $token[0]);

        $user = $testConfig->getApiClient()->getUserInfo($token[0]['access_token']);

        $this->assertNotEmpty($user);
        $this->assertEquals($user[1], 200);

        $this->assertInstanceOf('DocuSign\Admin\Client\Auth\UserInfo', $user[0]);
        $this->assertNotEmpty($user[0]);

        $this->assertArrayHasKey('accounts', $user[0]);
        $loginAccount = $user[0]['accounts'][0];
        $accountId = $loginAccount->getAccountId();

        $this->assertNotEmpty($accountId);

        $testConfig->setAccountId($accountId);

        return $testConfig;
    }
    
    /**
     * @depends testLogin
     */
    public function testGetOrganizations($testConfig)
    {
        $accountApi = new DocuSign\Admin\Api\AccountsApi($testConfig->getApiClient());       
        $organizations = $accountApi->getOrganizations();        
        $this->assertNotEmpty($organizations);  
        $this->assertNotEmpty($organizations->getOrganizations());  
        $org = $organizations->getOrganizations()[0];
        $testConfig->setOrganizationId($org->getId());
        return $testConfig;          
    }

     /**
     * @depends testLogin
     */
    public function testBulkImport($testConfig)
    {
        $bulkImportApi = new DocuSign\Admin\Api\BulkImportsApi($testConfig->getApiClient());  
        $csvFile = "./Docs/organization-user-import.csv";     
        $str=file_get_contents($csvFile);
        $str=str_replace("<accountId>",$testConfig->getAccountId(),$str);
        file_put_contents($csvFile, $str);
        $res = $bulkImportApi->createBulkImportAddUsersRequest($testConfig->getOrganizationId(),new SplFileObject(__DIR__ . trim($csvFile,".")));                
        $this->assertNotEmpty($res); 
        sleep(30);
        $res = $bulkImportApi->deleteBulkUserImport($testConfig->getOrganizationId(),$res->getId());
        $this->assertNotEmpty($res); 
        $str=str_replace($testConfig->getAccountId(),"<accountId>",$str);
        file_put_contents($csvFile, $str);
        return $testConfig;       
    }  

    /**
     * @depends testLogin
     */
    public function testCreateUser($testConfig)
    {
        $bulkImportApi = new DocuSign\Admin\Api\UsersApi($testConfig->getApiClient());    
        $permissionProfile = new DocuSign\Admin\Model\PermissionProfileRequest();
        $permissionProfile->setId(9305351);
        $account = new DocuSign\Admin\Model\NewUserRequestAccountProperties();
        $account->setId($testConfig->getAccountId());
        $account->setPermissionProfile($permissionProfile);
        $account->setGroups([]);
        $request = new DocuSign\Admin\Model\NewUserRequest();    
        $request->setUserName("testuser");
        $request->setEmail("xxx@yyy.zzz");
        $accounts = [];
        array_push($accounts,$account);
        $request->setAccounts($accounts);
        $res = $bulkImportApi->createUser($testConfig->getOrganizationId(),$request);        
        $this->assertNotEmpty($res);        
        return $testConfig;
    } 
    
    /**
     * @depends testLogin
     */    
    public function testGetProductPermissionProfiles($testConfig)
    {
        $bulkImportApi = new DocuSign\Admin\Api\ProductPermissionProfilesApi($testConfig->getApiClient());  
        $res = $bulkImportApi->getProductPermissionProfiles($testConfig->getOrganizationId(),$testConfig->getAccountId());        
        $this->assertNotEmpty($res);        
        $productPermissionProfiles = $res->getProductPermissionProfiles();
        $this->assertNotEmpty($productPermissionProfiles);     
        $productPermissionProfile = $productPermissionProfiles[0];
        $this->assertNotEmpty($productPermissionProfile);        
        $permissionProfiles=$productPermissionProfile->getPermissionProfiles();
        $this->assertNotEmpty($permissionProfiles);        
        $permissionProfile = $permissionProfiles[0];
        $this->assertNotEmpty($permissionProfile);        
        $permissionProfileId = $permissionProfile->getPermissionProfileId();
        $this->assertNotEmpty($permissionProfileId);    
        return $testConfig;    
    } 
    
    /**
     * @depends testLogin
     */    
    public function testGetUserProfiles($testConfig)
    {
        $usersApi = new DocuSign\Admin\Api\UsersApi($testConfig->getApiClient());
        $options = new DocuSign\Admin\Api\UsersApi\GetUsersOptions();
        $options->setAccountId($testConfig->getAccountId());        # Here we set the from_date to filter envelopes for the last 10 days
        # Use ISO 8601 date format
        $from_date = date("c", (time() - (10 * 24 * 60 * 60)));
        $options->setLastModifiedSince($from_date);        
        # Step 3 start
        $modifiedUsers = $usersApi->getUsers($testConfig->getOrganizationId(), $options);             
        foreach ($modifiedUsers["users"] as $user) 
        {
            $profileOptions = new DocuSign\Admin\Api\UsersApi\GetUserProfilesOptions();
            $profileOptions->setEmail($user["email"]);
            $res = $usersApi->getUserProfiles($testConfig->getOrganizationId(), $profileOptions);
            $this->assertNotEmpty($res);   
        }
    }


}