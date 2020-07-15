<?php

use GuzzleHttp\Client;
require dirname(__DIR__) . "/vendor/autoload.php";



$client = new Client();
$response = $client->request('GET', 'https://api.dotalk.cn/xgw/api.poem');

echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
