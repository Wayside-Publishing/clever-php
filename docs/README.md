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


$apiInstance = new Clever\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContact: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.clever.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /contacts/{id} | 
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | 
*ContactsApi* | [**getDistrictForContact**](docs/Api/ContactsApi.md#getdistrictforcontact) | **GET** /contacts/{id}/district | 
*ContactsApi* | [**getStudentsForContact**](docs/Api/ContactsApi.md#getstudentsforcontact) | **GET** /contacts/{id}/students | 
*CoursesApi* | [**getCourse**](docs/Api/CoursesApi.md#getcourse) | **GET** /courses/{id} | 
*CoursesApi* | [**getCourses**](docs/Api/CoursesApi.md#getcourses) | **GET** /courses | 
*CoursesApi* | [**getDistrictForCourse**](docs/Api/CoursesApi.md#getdistrictforcourse) | **GET** /courses/{id}/district | 
*CoursesApi* | [**getSectionsForCourse**](docs/Api/CoursesApi.md#getsectionsforcourse) | **GET** /courses/{id}/sections | 
*DistrictAdminsApi* | [**getDistrictAdmin**](docs/Api/DistrictAdminsApi.md#getdistrictadmin) | **GET** /district_admins/{id} | 
*DistrictAdminsApi* | [**getDistrictAdmins**](docs/Api/DistrictAdminsApi.md#getdistrictadmins) | **GET** /district_admins | 
*DistrictAdminsApi* | [**getDistrictForDistrictAdmin**](docs/Api/DistrictAdminsApi.md#getdistrictfordistrictadmin) | **GET** /district_admins/{id}/district | 
*DistrictsApi* | [**getDistrict**](docs/Api/DistrictsApi.md#getdistrict) | **GET** /districts/{id} | 
*DistrictsApi* | [**getDistricts**](docs/Api/DistrictsApi.md#getdistricts) | **GET** /districts | 
*EventsApi* | [**getEvent**](docs/Api/EventsApi.md#getevent) | **GET** /events/{id} | 
*EventsApi* | [**getEvents**](docs/Api/EventsApi.md#getevents) | **GET** /events | 
*SchoolAdminsApi* | [**getDistrictForSchoolAdmin**](docs/Api/SchoolAdminsApi.md#getdistrictforschooladmin) | **GET** /school_admins/{id}/district | 
*SchoolAdminsApi* | [**getSchoolAdmin**](docs/Api/SchoolAdminsApi.md#getschooladmin) | **GET** /school_admins/{id} | 
*SchoolAdminsApi* | [**getSchoolAdmins**](docs/Api/SchoolAdminsApi.md#getschooladmins) | **GET** /school_admins | 
*SchoolAdminsApi* | [**getSchoolsForSchoolAdmin**](docs/Api/SchoolAdminsApi.md#getschoolsforschooladmin) | **GET** /school_admins/{id}/schools | 
*SchoolsApi* | [**getDistrictForSchool**](docs/Api/SchoolsApi.md#getdistrictforschool) | **GET** /schools/{id}/district | 
*SchoolsApi* | [**getSchool**](docs/Api/SchoolsApi.md#getschool) | **GET** /schools/{id} | 
*SchoolsApi* | [**getSchools**](docs/Api/SchoolsApi.md#getschools) | **GET** /schools | 
*SchoolsApi* | [**getSectionsForSchool**](docs/Api/SchoolsApi.md#getsectionsforschool) | **GET** /schools/{id}/sections | 
*SchoolsApi* | [**getStudentsForSchool**](docs/Api/SchoolsApi.md#getstudentsforschool) | **GET** /schools/{id}/students | 
*SchoolsApi* | [**getTeachersForSchool**](docs/Api/SchoolsApi.md#getteachersforschool) | **GET** /schools/{id}/teachers | 
*SectionsApi* | [**getCourseForSection**](docs/Api/SectionsApi.md#getcourseforsection) | **GET** /sections/{id}/course | 
*SectionsApi* | [**getDistrictForSection**](docs/Api/SectionsApi.md#getdistrictforsection) | **GET** /sections/{id}/district | 
*SectionsApi* | [**getSchoolForSection**](docs/Api/SectionsApi.md#getschoolforsection) | **GET** /sections/{id}/school | 
*SectionsApi* | [**getSection**](docs/Api/SectionsApi.md#getsection) | **GET** /sections/{id} | 
*SectionsApi* | [**getSections**](docs/Api/SectionsApi.md#getsections) | **GET** /sections | 
*SectionsApi* | [**getStudentsForSection**](docs/Api/SectionsApi.md#getstudentsforsection) | **GET** /sections/{id}/students | 
*SectionsApi* | [**getTeacherForSection**](docs/Api/SectionsApi.md#getteacherforsection) | **GET** /sections/{id}/teacher | 
*SectionsApi* | [**getTeachersForSection**](docs/Api/SectionsApi.md#getteachersforsection) | **GET** /sections/{id}/teachers | 
*SectionsApi* | [**getTermForSection**](docs/Api/SectionsApi.md#gettermforsection) | **GET** /sections/{id}/term | 
*StudentsApi* | [**getContactsForStudent**](docs/Api/StudentsApi.md#getcontactsforstudent) | **GET** /students/{id}/contacts | 
*StudentsApi* | [**getDistrictForStudent**](docs/Api/StudentsApi.md#getdistrictforstudent) | **GET** /students/{id}/district | 
*StudentsApi* | [**getSchoolForStudent**](docs/Api/StudentsApi.md#getschoolforstudent) | **GET** /students/{id}/school | 
*StudentsApi* | [**getSchoolsForStudent**](docs/Api/StudentsApi.md#getschoolsforstudent) | **GET** /students/{id}/schools | 
*StudentsApi* | [**getSectionsForStudent**](docs/Api/StudentsApi.md#getsectionsforstudent) | **GET** /students/{id}/sections | 
*StudentsApi* | [**getStudent**](docs/Api/StudentsApi.md#getstudent) | **GET** /students/{id} | 
*StudentsApi* | [**getStudents**](docs/Api/StudentsApi.md#getstudents) | **GET** /students | 
*StudentsApi* | [**getTeachersForStudent**](docs/Api/StudentsApi.md#getteachersforstudent) | **GET** /students/{id}/teachers | 
*TeachersApi* | [**getDistrictForTeacher**](docs/Api/TeachersApi.md#getdistrictforteacher) | **GET** /teachers/{id}/district | 
*TeachersApi* | [**getSchoolForTeacher**](docs/Api/TeachersApi.md#getschoolforteacher) | **GET** /teachers/{id}/school | 
*TeachersApi* | [**getSchoolsForTeacher**](docs/Api/TeachersApi.md#getschoolsforteacher) | **GET** /teachers/{id}/schools | 
*TeachersApi* | [**getSectionsForTeacher**](docs/Api/TeachersApi.md#getsectionsforteacher) | **GET** /teachers/{id}/sections | 
*TeachersApi* | [**getStudentsForTeacher**](docs/Api/TeachersApi.md#getstudentsforteacher) | **GET** /teachers/{id}/students | 
*TeachersApi* | [**getTeacher**](docs/Api/TeachersApi.md#getteacher) | **GET** /teachers/{id} | 
*TeachersApi* | [**getTeachers**](docs/Api/TeachersApi.md#getteachers) | **GET** /teachers | 
*TermsApi* | [**getDistrictForTerm**](docs/Api/TermsApi.md#getdistrictforterm) | **GET** /terms/{id}/district | 
*TermsApi* | [**getSectionsForTerm**](docs/Api/TermsApi.md#getsectionsforterm) | **GET** /terms/{id}/sections | 
*TermsApi* | [**getTerm**](docs/Api/TermsApi.md#getterm) | **GET** /terms/{id} | 
*TermsApi* | [**getTerms**](docs/Api/TermsApi.md#getterms) | **GET** /terms | 

## Models

- [AdminName](docs/Model/AdminName.md)
- [BadRequest](docs/Model/BadRequest.md)
- [Contact](docs/Model/Contact.md)
- [ContactObject](docs/Model/ContactObject.md)
- [ContactResponse](docs/Model/ContactResponse.md)
- [ContactsCreated](docs/Model/ContactsCreated.md)
- [ContactsCreatedAllOf](docs/Model/ContactsCreatedAllOf.md)
- [ContactsDeleted](docs/Model/ContactsDeleted.md)
- [ContactsResponse](docs/Model/ContactsResponse.md)
- [ContactsUpdated](docs/Model/ContactsUpdated.md)
- [ContactsUpdatedAllOf](docs/Model/ContactsUpdatedAllOf.md)
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
- [DistrictAdminObject](docs/Model/DistrictAdminObject.md)
- [DistrictAdminResponse](docs/Model/DistrictAdminResponse.md)
- [DistrictAdminsResponse](docs/Model/DistrictAdminsResponse.md)
- [DistrictObject](docs/Model/DistrictObject.md)
- [DistrictResponse](docs/Model/DistrictResponse.md)
- [DistrictadminsCreated](docs/Model/DistrictadminsCreated.md)
- [DistrictadminsCreatedAllOf](docs/Model/DistrictadminsCreatedAllOf.md)
- [DistrictadminsDeleted](docs/Model/DistrictadminsDeleted.md)
- [DistrictadminsUpdated](docs/Model/DistrictadminsUpdated.md)
- [DistrictadminsUpdatedAllOf](docs/Model/DistrictadminsUpdatedAllOf.md)
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
- [School](docs/Model/School.md)
- [SchoolAdmin](docs/Model/SchoolAdmin.md)
- [SchoolAdminObject](docs/Model/SchoolAdminObject.md)
- [SchoolAdminResponse](docs/Model/SchoolAdminResponse.md)
- [SchoolAdminsResponse](docs/Model/SchoolAdminsResponse.md)
- [SchoolEnrollment](docs/Model/SchoolEnrollment.md)
- [SchoolObject](docs/Model/SchoolObject.md)
- [SchoolResponse](docs/Model/SchoolResponse.md)
- [SchooladminsCreated](docs/Model/SchooladminsCreated.md)
- [SchooladminsCreatedAllOf](docs/Model/SchooladminsCreatedAllOf.md)
- [SchooladminsDeleted](docs/Model/SchooladminsDeleted.md)
- [SchooladminsUpdated](docs/Model/SchooladminsUpdated.md)
- [SchooladminsUpdatedAllOf](docs/Model/SchooladminsUpdatedAllOf.md)
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
- [Student](docs/Model/Student.md)
- [StudentObject](docs/Model/StudentObject.md)
- [StudentResponse](docs/Model/StudentResponse.md)
- [StudentsCreated](docs/Model/StudentsCreated.md)
- [StudentsCreatedAllOf](docs/Model/StudentsCreatedAllOf.md)
- [StudentsDeleted](docs/Model/StudentsDeleted.md)
- [StudentsResponse](docs/Model/StudentsResponse.md)
- [StudentsUpdated](docs/Model/StudentsUpdated.md)
- [StudentsUpdatedAllOf](docs/Model/StudentsUpdatedAllOf.md)
- [Teacher](docs/Model/Teacher.md)
- [TeacherObject](docs/Model/TeacherObject.md)
- [TeacherResponse](docs/Model/TeacherResponse.md)
- [TeachersCreated](docs/Model/TeachersCreated.md)
- [TeachersCreatedAllOf](docs/Model/TeachersCreatedAllOf.md)
- [TeachersDeleted](docs/Model/TeachersDeleted.md)
- [TeachersResponse](docs/Model/TeachersResponse.md)
- [TeachersUpdated](docs/Model/TeachersUpdated.md)
- [TeachersUpdatedAllOf](docs/Model/TeachersUpdatedAllOf.md)
- [Term](docs/Model/Term.md)
- [TermObject](docs/Model/TermObject.md)
- [TermResponse](docs/Model/TermResponse.md)
- [TermsCreated](docs/Model/TermsCreated.md)
- [TermsCreatedAllOf](docs/Model/TermsCreatedAllOf.md)
- [TermsDeleted](docs/Model/TermsDeleted.md)
- [TermsResponse](docs/Model/TermsResponse.md)
- [TermsUpdated](docs/Model/TermsUpdated.md)
- [TermsUpdatedAllOf](docs/Model/TermsUpdatedAllOf.md)

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

- API version: `2.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
