<?php

require_once __DIR__.'/../../../../../vendor/autoload.php';

use PepipostAPIV10Lib\Controllers\Email;

$email = new Email();

$data = array(
    'api_key'   =>  'yoursecretkey',
    'recipients'    =>  array('recipient1@example.com','recipient2@example.com'),
    'email_details' => array(
        'from'          =>  'from@example.com',
        'subject'       =>  'Hi [% NAME %], here is your account balance.',
        'content'       =>  '<p>Hi [%NAME%],</p><p>Your account balance is [% ACCOUNT_BAL %].</p>',
        'fromname'      =>  'SDK Sender Name ',    
        'tags'          =>  'AccountDeactivation, Verification',
        'replytoid'     =>  'replyto@example.com',
    ),
    'X-APIHEADER' => array('UserID1','UserID2'),
    'settings' => array(
        'footer'        =>  true,
        'clicktrack'    =>  true,
        'opentrack'     =>  true,
        'unsubscribe'   =>  true,
        'bcc'           =>  'bcc@example.com',
    ),
    'attributes' => array(
        'NAME'          => array('NameOfRecipient1','NameOfRecipient2'),
        'ACCOUNT_BAL'   => array('100','200'),
    ),    
    'files' => array(
        'example_attachment1.txt' => 'This is a test content of the attach text file 1',
        'example_attachment2.txt' => 'This is a test content of the attach text file 2',
    ),
);

try {
    $response = $email->sendJson( $data );
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












