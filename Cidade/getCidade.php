<?php
require('../index.php'); 

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/cidades");


ob_start();

curl_exec($ch);

$result = ob_get_contents();

ob_end_clean();

curl_close($ch);

$aCidades = json_decode($result);


$html ="<div class='container'>
        <h2>Cidades</h2>
        <table class='table table-hover'>
        <thead class='thead-light'>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Estado</th>
           </tr>
        </thead>";
        foreach($aCidades as $oCidade) {
            $sEstado = $oCidade->estado->est_sigla;
            $html .= "<tr>";
            $html .= "<td>$oCidade->cid_codigo</td>";
            $html .= "<td>$oCidade->nome</td>";
            $html .= "<td>$sEstado</td>";
            $html .= "<td><button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Cidade/alterarCidade.php?codigo=$oCidade->cid_codigo&&nome=$oCidade->nome&&estado=$sEstado'>Alterar</a></button></td>";
            $html .= "<td><button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Cidade/deleteCidade.php/?codigo=$oCidade->cid_codigo'>Excluir</a></button></td>";
            $html .= "</tr>";
        }
$html .=" </tr>
       </table>
       <button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Cidade/cadastrarCidade.php'>Incluir</a></button>
       <button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/index.php'>Voltar</a></button>
       </div>";

echo $html;
?>