<?php



require "vendor/autoload.php";

$access_token = 'l4CLnCPz4jXAE0CEaxr5me3mBLDC8DscN1CubNniB6wH1xyZN/lc3FsZXxJk06soWsJTp4CcZuWwUPr/CfmnyGfpl12fh+tclDV3phFeQDFB79LZiJyHDivpdw6qMZcRyKEz/CWxqZtib6RtyLciUAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







