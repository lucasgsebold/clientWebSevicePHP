<?php
$ch = curl_init();
session_start();
$token    = $_SESSION["token"];
$iCodigo  = $_POST["pes_codigo"];
$sNome    = $_POST["nome"];
$iIdade   = $_POST["idade"];
$sEmail   = $_POST["email"];
$iCidade  = $_POST["cid_codigo"];

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS , json_encode([
    'pes_codigo' => $iCodigo,
    'nome'       => $sNome,
    'idade'      => $iIdade,
    'email'      => $sEmail,
    'cid_codigo' => $iCidade
]));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/pessoas");
$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result, true);

echo $result;
header('Location: getPessoa.php');
?>