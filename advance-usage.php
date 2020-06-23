<?php

require_once "vendor/autoload.php";
use PepipostLib\Models;
use PepipostLib\Exceptions;

$apiKey = '4D51B3ECA2D4ED3A67E4E043B3F1A4D1';
$client = new PepipostLib\PepipostClient($apiKey);

$mailSendController = $client->getSend();

$body = new Models\Send;
$body->replyTo = 'reply-me-here@mydomain.name';

$body->from = new Models\From;
$body->from->email = 'hello@your-registered-domain-with-pepipost';
$body->from->name = 'Pepipost';
$body->subject = 'Pepipost Test Mail from SDK';
$body->templateId = 123;

$body->content = array();
$body->content[0] = new Models\Content;
$body->content[0]->type = Models\TypeEnum::AMP;
$body->content[0]->value = '<!doctype html><html ⚡4email><head><meta charset="utf-8"><style amp4email-boilerplate>body{visibility:hidden}</style><script async src="https://cdn.ampproject.org/v0.js"></script></head><body>Hello, world. This is amp mail 1. </body></html>';

$body->content[1] = new Models\Content;
$body->content[1]->type = Models\TypeEnum::HTML;
$body->content[1]->value = '<html><body>Hello, Welcome to Pepipost Family.<br>My name is [% name %].<br>my love is sending [% love %]</body> <br></html>';

$body->attachments = array();
$body->attachments[0] = new Models\Attachments;
$body->attachments[0]->content = 'SGVsbG8sIHRoaXMgZmlsZSBpcyBhbiBpbmZvcm1hdGlvbmFsIGZpbGU6OiBTZW5kaW5nIGVtYWlscyB0byB0aGUgaW5ib3ggaXMgd2hhdCB3ZSBkbywgYnV0IHRoYXTigJlzIG5vdCB0aGUgb25seSByZWFzb24gd2h5IGRldmVsb3BlcnMgYW5kIGVudGVycHJpc2VzIGxvdmUgdXMuIFdlIGFyZSB0aGUgb25seSBFU1AgdGhhdCBkb2VzbuKAmXQgY2hhcmdlIGZvciBlbWFpbHMgb3BlbmVkLg==';
$body->attachments[0]->name = 'global-file.txt';

$body->personalizations = array();
$body->personalizations[0] = new Models\Personalizations;
$body->personalizations[0]->attributes = PepipostLib\APIHelper::deserialize('{"name":"Pepi","love":"Email"}');
$body->personalizations[0]->headers = PepipostLib\APIHelper::deserialize('{"Cus-Header1":"Cus-Value1"}');

$body->personalizations[0]->attachments = array();
$body->personalizations[0]->attachments[0] = new Models\Attachments;
$body->personalizations[0]->attachments[0]->content = 'SGVsbG8sIHRoaXMgZmlsZSBpcyBhbiBpbmZvcm1hdGlvbmFsIGZpbGU6OiBTZW5kaW5nIGVtYWlscyB0byB0aGUgaW5ib3ggaXMgd2hhdCB3ZSBkbywgYnV0IHRoYXTigJlzIG5vdCB0aGUgb25seSByZWFzb24gd2h5IGRldmVsb3BlcnMgYW5kIGVudGVycHJpc2VzIGxvdmUgdXMuIFdlIGFyZSB0aGUgb25seSBFU1AgdGhhdCBkb2VzbuKAmXQgY2hhcmdlIGZvciBlbWFpbHMgb3BlbmVkLg==';
$body->personalizations[0]->attachments[0]->name = 'personalized-file.txt';

$body->personalizations[0]->to = array();
$body->personalizations[0]->to[0] = new Models\EmailStruct;
$body->personalizations[0]->to[0]->name = 'to-name';
$body->personalizations[0]->to[0]->email = 'to-name-address@mydomain.name';

$body->personalizations[0]->cc = array();
$body->personalizations[0]->cc[0] = new Models\EmailStruct;
$body->personalizations[0]->cc[0]->name = 'to-cc-name';
$body->personalizations[0]->cc[0]->email = 'to-cc-name-address@mydomain.name';

$body->personalizations[0]->bcc = array();
$body->personalizations[0]->bcc[0] = new Models\EmailStruct;
$body->personalizations[0]->bcc[0]->name = 'to-bcc-name';
$body->personalizations[0]->bcc[0]->email = 'to-bcc-name-address@mydomain.name';

$body->personalizations[0]->tokenTo = '{"topic":"token-to"}';
$body->personalizations[0]->tokenCc = '{"topic":"token-to-cc"}';
$body->personalizations[0]->tokenBcc = '{"topic":"token-to-bcc"}';

$body->settings = new Models\Settings;
$body->settings->footer = true;
$body->settings->clickTrack = true;
$body->settings->openTrack = true;
$body->settings->unsubscribeTrack = true;
$body->tags = array('campaign-test');
$body->lintPayload = true;
$body->schedule = 0;

$body->bcc = array();
$body->bcc[0] = new Models\EmailStruct;
$body->bcc[0]->name = 'global-bcc';
$body->bcc[0]->email = 'global-bcc-address@mydomain.name';

try {
  $result = $mailSendController->createGeneratethemailsendrequest($body);
  print_r($result);
} catch (PepipostLib\APIException $e) {
  echo 'Caught APIException: ',  $e->getMessage(), "\n"; 
}
