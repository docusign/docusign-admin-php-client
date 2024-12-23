# DocuSign Admin Java Client Changelog
See [DocuSign Support Center](https://support.docusign.com/en/releasenotes/) for Product Release Notes.

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
