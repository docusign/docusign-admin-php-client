<?php
declare(strict_types=1);

/**
 * AccountsApi.
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The Docusign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docusign Admin API
 *
 * An API for an organization administrator to manage organizations, accounts and users
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\Admin\Api\AccountsApi;


/**
 * GetGroupsOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The Docusign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetGroupsOptions
{
    /**
      * $start Index of first item to include in the response  Default value: 0
      * @var ?int
      */
    protected ?int $start = null;

    /**
     * Gets start
     *
     * @return ?int
     */
    public function getStart(): ?int
    {
        return $this->start;
    }

    /**
     * Sets start
     * @param ?int $start Index of first item to include in the response  Default value: 0
     *
     * @return self
     */
    public function setStart(?int $start): self
    {
        $this->start = $start;
        return $this;
    }
    /**
      * $take Page size of the response  Default value: 20
      * @var ?int
      */
    protected ?int $take = null;

    /**
     * Gets take
     *
     * @return ?int
     */
    public function getTake(): ?int
    {
        return $this->take;
    }

    /**
     * Sets take
     * @param ?int $take Page size of the response  Default value: 20
     *
     * @return self
     */
    public function setTake(?int $take): self
    {
        $this->take = $take;
        return $this;
    }
    /**
      * $end Index of the last item to include in the response. Ignored if 'take' parameter is specfied
      * @var ?int
      */
    protected ?int $end = null;

    /**
     * Gets end
     *
     * @return ?int
     */
    public function getEnd(): ?int
    {
        return $this->end;
    }

    /**
     * Sets end
     * @param ?int $end Index of the last item to include in the response. Ignored if 'take' parameter is specfied
     *
     * @return self
     */
    public function setEnd(?int $end): self
    {
        $this->end = $end;
        return $this;
    }
}


/**
 * GetOrganizationsOptions Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The Docusign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetOrganizationsOptions
{
    /**
      * $mode Specifies how to select the organizations. Values: org_admin - will return organizations for which the user is an admin; account_membership: will return organizations that contain an account of which the user is a member  Default value: org_admin
      * @var ?string
      */
    protected ?string $mode = null;

    /**
     * Gets mode
     *
     * @return ?string
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets mode
     * @param ?string $mode Specifies how to select the organizations. Values: org_admin - will return organizations for which the user is an admin; account_membership: will return organizations that contain an account of which the user is a member  Default value: org_admin
     *
     * @return self
     */
    public function setMode(?string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }
}



namespace DocuSign\Admin\Api;

use DocuSign\Admin\Client\ApiClient;
use DocuSign\Admin\Client\ApiException;
use DocuSign\Admin\Configuration;
use DocuSign\Admin\ObjectSerializer;

