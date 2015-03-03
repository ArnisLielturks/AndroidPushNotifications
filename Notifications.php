<?php

$url = 'https://android.googleapis.com/gcm/send';
//Add device tokens here
$tokens = array(
	'token_1',
	'token_2',
	'token_3'
);
//Change the message that will be sent to device
$message = 'This message will be sent to the device';

$fields = array(
    'registration_ids'  => $tokens,
    'data'              => array( "message" => $message ),
);
//Change this to the needed value
$API_KEY = 'AIzaSyBMb_hNgvExIMy10KKxw0KI0BPlH0ohnVE';
$headers = array(
    'Authorization: key=' . $API_KEY,
    'Content-Type: application/json'
);

// Open connection
$ch = curl_init();
// Set the url, number of POST vars, POST data
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
// Execute post
$result = json_decode(curl_exec($ch));
curl_close($ch);
var_dump($result);
