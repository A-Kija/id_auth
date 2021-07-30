<?php
session_start();

function request(string $url, string $fields = '', int $isPost = 0)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, $isPost);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    if ($isPost) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    }
    $requestHeaders = array(
        'Content-type: application/x-www-form-urlencoded',
        'Content-Length: ' . strlen($fields),
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $requestHeaders);
    return  curl_exec($ch);
}

$apiAccessToken = require __DIR__ . '/token.php';
$url = 'https://id-sandbox.dokobit.com/api/authentication/'.$_SESSION['session_token'].'/status?access_token='.$apiAccessToken;

$response = request($url);

echo '<pre>';
print_r(json_decode($response)->name);
echo '<br>';
print_r(json_decode($response)->surname);