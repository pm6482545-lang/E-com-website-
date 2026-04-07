<?php
// Your Sandbox Credentials
$consumerKey = '2Plc9lU4YEf1LhDnPUD2xgNrRAcFzn5Zgq5ABJChnacUFRLu'; 
$consumerSecret = 'tqv3FK7sDZLEJ6eNenPyquikAHOCsFA70IOKwqVe13khgDa4a5cPYFDzDALDQZwX'; 

$headers = ['Content-Type:application/json; charset=utf8'];
$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
$result = curl_exec($curl);
$result = json_decode($result);

$access_token = $result->access_token;
curl_close($curl);
?>
