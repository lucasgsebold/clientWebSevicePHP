<?php
$ch = curl_init();
session_start();
$token = $_SESSION["token"];

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/estados/RS");

$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result, true);

echo $result;
?>