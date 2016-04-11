<?php

require_once __DIR__.'/../../vendor/autoload.php';

use PepipostAPIV10Lib\Controllers\Email;

$email = new Email();

$data = array(
    'api_key'        =>  'yoursecretapikey',
    'recipients'    =>  array('recipient@example.com'),
    'email_details' => array(
        'content'       =>  'this mail is sent via PHP SDK',
        'from'          =>  'from@example.com',
        'subject'       =>  'this mail is sent via PHP SDK',
        'fromname'      =>  'SDK Sender Name ',    
    )
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












