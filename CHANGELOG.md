# DocuSign Admin PHP Client Changelog
See [DocuSign Support Center](https://support.docusign.com/en/releasenotes/) for Product Release Notes.

## [v3.0.0] - Admin API v2.1-1.4.3 - 2026-11-02
### Breaking
- **A PHP release patched for PHP2Shell is required.** The minimum PHP version is raised from 7.4 to `"php": "~8.2.35 || ~8.3.36 || ~8.4.27 || >=8.5.12"`:
  - 8.2.35 or any later 8.2 release
  - 8.3.36 or any later 8.3 release
  - 8.4.27 or any later 8.4 release
  - 8.5.12 or later

  Composer refuses to install the SDK on PHP 7.4, 8.0 and 8.1 (end-of-life), and on releases affected by CVE-2026-109618 / CVE-2026-109619. See the [PHP security advisory](https://www.php.net/archive/2026.php#2026-10-21-5). If your Linux distribution has backported the fix but reports an older version number, install with `composer install --ignore-platform-req=php`, and only after confirming that your PHP build includes the fix.
- **JWT library changed to `firebase/php-jwt` (^7.0)**, replacing `adhocore/jwt` (^1.1). The signatures of `requestJWTUserToken()` and `requestJWTApplicationToken()` are unchanged.
- **JWT Grant now requires an RSA private key of at least 2048 bits.** A shorter key throws `DomainException: Provided key is too short` before any request is sent. To check your key size, run `openssl rsa -in private.key -noout -text | head -1`.
- **Response header names are now lowercased.** The header arrays returned by the `*WithHttpInfo` methods and by `ApiException::getResponseHeaders()` use lowercase keys (for example `content-type` and `content-disposition`). Code that reads a header with its original casing, such as `$headers['Content-Type']`, must use the lowercase key instead.

### Fixed
- Removed the deprecated `utf8_decode()` call from the Basic authorization header in `generateAccessToken()` and `refreshAccessToken()`. On PHP 8.2 and later it raised a deprecation warning on every call. The header value is unchanged.

### Changed
- Updated the README requirements and dependency list.
- Updated the SDK release version.

### Known issues
- 6 legacy classes (`CloneErrorDetails`, `Account`, `Link`, `OAuthToken`, `Organization` and `UserInfo`) raise PHP deprecation warnings when loaded. Functionality is not affected. This will be fixed in a future release.
  - From PHP 8.1, 5 of them (`Account`, `Link`, `OAuthToken`, `Organization` and `UserInfo`) implement `ArrayAccess` without return types.
  - From PHP 8.4, all 6 have constructors that declare `array $data = null` instead of an explicit nullable type.

## [v2.2.0] - Admin API v2.1-1.4.3 - 2026-06-16
### Changed
- Added support for version v2.1-26.1.1.00 of the DocuSign ESignature API.
- Updated the SDK release version.

## [v2.1.0] - Admin API v2.1-1.4.3 - 2026-03-09
### Changed
- Added support for version v2.1-1.4.3 of the DocuSign Admin API.
- Updated the SDK release version.

## [v2.0.0] - Admin API v2.1-1.4.1 - 2024-10-28
### Changed
- Added support for version v2.1-1.4.1 of the DocuSign Admin API.
- Updated the SDK release version.

## [v2.0.0-rc2] - Admin API v2.1-1.4.1 - 2024-10-22
### Changed
- Added support for version v2.1-1.4.1 of the DocuSign Admin API.
- Updated the SDK release version.

## [v2.0.0-rc1] - Admin API v2.1-1.4.0 - 2024-08-27
### Breaking Changes
<details>
<summary>API Changes (Click to expand)</summary>

<br/>
<div style="margin-left: 20px;">

Added new query parameter "include_ds_groups" to the API "/v2/organizations/{organizationId}/users":

<h3>Added New APIs for Account Creation</h3>
<li>GET: get subscription details for organization</li>
<li>POST: initiate Create account request</li>
<li>GET: get ongoing process details by org ID</li>
<li>GET: get individual process details by org ID, asset group ID, asset group work ID</li>


</div>
</details>
 
### Other Changes
- Added support for version v2.1-1.4.0 of the DocuSign Admin API.
- Updated the SDK release version.

## [v1.4.2] - Admin API v2.1-1.3.0 - 2024-04-22
### Changed
- Adjusted the minimum required firebase/php-jwt package version to 6.0.
- Updated the SDK release version.

## [v1.4.2-rc1] - Admin API v2.1-1.3.0 - 2024-03-18
### Changed
- Adjusted the minimum required firebase/php-jwt package version to 6.0.

## [v1.4.1] - Admin API v2.1-1.3.0 - 2023-10-20
### Changed
forced $since_updated_date to be a nullable \DateType object
## [v1.4.0] - Admin API v2.1-1.3.0 - 2023-08-10
### Changed
- Added support for version v2.1-1.3.0 of the DocuSign Admin API.
- Updated the SDK release version.

New endpoints:
* `GET /v1/organizations/{organizationId}/assetGroups/accounts` Get asset group accounts for an organization.
* `POST /v1/organizations/{organizationId}/assetGroups/accountClone` Clone an existing DocuSign account.
* `GET /v1/organizations/{organizationId}/assetGroups/accountClones` Gets all asset group account clones for an organization.
* `GET /v1/organizations/{organizationId}/assetGroups/{assetGroupId}/accountClones/{assetGroupWorkId}` Gets information about a single cloned account.
## [v1.4.0-rc] - Admin API v2.1-1.3.0 - 2023-08-02
### Changed
- Added support for version v2.1-1.3.0 of the DocuSign Admin API.
- Updated the SDK release version.

New endpoints:
* `GET /v1/organizations/{organizationId}/assetGroups/accounts` Get asset group accounts for an organization.
* `POST /v1/organizations/{organizationId}/assetGroups/accountClone` Clone an existing DocuSign account.
* `GET /v1/organizations/{organizationId}/assetGroups/accountClones` Gets all asset group account clones for an organization.
* `GET /v1/organizations/{organizationId}/assetGroups/{assetGroupId}/accountClones/{assetGroupWorkId}` Gets information about a single cloned account.
## [v1.3.0] - Admin API v2.1-1.2.0 - 2023-06-05
### Changed
- Added support for version v2.1-1.2.0 of the DocuSign Admin API.
- Updated the SDK release version.

## [v1.3.0-rc] - Admin API v2.1-1.2.0 - 2023-05-10
### Changed
- Added support for version v2.1-1.2.0 of the DocuSign Admin API.
- Updated the SDK release version.

## [v1.2.0-rc] - Admin API v2.1-1.1.1 - 2023-03-22
### Changed
- Added support for version v2.1-1.1.1 of the DocuSign Admin API.
- Updated the SDK release version.

## [v1.1.0] - Admin API v2.1-1.1.0 - 2022-04-26
### Changed
- Added support for version v2.1-1.1.0 of the DocuSign Admin API.
- Updated the SDK release version.

## [1.0.0] - Admin API v2.1-1.0.0 - 2021-09-17
### Changed
- Added support for version v2.1-1.0.0 of the DocuSign Admin API.
- Updated the SDK release version.


## [v1.0.0-rc] - Admin API v2.1-1.0.0 - 2021-07-22
### Added
- First version of Admin API, supports DocuSign Admin
