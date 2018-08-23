
### Simple Usage to Send Email

```php

<?php
require_once "vendor/autoload.php";
$client = new PepipostAPILib\PepipostAPIClient();
$emailController = $client->getEmail();

// Your Pepipost API Key
$apiKey = 'api-XX-key-XX-here'; #add apikey from panel here

$body = new PepipostAPILib\Models\EmailBody();

// List of Email Recipients
$body->personalizations = array();
$body->personalizations[0] = new PepipostAPILib\Models\Personalizations;
$body->personalizations[0]->recipient = 'Youremailid@XXX.com';               #To/Recipient email address

// Email Header
$body->from = new PepipostAPILib\Models\From;
$body->from->fromEmail = 'admin@myfirsttest.com';   #Sender Domain. Note: The sender domain should be verified and active under your Pepipost account.
$body->from->fromName = 'Test Admin';       #Sender/From name

//Email Body Content
$body->subject = 'Pepipost mail through php sdk';               #Subject of email
$body->content = '<html><body>Hello, Email testing is successful. <br> Hope you enjoyed this integration. <br></html>'; #HTML content which need to be send in the mail body

// Email Settings
$body->settings = new PepipostAPILib\Models\Settings;
$body->settings->clicktrack = 1;    #clicktrack for emails enable=1 | disable=0
$body->settings->opentrack = 1;     #opentrack for emails enable=1 | disable=0
$body->settings->unsubscribe = 1;   #unsubscribe for emails enable=1 | disable=0

$response = $emailController->createSendEmail($apiKey,$body);   #function sends email
print_r(json_encode($response));
?>

```
