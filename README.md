# wayside-publishing/clever-php

Serves the Clever Data API


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/wayside-publishing/clever-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\CoursesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getCourse($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoursesApi->getCourse: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.clever.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CoursesApi* | [**getCourse**](docs/Api/CoursesApi.md#getcourse) | **GET** /courses/{id} | 
*CoursesApi* | [**getCourses**](docs/Api/CoursesApi.md#getcourses) | **GET** /courses | 
*CoursesApi* | [**getDistrictForCourse**](docs/Api/CoursesApi.md#getdistrictforcourse) | **GET** /courses/{id}/district | 
*CoursesApi* | [**getResourcesForCourse**](docs/Api/CoursesApi.md#getresourcesforcourse) | **GET** /courses/{id}/resources | 
*CoursesApi* | [**getSchoolsForCourse**](docs/Api/CoursesApi.md#getschoolsforcourse) | **GET** /courses/{id}/schools | 
*CoursesApi* | [**getSectionsForCourse**](docs/Api/CoursesApi.md#getsectionsforcourse) | **GET** /courses/{id}/sections | 
*DistrictsApi* | [**getDistrict**](docs/Api/DistrictsApi.md#getdistrict) | **GET** /districts/{id} | 
*DistrictsApi* | [**getDistricts**](docs/Api/DistrictsApi.md#getdistricts) | **GET** /districts | 
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /events/{id} | 
*EventsApi* | [**getEvents**](docs/Api/EventsApi.md#getevents) | **GET** /events | 
*ResourcesApi* | [**getCoursesForResource**](docs/Api/ResourcesApi.md#getcoursesforresource) | **GET** /resources/{id}/courses | 
*ResourcesApi* | [**getResource**](docs/Api/ResourcesApi.md#getresource) | **GET** /resources/{id} | 
*ResourcesApi* | [**getResources**](docs/Api/ResourcesApi.md#getresources) | **GET** /resources | 
*ResourcesApi* | [**getSectionsForResource**](docs/Api/ResourcesApi.md#getsectionsforresource) | **GET** /resources/{id}/sections | 
*ResourcesApi* | [**getUsersForResource**](docs/Api/ResourcesApi.md#getusersforresource) | **GET** /resources/{id}/users | 
*SchoolsApi* | [**getCoursesForSchool**](docs/Api/SchoolsApi.md#getcoursesforschool) | **GET** /schools/{id}/courses | 
*SchoolsApi* | [**getDistrictForSchool**](docs/Api/SchoolsApi.md#getdistrictforschool) | **GET** /schools/{id}/district | 
*SchoolsApi* | [**getSchool**](docs/Api/SchoolsApi.md#getschool) | **GET** /schools/{id} | 
*SchoolsApi* | [**getSchools**](docs/Api/SchoolsApi.md#getschools) | **GET** /schools | 
*SchoolsApi* | [**getSectionsForSchool**](docs/Api/SchoolsApi.md#getsectionsforschool) | **GET** /schools/{id}/sections | 
*SchoolsApi* | [**getTermsForSchool**](docs/Api/SchoolsApi.md#gettermsforschool) | **GET** /schools/{id}/terms | 
*SchoolsApi* | [**getUsersForSchool**](docs/Api/SchoolsApi.md#getusersforschool) | **GET** /schools/{id}/users | 
*SectionsApi* | [**getCourseForSection**](docs/Api/SectionsApi.md#getcourseforsection) | **GET** /sections/{id}/course | 
*SectionsApi* | [**getDistrictForSection**](docs/Api/SectionsApi.md#getdistrictforsection) | **GET** /sections/{id}/district | 
*SectionsApi* | [**getResourcesForSection**](docs/Api/SectionsApi.md#getresourcesforsection) | **GET** /sections/{id}/resources | 
*SectionsApi* | [**getSchoolForSection**](docs/Api/SectionsApi.md#getschoolforsection) | **GET** /sections/{id}/school | 
*SectionsApi* | [**getSection**](docs/Api/SectionsApi.md#getsection) | **GET** /sections/{id} | 
*SectionsApi* | [**getSections**](docs/Api/SectionsApi.md#getsections) | **GET** /sections | 
*SectionsApi* | [**getTermForSection**](docs/Api/SectionsApi.md#gettermforsection) | **GET** /sections/{id}/term | 
*SectionsApi* | [**getUsersForSection**](docs/Api/SectionsApi.md#getusersforsection) | **GET** /sections/{id}/users | 
*TermsApi* | [**getDistrictForTerm**](docs/Api/TermsApi.md#getdistrictforterm) | **GET** /terms/{id}/district | 
*TermsApi* | [**getSchoolsForTerm**](docs/Api/TermsApi.md#getschoolsforterm) | **GET** /terms/{id}/schools | 
*TermsApi* | [**getSectionsForTerm**](docs/Api/TermsApi.md#getsectionsforterm) | **GET** /terms/{id}/sections | 
*TermsApi* | [**getTerm**](docs/Api/TermsApi.md#getterm) | **GET** /terms/{id} | 
*TermsApi* | [**getTerms**](docs/Api/TermsApi.md#getterms) | **GET** /terms | 
*UsersApi* | [**getContactsForUser**](docs/Api/UsersApi.md#getcontactsforuser) | **GET** /users/{id}/mycontacts | 
*UsersApi* | [**getDistrictForUser**](docs/Api/UsersApi.md#getdistrictforuser) | **GET** /users/{id}/district | 
*UsersApi* | [**getResourcesForUser**](docs/Api/UsersApi.md#getresourcesforuser) | **GET** /users/{id}/resources | 
*UsersApi* | [**getSchoolsForUser**](docs/Api/UsersApi.md#getschoolsforuser) | **GET** /users/{id}/schools | 
*UsersApi* | [**getSectionsForUser**](docs/Api/UsersApi.md#getsectionsforuser) | **GET** /users/{id}/sections | 
*UsersApi* | [**getStudentsForUser**](docs/Api/UsersApi.md#getstudentsforuser) | **GET** /users/{id}/mystudents | 
*UsersApi* | [**getTeachersForUser**](docs/Api/UsersApi.md#getteachersforuser) | **GET** /users/{id}/myteachers | 
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /users/{id} | 
*UsersApi* | [**getUsers**](docs/Api/UsersApi.md#getusers) | **GET** /users | 

## Models

- [BadRequest](docs/Model/BadRequest.md)
- [Contact](docs/Model/Contact.md)
- [Course](docs/Model/Course.md)
- [CourseObject](docs/Model/CourseObject.md)
- [CourseResponse](docs/Model/CourseResponse.md)
- [CoursesCreated](docs/Model/CoursesCreated.md)
- [CoursesCreatedAllOf](docs/Model/CoursesCreatedAllOf.md)
- [CoursesDeleted](docs/Model/CoursesDeleted.md)
- [CoursesResponse](docs/Model/CoursesResponse.md)
- [CoursesUpdated](docs/Model/CoursesUpdated.md)
- [CoursesUpdatedAllOf](docs/Model/CoursesUpdatedAllOf.md)
- [Credentials](docs/Model/Credentials.md)
- [District](docs/Model/District.md)
- [DistrictAdmin](docs/Model/DistrictAdmin.md)
- [DistrictContact](docs/Model/DistrictContact.md)
- [DistrictObject](docs/Model/DistrictObject.md)
- [DistrictResponse](docs/Model/DistrictResponse.md)
- [DistrictsCreated](docs/Model/DistrictsCreated.md)
- [DistrictsCreatedAllOf](docs/Model/DistrictsCreatedAllOf.md)
- [DistrictsDeleted](docs/Model/DistrictsDeleted.md)
- [DistrictsResponse](docs/Model/DistrictsResponse.md)
- [DistrictsUpdated](docs/Model/DistrictsUpdated.md)
- [DistrictsUpdatedAllOf](docs/Model/DistrictsUpdatedAllOf.md)
- [Event](docs/Model/Event.md)
- [EventResponse](docs/Model/EventResponse.md)
- [EventsResponse](docs/Model/EventsResponse.md)
- [InternalError](docs/Model/InternalError.md)
- [Link](docs/Model/Link.md)
- [Location](docs/Model/Location.md)
- [Name](docs/Model/Name.md)
- [NotFound](docs/Model/NotFound.md)
- [Principal](docs/Model/Principal.md)
- [Resource](docs/Model/Resource.md)
- [ResourceObject](docs/Model/ResourceObject.md)
- [ResourceResponse](docs/Model/ResourceResponse.md)
- [ResourcesCreated](docs/Model/ResourcesCreated.md)
- [ResourcesCreatedAllOf](docs/Model/ResourcesCreatedAllOf.md)
- [ResourcesDeleted](docs/Model/ResourcesDeleted.md)
- [ResourcesResponse](docs/Model/ResourcesResponse.md)
- [ResourcesUpdated](docs/Model/ResourcesUpdated.md)
- [ResourcesUpdatedAllOf](docs/Model/ResourcesUpdatedAllOf.md)
- [Roles](docs/Model/Roles.md)
- [School](docs/Model/School.md)
- [SchoolEnrollment](docs/Model/SchoolEnrollment.md)
- [SchoolObject](docs/Model/SchoolObject.md)
- [SchoolResponse](docs/Model/SchoolResponse.md)
- [SchoolsCreated](docs/Model/SchoolsCreated.md)
- [SchoolsCreatedAllOf](docs/Model/SchoolsCreatedAllOf.md)
- [SchoolsDeleted](docs/Model/SchoolsDeleted.md)
- [SchoolsResponse](docs/Model/SchoolsResponse.md)
- [SchoolsUpdated](docs/Model/SchoolsUpdated.md)
- [SchoolsUpdatedAllOf](docs/Model/SchoolsUpdatedAllOf.md)
- [Section](docs/Model/Section.md)
- [SectionObject](docs/Model/SectionObject.md)
- [SectionResponse](docs/Model/SectionResponse.md)
- [SectionsCreated](docs/Model/SectionsCreated.md)
- [SectionsCreatedAllOf](docs/Model/SectionsCreatedAllOf.md)
- [SectionsDeleted](docs/Model/SectionsDeleted.md)
- [SectionsResponse](docs/Model/SectionsResponse.md)
- [SectionsUpdated](docs/Model/SectionsUpdated.md)
- [SectionsUpdatedAllOf](docs/Model/SectionsUpdatedAllOf.md)
- [Staff](docs/Model/Staff.md)
- [Student](docs/Model/Student.md)
- [StudentRelationship](docs/Model/StudentRelationship.md)
- [Teacher](docs/Model/Teacher.md)
- [Term](docs/Model/Term.md)
- [TermObject](docs/Model/TermObject.md)
- [TermResponse](docs/Model/TermResponse.md)
- [TermsCreated](docs/Model/TermsCreated.md)
- [TermsCreatedAllOf](docs/Model/TermsCreatedAllOf.md)
- [TermsDeleted](docs/Model/TermsDeleted.md)
- [TermsResponse](docs/Model/TermsResponse.md)
- [TermsUpdated](docs/Model/TermsUpdated.md)
- [TermsUpdatedAllOf](docs/Model/TermsUpdatedAllOf.md)
- [User](docs/Model/User.md)
- [UserObject](docs/Model/UserObject.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UsersCreated](docs/Model/UsersCreated.md)
- [UsersCreatedAllOf](docs/Model/UsersCreatedAllOf.md)
- [UsersDeleted](docs/Model/UsersDeleted.md)
- [UsersResponse](docs/Model/UsersResponse.md)
- [UsersUpdated](docs/Model/UsersUpdated.md)
- [UsersUpdatedAllOf](docs/Model/UsersUpdatedAllOf.md)

## Authorization

### oauth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://clever.com/oauth/authorize`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
