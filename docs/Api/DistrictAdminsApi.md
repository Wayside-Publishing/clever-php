# Clever\DistrictAdminsApi

All URIs are relative to https://api.clever.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDistrictAdmin()**](DistrictAdminsApi.md#getDistrictAdmin) | **GET** /district_admins/{id} |  |
| [**getDistrictAdmins()**](DistrictAdminsApi.md#getDistrictAdmins) | **GET** /district_admins |  |
| [**getDistrictForDistrictAdmin()**](DistrictAdminsApi.md#getDistrictForDistrictAdmin) | **GET** /district_admins/{id}/district |  |


## `getDistrictAdmin()`

```php
getDistrictAdmin($id): \Clever\Model\DistrictAdminResponse
```



Returns a specific district admin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\DistrictAdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDistrictAdmin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictAdminsApi->getDistrictAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Clever\Model\DistrictAdminResponse**](../Model/DistrictAdminResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDistrictAdmins()`

```php
getDistrictAdmins($limit, $starting_after, $ending_before, $count): \Clever\Model\DistrictAdminsResponse
```



Returns a list of district admins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\DistrictAdminsApi(
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
    $result = $apiInstance->getDistrictAdmins($limit, $starting_after, $ending_before, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictAdminsApi->getDistrictAdmins: ', $e->getMessage(), PHP_EOL;
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

[**\Clever\Model\DistrictAdminsResponse**](../Model/DistrictAdminsResponse.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDistrictForDistrictAdmin()`

```php
getDistrictForDistrictAdmin($id): \Clever\Model\DistrictResponse
```



Returns the district for a district admin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Clever\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Clever\Api\DistrictAdminsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getDistrictForDistrictAdmin($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistrictAdminsApi->getDistrictForDistrictAdmin: ', $e->getMessage(), PHP_EOL;
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
