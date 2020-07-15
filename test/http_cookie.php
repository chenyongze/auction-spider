<?php

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;


require dirname(__DIR__) . "/vendor/autoload.php";

$client = new Client();

$cookieJar = CookieJar::fromArray([
    'SPRING_SECURITY_REMEMBER_ME_COOKIE' => 'emhvbmdzaGVuZ2hhbmcwMDM6MTU5NTkxOTIwODIwMjoxNmRjZmZkMGU2NWJhZGFiYmVhYjNmMjQ2M2UwYzAzMg',
    "SESSION" => "MmI5MjIwNjYtODgzMi00M2RiLWJhYmEtN2YzOGUzYjg4NTdh"
], 'debt.donganzichan.cn');  // 此处记得请求域名需要保持跟请求的url host一致，否则不会携带此cookie。

// $id = 714;
// $index = 1;
// $url = "https://wapi.artfoxlive.com/v6.2/auctioneer/{$id}?index={$index}&size=10&api_key=&endpoint=%7B%22platform%22:%22Web%22,%22phoneModel%22:%22iPhone%22,%22os%22:%22iOS%22%7D&timestamp=1562227024461";

$url = 'https://debt.donganzichan.cn/admin/business/company/case/find-my-case-page.htm?pageSize=10';
$response = $client->request('GET', $url, [
    'cookies' => $cookieJar,
]);

// echo $response->getStatusCode(); // 200
// echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
// abq();