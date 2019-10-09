#### Example of Advance Usage

```php
<?php
require_once "vendor/autoload.php";
$client = new PepipostAPILib\PepipostAPIClient();
$emailController = $client->getEmail();

$apiKey = 'pass api-key here';
$body = new PepipostAPILib\Models\EmailBody();

$body->personalizations = array();
$body->personalizations[0] = new PepipostAPILib\Models\Personalizations;
$body->personalizations[0]->recipient = 'my-email-id@domain.com';               #to emails 
$body->personalizations[0]->recipientCc = array('my-cc-emailid@gmail.com');  #cc emails
$body->personalizations[0]->xApiheaderCc = 'my_header for CC emails';       #unique header/identifier for cc emails 
$body->personalizations[0]->xApiheader = 'my_header for emails';            #unique header/identifier for to emails
$body->personalizations[0]->attributes = new PepipostAPILib\Models\Attributes('{"name":"pepi","love":"Emails"}');#attribute in an object key value form.

$body->personalizations[0]->attachments = array();
$body->personalizations[0]->attachments[0] = new PepipostAPILib\Models\Attachments;
#file content 
$body->personalizations[0]->attachments[0]->fileContent = '"SGVsbG8sIHRoaXMgZmlsZSBpcyBhbiBpbmZvcm1hdGlvbmFsIGZpbGU6OiBTZW5kaW5nIGVtYWlscyB0byB0aGUgaW5ib3ggaXMgd2hhdCB3ZSBkbywgYnV0IHRoYXTigJlzIG5vdCB0aGUgb25seSByZWFzb24gd2h5IGRldmVsb3BlcnMgYW5kIGVudGVycHJpc2VzIGxvdmUgdXMuIFdlIGFyZSB0aGUgb25seSBFU1AgdGhhdCBkb2VzbuKAmXQgY2hhcmdlIGZvciBlbWFpbHMgb3BlbmVkLg=="';

$body->personalizations[0]->attachments[0]->fileName = 'pepipost.txt';  #file name 
$body->personalizations[0]->recipientBcc = array('my-email-bcc-id@domain.com');  #bcc emails

$body->personalizations[0]->xheaders = new PepipostAPILib\Models\Xheaders('{"custom_key1":"custom_value1","custom_key2":"custom_value2","custom_key3":"custom_value3","custom_key4":"custom_value4"}');

$body->tags = 'EmailSender';    	   #identifier for campaign/batch emails

$body->from = new PepipostAPILib\Models\From;
$body->from->fromEmail = 'pepi@net.xyz';   #need to add register domain available in panel
$body->from->fromName = 'i am pepi';       #from name
$body->subject = 'Pepipost mail through php sdk';               #subject of email
$body->content = '<html><body>Hello, Welcome to Pepipost Family.<br>My name is [% name %].<br>my love is sending [% love %]</body> <br></html>'; #mail body [recomended to pass in rawurlencoded format]
$body->ampcontent = '<!doctype html><html ⚡4email><head><meta charset="utf-8"><style amp4email-boilerplate>body{visibility:hidden}</style><script async src="https://cdn.ampproject.org/v0.js"></script></head><body>Hello, world. This is amp mail 1. </body></html>'; 

#this attachment will be sent to emails with the attachment in personalizations if any (each email,cc,bcc will receive)
$body->attachments[0] = new PepipostAPILib\Models\EmailBodyAttachments;
$body->attachments[0]->fileContent = 'SGVsbG8sIHRoaXMgZmlsZSBpcyBhbiBpbmZvcm1hdGlvbmFsIGZpbGU6OiBTZW5kaW5nIGVtYWlscyB0byB0aGUgaW5ib3ggaXMgd2hhdCB3ZSBkbywgYnV0IHRoYXTigJlzIG5vdCB0aGUgb25seSByZWFzb24gd2h5IGRldmVsb3BlcnMgYW5kIGVudGVycHJpc2VzIGxvdmUgdXMuIFdlIGFyZSB0aGUgb25seSBFU1AgdGhhdCBkb2VzbuKAmXQgY2hhcmdlIGZvciBlbWFpbHMgb3BlbmVkLg==';
$body->attachments[0]->fileName = 'pepipost_1.txt';

$body->settings = new PepipostAPILib\Models\Settings;
$body->settings->footer = 1;        #footer for emails enable=1 | disable=0
$body->settings->clicktrack = 1;    #clicktrack for emails enable=1 | disable=0
$body->settings->opentrack = 1;     #opentrack for emails enable=1 | disable=0
$body->settings->unsubscribe = 1;   #unsubscribe for emails enable=1 | disable=0
$body->replyToId = 'replyto@gmail.com';
$body->templateId = 5441;
$body->settings->bcc = 'mybcc-email@email.in';

$response = $emailController->createSendEmail($apiKey,$body);   #function sends email
print_r(json_encode($response));
?>
