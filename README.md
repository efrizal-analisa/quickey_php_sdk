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
```
## Get App Data
 ```
$app = \QK\SDK\Quickey::app(' YOUR API KEY ');
```
## Get Access Token
```
$auth = \QK\SDK\Quickey::auth(' YOUR EMAIL ');
```
