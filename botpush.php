<?php



require "vendor/autoload.php";

$access_token = 'PYQ6JnZjmx0zsmiDMyse2ieS9g6pwBoCGsFj8Xc/ZiB5To8kITV0R4FpwvdMqO5p10LCsJ2MEl137nFfPdCAjwFyV1KOPjlq69uwDvXIGo64O3G6DUEoQEayG3sHbR3sZASax9KtVmiI7NIJLKVu9QdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'c9b16ade8db40566bb1e0e98d48f487c';

$pushID = 'U35126fce90d15e892abc85fa34ea7721';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







