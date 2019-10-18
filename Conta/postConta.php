<?php
$ch = curl_init();
session_start();
$token       = $_SESSION["token"];
$iCodigo     = $_POST["cnt_numero"];
$sDescricao  = $_POST["descricao"];
$sData       = $_POST["data"];
$iValor      = $_POST["valor"];
$iTipo       = $_POST["tipo"];
$iSituacao   = $_POST["situacao"];
$iPessoa     = $_POST["pes_codigo"];
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS , json_encode([
    'cnt_numero' => $iCodigo,
    'descricao'  => $sDescricao,
    'data'       => $sData,
    'valor'      => $iValor,
    'tipo'       => $iTipo,
    'situacao'   => $iSituacao,
    'pes_codigo' => $iPessoa
]));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/contas");
$result = curl_exec($ch);

curl_close($ch);

$result = json_decode($result, true);

echo $result;
header('Location: getConta.php');
?>