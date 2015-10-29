<?php

// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/laravel-api-starter/public/api/premises?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAwNzQ4NiwiZXhwIjoxNDQ3MjE3MDg2LCJuYmYiOjE0NDYwMDc0ODYsImp0aSI6ImY5MTEzYmQ1OGUwY2NjMzEzNDUwNzk2MmJlMjRjMGMxIiwic3ViIjoxfQ.SpWEQ6ioiG3u5w752r4ch2no4GHB0XkLThiIhTRewV0',
    CURLOPT_USERAGENT => 'Sample cURL Request'
));

// Send the request & save response to $resp
$response = curl_exec($curl);
//echo $response;

$result = json_decode($response);

// check data return
// var_dump($result);
// or
// echo '<pre>';
// print_r($result);
// echo '</pre>';

if (count($result->data) > 0) {
	foreach ($result->data as $premis) {
		echo '<p>';
		echo $premis->company_name . ', ' . $premis->district_name . ', ' . $premis->state_name;
		echo '</p>';
	}
}

//echo json_decode($response);

// Close request to clear up some resources
curl_close($curl);
?>