<?php

require_once "vendor/autoload.php";
use PepipostLib\Models;
use PepipostLib\Exceptions;

$apiKey = 'api_key';
$client = new PepipostLib\PepipostClient($apiKey);

$mailSendController = $client->getMailSend();
$body = new Models\Send;

$body->replyTo = 'reply-me@your-reply-to-id';
$body->from = new Models\From;

$body->from->email = 'hello@your-registered-domain-with-pepipost';
$body->from->name = 'from name';
$body->subject = 'Pepipost Test Email from PHP SDK';

$body->content = array();
$body->content[0] = new Models\Content;
$body->content[0]->type = Models\TypeEnum::HTML;
$body->content[0]->value = '<html><body>Hello [%NAME%], Email testing is successful. <br> Hope you enjoyed this integration. <br></html>';

$body->personalizations = array();
$body->personalizations[0] = new Models\Personalizations;

$body->personalizations[0]->to = array();
$body->personalizations[0]->to[0] = new Models\EmailStruct;
$body->personalizations[0]->to[0]->name = 'toname';
$body->personalizations[0]->to[0]->email = 'toname@gmail.com';

try {
  $result = $mailSendController->createGeneratethemailsendrequest($body);
  print_r($result);
} catch (PepipostLib\APIException $e) {
  echo 'Caught APIException: ',  $e->getMessage(), "\n"; 
}
