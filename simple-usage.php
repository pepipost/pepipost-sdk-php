<?php

require_once "vendor/autoload.php";
use PepipostLib\Models;
use PepipostLib\Exceptions;

$apiKey = '4D51B3ECA2D4ED3A67E4E043B3F1A4D1';
$client = new PepipostLib\PepipostClient($apiKey);

$mailSendController = $client->getSend();
$body = new Models\Send;
$body->from = new Models\From;

$body->from->email = 'hello@your-registered-domain-with-pepipost';
$body->from->name = 'Pepipost';
$body->subject = 'Pepipost Test Mail from SDK';

$body->content = array();
$body->content[0] = new Models\Content;
$body->content[0]->type = Models\TypeEnum::HTML;
$body->content[0]->value = '<html><body>Hello, Welcome to Pepipost Family àèìòù.<br>My name is [% name %].<br>my love is sending [% love %]</body> <br></html>';

$body->personalizations = array();
$body->personalizations[0] = new Models\Personalizations;
$body->personalizations[0]->attributes = PepipostLib\APIHelper::deserialize('{"name":"Pepi","love":"Email"}');

$body->personalizations[0]->to = array();
$body->personalizations[0]->to[0] = new Models\EmailStruct;
$body->personalizations[0]->to[0]->name = 'to-address';
$body->personalizations[0]->to[0]->email = 'to-address@mydomain.name';

$body->personalizations[0]->cc = array();
$body->personalizations[0]->cc[0] = new Models\EmailStruct;
$body->personalizations[0]->cc[0]->name = 'to-cc-name';
$body->personalizations[0]->cc[0]->email = 'to-bcc-name';

$body->personalizations[0]->bcc = array();
$body->personalizations[0]->bcc[0] = new Models\EmailStruct;
$body->personalizations[0]->bcc[0]->name = 'to-bcc-name';
$body->personalizations[0]->bcc[0]->email = 'to-bcc-name@mydomain.name';

$body->settings = new Models\Settings;
$body->settings->footer = true;
$body->settings->clickTrack = true;
$body->settings->openTrack = true;
$body->settings->unsubscribeTrack = true;
$body->settings->hepf = false;

try {
  $result = $mailSendController->createGeneratethemailsendrequest($body);
  print_r($result);
} catch (PepipostLib\APIException $e) {
  echo 'Caught APIException: ',  $e->getMessage(), "\n"; 
}
