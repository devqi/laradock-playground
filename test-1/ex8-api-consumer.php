<?php
$host = 'http://camunda:8080/engine-rest';
$uri = '/decision-definition';
$url = $host . $uri;
$request = curl_init();

$headers = array(
    'Accept:application/json', 
    'Content-Type:application/json'
);
curl_setopt($request, CURLOPT_URL, $url);
curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
curl_setopt($request,CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($request, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($request);

if(!$response) {
    echo 'error: ' . curl_error($request);
    echo '<br>';
    echo '<br>';
    var_dump(curl_error($request));
    echo '<br>';
    echo '<br>';
    var_export(curl_getinfo($request));
    echo '<br>';
}

$results = json_decode($response);
echo '<pre>';
var_dump($results);
echo '</pre>';

curl_close($request);