# Quickey_php_sdk

A Login Management System for Application

# Requirements
cURL
PHP 5.4+

# Installation

## Using Composer
To install quickey-php-sdk with Composer, just running the following command:

```
composer require quickey/quickey-php-sdk
```

# Usage
```
use SDK/QuickeySDK;
```
## Get App Data
 ```
$sdk = new QuickeySDK();
$app = $sdk->app(' YOUR API KEY ')
```
## Get Access Token
```
$sdk = new QuickeySDK();
$auth = $sdk->auth(' YOUR USER EMAIL ')
```
