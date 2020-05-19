![pepipostlogo](https://pepipost.com/wp-content/uploads/2017/07/P_LOGO.png)

[![Packagist](https://img.shields.io/packagist/php-v/pepipost/pepipost-sdk-php.svg?style=flat-square)](https://packagist.org/packages/pepipost/pepipost-sdk-php)
[![Packagist](https://img.shields.io/packagist/dt/pepipost/pepipost-sdk-php.svg?style=flat-square)](https://packagist.org/packages/pepipost/pepipost-sdk-php)
[![Packagist](https://img.shields.io/github/contributors/pepipost/pepipost-sdk-php.svg)](https://github.com/pepipost)
[![Packagist](https://img.shields.io/packagist/l/pepipost/pepipost-sdk-php.svg)](https://packagist.org/packages/pepipost/pepipost-sdk-php)
[![Open Source Helpers](https://www.codetriage.com/pepipost/pepipost-sdk-php/badges/users.svg)](https://www.codetriage.com/pepipost/pepipost-sdk-php)
[![Twitter Follow](https://img.shields.io/twitter/follow/pepi_post.svg?style=social&label=Follow)](https://twitter.com/pepi_post)

## Official PHP Code library for [Pepipost](http://www.pepipost.com/?utm_campaign=GitHubSDK&utm_medium=GithubSDK&utm_source=GithubSDK)
This  SDK contains methods for easily interacting with the Pepipost Email Sending API to send emails in a few seconds.

We are trying to make our libraries community driven and we need your help in building the right things the right way you. Your opinion is very much valued so please share comments, create [issues](https://github.com/pepipost/pepipost-sdk-php/issues) and [pull requests](https://github.com/pepipost/pepipost-sdk-php/pulls).

## Table of Contents
* [Installation](#installation)
* [Quick Start](#quickstart)
* [Announcements](#announcements)
* [Roadmap](#roadmap)
* [About](#about)
* [License](#license)

<a name="installation"></a>
## Installation (OS Friendly)

For a smooth installation process, we have categorized installation process according to OS:

1. [Build SDK on Windows without any IDE.](https://github.com/pepipost/pepipost-sdk-php/blob/master/windows-installation-1.md)
2. [Build SDK on Windows/Linux with IDE.](https://github.com/pepipost/pepipost-sdk-php/blob/master/windows-installation-2.md)
3. [Build SDK on Linux.](https://github.com/pepipost/pepipost-sdk-php/blob/master/linux-installation.md)

### Prerequisites
* 1. [PHP >=5.4.0](http://php.net/manual/en/install.php)
* 2. [Composer](https://getcomposer.org/download/)
* 3. [CURL](https://curl.haxx.se/)
* 4. A free account on Pepipost. If you don't have a one, click [here](https://app.pepipost.com/index.php/signup/registeruser?utm_campaign=GitHubSDK&utm_medium=GithubSDK&utm_source=GithubSDK) to signup and get 30,000 emails free every month.

### Setup Global Variables

Setup the [PEPIPOST API KEY](https://app.pepipost.com/app/settings/integration) in the library to start sending emails. For example:

1. Copy the API KEY from your Pepipost account by navigating to Settings --> Integrations.
2. Edit the sample code and replace `PEPIPOST_API_KEY` which the one you just copied.
3. Now the library is ready to authenticate with Pepipost servers for sending emails.

<a name="quickstart"></a>
## Quick Start

Developers already familar with GIT, Composer and some of the other handy tools can just refer the below steps to quick start with the integration. 

> If you are not sure of how to integrate this library within your environment, then please refer to our detailed [installation](#installation) guide above.

1. Check php version using below command. Required PHP >=5.4.0. 
 
  ```php -v```
 
2. Verify if the Composer is installed using the below command: 
  
  ```composer --version```
 
3. Clone this repository on your machine using below command:
 
  ```git clone https://github.com/pepipost/pepipost-sdk-php.git testSDK```
 
4. Change directory 
 
  ```cd testSDK```
 
5.  Below will install all the requirement needed to run this library. After installing, a vendor directory will get auto-created
 
  ```composer install```
 
6. Copy the code and paste in test.php from [simple-usage.php](https://github.com/pepipost/pepipost-sdk-php/blob/master/simple-usage.php) or [sampleExample](https://github.com/pepipost/pepipost-sdk-php#sample-code-for-testphp) .
 
  ```cp simple-usage.md test.php```
  
7. Get your API key and Sending Domain from your Pepipost account. 
  
  * **apikey** will be available under Login to Pepipost -> Settings -> Integration  
  * **Sending Domain** will be available under Login to Pepiost -> Settings -> Sending Domains 

```
  *Note :: Domains showing with Active status on Sending Domain dashboard are only allowed to send any sort of emails.* In case there are no Sending Domain added under your account, then first add the domain, get the DNS (SPF/DKIM) settings done and get it reviewed by our compliance team for approval. Once the domain is approved, it will be in ACTIVE status and will be ready to send any sort of emails. 
```

8. Make the required changes in your script test.php (Adding the apikey and Sending Domain is mandatory).
 
 Change your **```$apiKey = 'api-XX-key-XX-here'```** to **```$apiKey = 'api-key-of-your-pepipost-account';```**
 
 Similarly, update your Sending Domain from:
 
 **```$body->from->fromEmail = 'admin@myfirsttest.com';```** to **```$body->from->fromEmail = 'admin@your-active-domain-on-pepipost';```**

9. Update the rest of the email related payload like Recipent email address, content of the email etc. Below is the sample code with details of payload:


## Sample Code for test.php

```php
<?php

require_once "vendor/autoload.php";
use PepipostLib\Models;
use PepipostLib\Exceptions;

$apiKey = '96c909c62bcc1dfdacef7dfdda34ea8477';

$client = new PepipostLib\PepipostClient($apiKey);
$sendController = $client->getSend();

$body = new Models\Send;
$body->from = new Models\From;
$body->from->email = 'hello@your-registered-domain-with-pepipost';
$body->from->name = 'Pepipost';
$body->subject = 'Pepipost Test Mail from PHP SDK';


$body->content = array();
$body->content[0] = new Models\Content;
$body->content[0]->type = Models\TypeEnum::HTML;
$body->content[0]->value = '<html><body>Hello [%NAME%], Email testing is successful. <br> Hope you enjoyed this integration. <br></html>';

$body->personalizations = array();
$body->personalizations[0] = new Models\Personalizations;
$body->personalizations[0]->attributes = PepipostLib\APIHelper::deserialize('{"NAME":"User"}');
$body->personalizations[0]->to = array();

$body->personalizations[0]->to[0] = new Models\EmailStruct;
$body->personalizations[0]->to[0]->name = 'to-address@mydomain.name';
$body->personalizations[0]->to[0]->email = 'my-first-user';

$body->settings = new Models\Settings;
$body->settings->footer = true;
$body->settings->clickTrack = true;
$body->settings->openTrack = true;
$body->settings->unsubscribeTrack = true;

try {
  $result = $sendController->createGenerateTheMailSendRequest($body);
  var_dump($result);
} catch (PepipostLib\APIException $e) {
    echo 'Caught APIException: ',  $e->getMessage(), "\n"; 
}
?>


```

For more information about the parameters, we would like to recommend our [API docs](https://developers.pepipost.com/email-api/sendEmail)

10. Run your script to send your first test email

 ```php test.php```
  
   This will give you following output:
   
 ```json
 {
	"data": {
		"message_id": "e8820eeb0ee94807f1ce88652b1dd627"
	},
	"message": "OK",
	"status": "success"
}
 ```

<a name="announcements"></a>
# Announcements

v5.0.0 has been released! Please see the [release notes](https://github.com/pepipost/pepipost-sdk-php/releases/tag/v5.0.0) for details.

All updates to this library are documented in our [releases](https://github.com/pepipost/pepipost-sdk-php/releases). For any queries and feedbacks, feel free to reach out us at dx@pepipost.com

<a name="roadmap"></a>
## Roadmap

If you are interested in the future direction of this project, please take a look at our open [issues](https://github.com/pepipost/pepipost-sdk-php/issues) and [pull requests](https://github.com/pepipost/pepipost-sdk-php/pulls). We would love to hear your feedback.

<a name="about"></a>
## About
pepipost-php-sdk library is guided and supported by the Pepipost Developer Experience Team.
This pepipost-php-sdk library is maintained and funded by Pepipost Ltd. The names and logos for pepipost-php-sdk are trademarks of Pepipost Ltd.

<a name="license"></a>
## License
This code library was semi-automatically generated by APIMATIC v2.0 and licensed under The MIT License (MIT). 
