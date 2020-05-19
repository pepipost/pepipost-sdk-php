<?php

require_once "vendor/autoload.php";
use PepipostLib\Models;
use PepipostLib\Exceptions;

$apiKey = '96c909c62bccdRWcgnr34fdda34ea8477';

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


$body->personalizations[0]->cc = array();
$body->personalizations[0]->cc[0] = new Models\EmailStruct;
$body->personalizations[0]->cc[0]->name = 'to-cc-name';
$body->personalizations[0]->cc[0]->email = 'to-cc-email-address@mydomain.name';


$body->personalizations[0]->bcc = array();
$body->personalizations[0]->bcc[0] = new Models\EmailStruct;
$body->personalizations[0]->bcc[0]->name = 'to-bcc-name';
$body->personalizations[0]->bcc[0]->email = 'to-bcc-email-address@mydomain.name';


$body->settings = new Models\Settings;
$body->settings->footer = true;
$body->settings->clickTrack = true;
$body->settings->openTrack = true;
$body->settings->unsubscribeTrack = true;

$body->bcc = array();
$body->bcc[0] = new Models\EmailStruct;
$body->bcc[0]->name = 'to-bcc-global';
$body->bcc[0]->email = 'global-bcc-address@mydomain.name';


try {
  $result = $sendController->createGenerateTheMailSendRequest($body);
  var_dump($result);
} catch (PepipostLib\APIException $e) {
  echo 'Caught APIException: ',  $e->getMessage(), "\n"; 
}
