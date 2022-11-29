# Clever\StudentsApi

All URIs are relative to https://api.clever.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactsForStudent()**](StudentsApi.md#getContactsForStudent) | **GET** /students/{id}/contacts |  |
| [**getDistrictForStudent()**](StudentsApi.md#getDistrictForStudent) | **GET** /students/{id}/district |  |
| [**getSchoolForStudent()**](StudentsApi.md#getSchoolForStudent) | **GET** /students/{id}/school |  |
| [**getSchoolsForStudent()**](StudentsApi.md#getSchoolsForStudent) | **GET** /students/{id}/schools |  |
| [**getSectionsForStudent()**](StudentsApi.md#getSectionsForStudent) | **GET** /students/{id}/sections |  |
| [**getStudent()**](StudentsApi.md#getStudent) | **GET** /students/{id} |  |
| [**getStudents()**](StudentsApi.md#getStudents) | **GET** /students |  |
| [**getTeachersForStudent()**](StudentsApi.md#getTeachersForStudent) | **GET** /students/{id}/teachers |  |


## `getContactsForStudent()`

```php
getContactsForStudent($id, $limit, $starting_after, $ending_before): \Clever\Model\ContactsResponse
```



Returns the contacts for a student

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string

try {
    $result = $apiInstance->getContactsForStudent($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getContactsForStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **starting_after** | **string**|  | [optional] |
| **ending_before** | **string**|  | [optional] |

### Return type

[**\Clever\Model\ContactsResponse**](../Model/ContactsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDistrictForStudent()`

```php
getDistrictForStudent($id): \Clever\Model\DistrictResponse
```



Returns the district for a student

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDistrictForStudent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getDistrictForStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Clever\Model\DistrictResponse**](../Model/DistrictResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchoolForStudent()`

```php
getSchoolForStudent($id): \Clever\Model\SchoolResponse
```



Returns the primary school for a student

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getSchoolForStudent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getSchoolForStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Clever\Model\SchoolResponse**](../Model/SchoolResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSchoolsForStudent()`

```php
getSchoolsForStudent($id, $limit, $starting_after, $ending_before): \Clever\Model\SchoolsResponse
```



Returns the schools for a student

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string

try {
    $result = $apiInstance->getSchoolsForStudent($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getSchoolsForStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **starting_after** | **string**|  | [optional] |
| **ending_before** | **string**|  | [optional] |

### Return type

[**\Clever\Model\SchoolsResponse**](../Model/SchoolsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSectionsForStudent()`

```php
getSectionsForStudent($id, $limit, $starting_after, $ending_before): \Clever\Model\SectionsResponse
```



Returns the sections for a student

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string

try {
    $result = $apiInstance->getSectionsForStudent($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getSectionsForStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **starting_after** | **string**|  | [optional] |
| **ending_before** | **string**|  | [optional] |

### Return type

[**\Clever\Model\SectionsResponse**](../Model/SectionsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudent()`

```php
getStudent($id): \Clever\Model\StudentResponse
```



Returns a specific student

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getStudent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Clever\Model\StudentResponse**](../Model/StudentResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudents()`

```php
getStudents($limit, $starting_after, $ending_before, $count): \Clever\Model\StudentsResponse
```



Returns a list of students

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string
$count = 'count_example'; // string

try {
    $result = $apiInstance->getStudents($limit, $starting_after, $ending_before, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getStudents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**|  | [optional] |
| **starting_after** | **string**|  | [optional] |
| **ending_before** | **string**|  | [optional] |
| **count** | **string**|  | [optional] |

### Return type

[**\Clever\Model\StudentsResponse**](../Model/StudentsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeachersForStudent()`

```php
getTeachersForStudent($id, $limit, $starting_after, $ending_before): \Clever\Model\TeachersResponse
```



Returns the teachers for a student

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\StudentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$limit = 56; // int
$starting_after = 'starting_after_example'; // string
$ending_before = 'ending_before_example'; // string

try {
    $result = $apiInstance->getTeachersForStudent($id, $limit, $starting_after, $ending_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudentsApi->getTeachersForStudent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **starting_after** | **string**|  | [optional] |
| **ending_before** | **string**|  | [optional] |

### Return type

[**\Clever\Model\TeachersResponse**](../Model/TeachersResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