/**
 * AccountsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\Admin
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The Docusign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     *
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath the resource path to use
    * @param string $baseName the base name param
    * @param string $paramName the parameter name
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation getGroups
     *
     * Returns the list of groups in an account.
     *
     * @param ?string $organization_id The organization ID Guid
     * @param ?string $account_id The account ID Guid
     * @param  \DocuSign\Admin\Api\AccountsApi\GetGroupsOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Admin\Model\MemberGroupsResponse
     */
    public function getGroups($organization_id, $account_id, \DocuSign\Admin\Api\AccountsApi\GetGroupsOptions $options = null)
    {
        list($response) = $this->getGroupsWithHttpInfo($organization_id, $account_id, $options);
        return $response;
    }

    /**
     * Operation getGroupsWithHttpInfo
     *
     * Returns the list of groups in an account.
     *
     * @param ?string $organization_id The organization ID Guid
     * @param ?string $account_id The account ID Guid
     * @param  \DocuSign\Admin\Api\AccountsApi\GetGroupsOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Admin\Model\MemberGroupsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupsWithHttpInfo($organization_id, $account_id, \DocuSign\Admin\Api\AccountsApi\GetGroupsOptions $options = null): array
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organization_id when calling getGroups');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getGroups');
        }
        // parse inputs
        $resourcePath = "/v2/organizations/{organizationId}/accounts/{accountId}/groups";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        if ($options != null)
        {
            // query params
            if ($options->getStart() != 'null') {
                $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($options->getStart());
            }
            if ($options->getTake() != 'null') {
                $queryParams['take'] = $this->apiClient->getSerializer()->toQueryValue($options->getTake());
            }
            if ($options->getEnd() != 'null') {
                $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($options->getEnd());
            }
        }

        // path params
        if ($organization_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "organizationId", $organization_id);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Admin\Model\MemberGroupsResponse',
                '/v2/organizations/{organizationId}/accounts/{accountId}/groups'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Admin\Model\MemberGroupsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Admin\Model\MemberGroupsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrganizations
     *
     * Returns the list of organizations of which the authenticated user is a member.
     *
     * @param  \DocuSign\Admin\Api\AccountsApi\GetOrganizationsOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Admin\Model\OrganizationsResponse
     */
    public function getOrganizations(\DocuSign\Admin\Api\AccountsApi\GetOrganizationsOptions $options = null)
    {
        list($response) = $this->getOrganizationsWithHttpInfo($options);
        return $response;
    }

    /**
     * Operation getOrganizationsWithHttpInfo
     *
     * Returns the list of organizations of which the authenticated user is a member.
     *
     * @param  \DocuSign\Admin\Api\AccountsApi\GetOrganizationsOptions  $options for modifying the behavior of the function. (optional)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Admin\Model\OrganizationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganizationsWithHttpInfo(\DocuSign\Admin\Api\AccountsApi\GetOrganizationsOptions $options = null): array
    {
        // parse inputs
        $resourcePath = "/v2/organizations";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        if ($options != null)
        {
            // query params
            if ($options->getMode() != 'null') {
                $queryParams['mode'] = $this->apiClient->getSerializer()->toQueryValue($options->getMode());
            }
        }


        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Admin\Model\OrganizationsResponse',
                '/v2/organizations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Admin\Model\OrganizationsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Admin\Model\OrganizationsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPermissions
     *
     * Returns the list of permission profiles in an account.
     *
     * @param ?string $organization_id The organization ID Guid
     * @param ?string $account_id The account ID Guid
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Admin\Model\PermissionsResponse
     */
    public function getPermissions($organization_id, $account_id)
    {
        list($response) = $this->getPermissionsWithHttpInfo($organization_id, $account_id);
        return $response;
    }

    /**
     * Operation getPermissionsWithHttpInfo
     *
     * Returns the list of permission profiles in an account.
     *
     * @param ?string $organization_id The organization ID Guid
     * @param ?string $account_id The account ID Guid
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Admin\Model\PermissionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPermissionsWithHttpInfo($organization_id, $account_id): array
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organization_id when calling getPermissions');
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getPermissions');
        }
        // parse inputs
        $resourcePath = "/v2/organizations/{organizationId}/accounts/{accountId}/permissions";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // path params
        if ($organization_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "organizationId", $organization_id);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Admin\Model\PermissionsResponse',
                '/v2/organizations/{organizationId}/accounts/{accountId}/permissions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Admin\Model\PermissionsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Admin\Model\PermissionsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation redactIndividualMembershipData
     *
     * Redacts membership data for users with memberships in an account.
     *
     * @param ?string $account_id The account ID Guid
     * @param \DocuSign\Admin\Model\IndividualMembershipDataRedactionRequest $request_model The request body describing the membership to be redacted (required)
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Admin\Model\IndividualUserDataRedactionResponse
     */
    public function redactIndividualMembershipData($account_id, $request_model)
    {
        list($response) = $this->redactIndividualMembershipDataWithHttpInfo($account_id, $request_model);
        return $response;
    }

    /**
     * Operation redactIndividualMembershipDataWithHttpInfo
     *
     * Redacts membership data for users with memberships in an account.
     *
     * @param ?string $account_id The account ID Guid
     * @param \DocuSign\Admin\Model\IndividualMembershipDataRedactionRequest $request_model The request body describing the membership to be redacted (required)
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Admin\Model\IndividualUserDataRedactionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function redactIndividualMembershipDataWithHttpInfo($account_id, $request_model): array
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling redactIndividualMembershipData');
        }
        // verify the required parameter 'request_model' is set
        if ($request_model === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request_model when calling redactIndividualMembershipData');
        }
        // parse inputs
        $resourcePath = "/v2/data_redaction/accounts/{accountId}/user";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // path params
        if ($account_id !== null) {
            $resourcePath = self::updateResourcePath($resourcePath, "accountId", $account_id);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($request_model)) {
            $_tempBody = $request_model;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Admin\Model\IndividualUserDataRedactionResponse',
                '/v2/data_redaction/accounts/{accountId}/user'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Admin\Model\IndividualUserDataRedactionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Admin\Model\IndividualUserDataRedactionResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
