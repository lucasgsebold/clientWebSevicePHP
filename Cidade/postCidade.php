<?php
$ch = curl_init();
session_start();
$token = $_SESSION["token"];
$iCodigo  = $_POST["cid_codigo"];
$sNome    = $_POST["nome"];
$sEstado  = $_POST["est_sigla"];
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS , json_encode([
    'cid_codigo' => $iCodigo,
    'nome' => $sNome,
    'est_sigla' => $sEstado
]));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/cidades");
$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result, true);

echo $result;
header('Location: getCidade.php');
?>