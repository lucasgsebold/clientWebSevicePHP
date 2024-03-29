<?php
require('../index.php'); 

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/contas");


ob_start();

curl_exec($ch);

$result = ob_get_contents();

ob_end_clean();

curl_close($ch);

$aContas = json_decode($result);


$html ="<div class='container'>
        <h2>Contas</h2>
        <table class='table table-hover'>
        <thead class='thead-light'>
          <tr>
            <th>Número</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Valor</th>
            <th>Tipo</th>
            <th>Situação</th>
            <th>Pessoa</th>
        </tr>
        </thead>";
        foreach($aContas as $oConta) {
            $sNomePessoa = $oConta->pessoa->nome;
            $iCodigoPessoa = $oConta->pessoa->pes_codigo;
            $html .= "<tr>";
            $html .= "<td>$oConta->cnt_numero</td>";
            $html .= "<td>$oConta->descricao</td>";
            $html .= "<td>$oConta->data</td>";
            $html .= "<td>$oConta->valor</td>";
            $html .= "<td>$oConta->tipo</td>";
            $html .= "<td>$oConta->situacao</td>";
            $html .= "<td>$sNomePessoa</td>";
            $html .= "<td><button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Conta/alterarConta.php?codigo=$oConta->cnt_numero&&descricao=$oConta->descricao&&data=$oConta->data&&valor=$oConta->valor&&tipo=$oConta->tipo&&situacao=$oConta->situacao&&pessoa=$iCodigoPessoa'>Alterar</a></button></td>";
            $html .= "<td><button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Conta/deleteConta.php/?codigo=$oConta->cnt_numero'>Excluir</a></button></td>";
            $html .= "</tr>";
        }
$html .=" </tr>
       </table>
       <button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Conta/cadastrarConta.php'>Incluir</a></button>
       <button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/index.php'>Voltar</a></button>
       </div>";

echo $html;
?>