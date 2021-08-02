# Quickey_php_sdk

A Login Management System for Application

# Requirements
- cURL
- PHP 7.4+

# Installation

## Using Composer
To install quickey-php-sdk with Composer, just running the following command:

```
composer require quickey/quickey-php-sdk
```

# Usage
```
$vendorDir = 'path/to';
require_once $vendorDir.'/vendor/quickey/quickey-php-sdk/src/QK.php';

$quickey = new Quickey('YOUR API KEY');
```
## Get App Data
 ```
$app = quickey->app->getMetaData();
```
## Get Access Token By Email
```
$token = quickey->auth->getAccessTokenByEmail('YOUR EMAIL', 'YOUR PROVIDER');
```
## Get Access Token By Phone
```
$token = quickey->auth->getAccessTokenByPhone('YOUR Phone', 'YOUR PROVIDER');
```
## Send SMS OTP To Phone
```
$response = quickey->app->sendSMSOTP('YOUR PHONE', 'YOUR PROVIDER');
```
## Link Phone To Email
```
$response = quickey->auth->linkPhoneToEmail('YOUR PHONE', 'YOUR PROVIDER');
```