<?php 
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
 
$sid    = NotPuttingThatOnline
$token  = NotPuttingThatOnline
$twilio_number = "+NotPuttingThatOnline";
$twilio = new Client($sid, $token); 
 
$client = new Client($sid, $token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+12489247754',
    array(
        'from' => $twilio_number,
        'body' => 'Test Text Message.'
    )
);
