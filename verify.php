<?php
$access_token = 'PYQ6JnZjmx0zsmiDMyse2ieS9g6pwBoCGsFj8Xc/ZiB5To8kITV0R4FpwvdMqO5p10LCsJ2MEl137nFfPdCAjwFyV1KOPjlq69uwDvXIGo64O3G6DUEoQEayG3sHbR3sZASax9KtVmiI7NIJLKVu9QdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
