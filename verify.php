<?php
$access_token = 'l4CLnCPz4jXAE0CEaxr5me3mBLDC8DscN1CubNniB6wH1xyZN/lc3FsZXxJk06soWsJTp4CcZuWwUPr/CfmnyGfpl12fh+tclDV3phFeQDFB79LZiJyHDivpdw6qMZcRyKEz/CWxqZtib6RtyLciUAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;