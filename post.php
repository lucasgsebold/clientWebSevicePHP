<?php
$ch = curl_init();
session_start();
$token = $_SESSION["token"];

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS , json_encode([
    'est_sigla' => 'NP',
    'nome' => 'dfqasdfqawl'
]));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/estados");
$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result, true);

echo $result;
?>