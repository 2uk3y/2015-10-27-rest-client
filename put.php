<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/laravel-api-starter/public/api/premises/5",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "regno=3453453453&company_name=idiuwiwf&state_name=putrajaya&district_name=putrajaya",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAwNzQ4NiwiZXhwIjoxNDQ3MjE3MDg2LCJuYmYiOjE0NDYwMDc0ODYsImp0aSI6ImY5MTEzYmQ1OGUwY2NjMzEzNDUwNzk2MmJlMjRjMGMxIiwic3ViIjoxfQ.SpWEQ6ioiG3u5w752r4ch2no4GHB0XkLThiIhTRewV0",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: f56fff61-8533-742c-178d-cc8c32a245e2"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}