<?php
$ch = curl_init();
session_start();
$token = $_SESSION["token"];
$sSigla = $_POST["est_sigla"];
$sNome  = $_POST["nome"];
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS , json_encode([
    'est_sigla' => $sSigla,
    'nome' => $sNome
]));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/estados");
$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result);

echo $result;
header('Location: getEstado.php');
?>