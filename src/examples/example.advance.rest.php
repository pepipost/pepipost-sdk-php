<?php

require_once __DIR__.'/../../vendor/autoload.php';

use PepipostAPIV10Lib\Controllers\Email;

/**
    //Available Parameters
    $apiKey,
    $content,
    $from,
    $recipients,
    $subject,
    $aTTNAME = NULL,
    $attachmentid = NULL,
    $bcc = NULL,
    $clicktrack = NULL,
    $footer = NULL,
    $fromname = NULL,
    $opentrack = NULL,
    $replytoid = NULL,
    $tags = NULL,
    $template = NULL,
    $xAPIHEADER = NULL) 

*/

$email = new Email();

$apiKey        =  'yoursecretapikey';
$content       =  'this mail is sent via PHP SDK';
$from          =  'from@example.com';
$recipients    =  'recipient@example.com';
$subject       =  'this mail is sent via PHP SDK';
$aTTNAME       =   NULL;
$attachmentid  =   NULL;
$bcc           =   NULL;
$clicktrack    =   NULL;
$footer        =   NULL;
$fromname      =  'SDK Sender Name ';
$opentrack     =   NULL;
$replytoid     =   NULL;
$tags          =   NULL;
$template      =   NULL;
$xAPIHEADER    =   NULL;    

try {
    $response = $email->sendRest(            
        $apiKey,
        $content,
        $from,
        $recipients,
        $subject,
        $aTTNAME,
        $attachmentid,
        $bcc,
        $clicktrack,
        $footer,
        $fromname,
        $opentrack,
        $replytoid,
        $tags,
        $template,
        $xAPIHEADER
    );
    /**
    //example output
    var_dump($response);
    object(stdClass)#5 (3) {
      ["message"]=>
      string(7) "SUCCESS"
      ["errorcode"]=>
      string(1) "0"
      ["errormessage"]=>
      string(0) ""
    }
    */
    //var_dump($response);
    if(empty($response->errorcode)){
        print "Email sent successfully.\n";
    }
    else {
        print "Email sent Failed.\n";
        print "errormessage(" . $response->errormessage . ") \n";
        print "errorcode(" . $response->errorcode . ").\n";
    }
}
catch(Exception $e){
    print 'Call failed due to unhandled exception/error('. $e->getMessage().')'."\n";
}












