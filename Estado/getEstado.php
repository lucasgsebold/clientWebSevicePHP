<?php
require('../index.php'); 

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/estados");


ob_start();

curl_exec($ch);

$result = ob_get_contents();

ob_end_clean();

curl_close($ch);

$aEstados = json_decode($result);

$html ="<div class='container'>
        <h2>Estados</h2>
        <table class='table table-hover'>
        <thead class='thead-light'>
          <tr>
            <th>Sigla</th>
            <th>Nome</th>
          </tr>
        </thead>";
        foreach($aEstados as $oEstado) {
            $html .= "<tr>";
            $html .= "<td>$oEstado->est_sigla</td>";
            $html .= "<td>$oEstado->nome</td>";
            $html .= "<td><button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Estado/alterarEstado.php?sigla=$oEstado->est_sigla&&nome=$oEstado->nome'>Alterar</a></button></td>";
            $html .= "<td><button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Estado/deleteEstado.php/?sigla=$oEstado->est_sigla'>Excluir</a></button></td>";
            $html .= "</tr>";
        }
$html .=" </tr>
       </table>
       <button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Estado/cadastrarEstado.php'>Incluir</a></button>
       <button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/index.php'>Voltar</a></button>
       </div>";

echo $html;
?>