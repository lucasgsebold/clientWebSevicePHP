<?php
$ch = curl_init();
session_start();
$token = $_SESSION["token"];



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

$html ="<table>
          <tr>
            <td>Sigla</td>
            <td>Nome</td>
            <td>Ações</td>";
        foreach($aEstados as $oEstado) {
            $html .= "<tr>";
            $html .= "<td>$oEstado->est_sigla</td>";
            $html .= "<td>$oEstado->nome</td>";
            $html .= "<td><button><a href='http://localhost/clientWebSevicePHP/alterarEstado.php?sigla=$oEstado->est_sigla&&nome=$oEstado->nome'>Alterar</a></button></td>";
            $html .= "<td><button><a href='http://localhost/clientWebSevicePHP/deleteEstado.php/?sigla=$oEstado->est_sigla'>Excluir</a></button></td>";
            $html .= "</tr>";
        }
$html .=" </tr>
       </table>
       <button><a href='http://localhost/clientWebSevicePHP/cadastrarEstado.php'>Incluir</a></button>";

echo $html;
?>