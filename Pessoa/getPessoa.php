<?php
require('../index.php'); 

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
    'x-li-format: json'
]);
curl_setopt($ch, CURLOPT_URL, "http://localhost:3333/pessoas");


ob_start();

curl_exec($ch);

$result = ob_get_contents();

ob_end_clean();

curl_close($ch);

$aPessoas = json_decode($result);


$html ="<div class='container'>
        <h2>Pessoas</h2>
        <table class='table table-hover'>
          <thead class='thead-light'>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Email</th>
            <th>Cidade</th>
           </tr>
        </thead>";
        foreach($aPessoas as $oPessoa) {
            $sCidade = $oPessoa->cidade->nome;
            $iCodigoCidade = $oPessoa->cidade->cid_codigo;
            $html .= "<tr>";
            $html .= "<td>$oPessoa->pes_codigo</td>";
            $html .= "<td>$oPessoa->nome</td>";
            $html .= "<td>$oPessoa->idade</td>";
            $html .= "<td>$oPessoa->email</td>";
            $html .= "<td>$sCidade</td>";
            $html .= "<td><button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Pessoa/alterarPessoa.php?codigo=$oPessoa->pes_codigo&&nome=$oPessoa->nome&&idade=$oPessoa->idade&&email=$oPessoa->email&&cidade=$iCodigoCidade'>Alterar</a></button></td>";
            $html .= "<td><button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Pessoa/deletePessoa.php/?codigo=$oPessoa->pes_codigo'>Excluir</a></button></td>";
            $html .= "</tr>";
        }
$html .=" </tr>
       </table>
       <button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/Pessoa/cadastrarPessoa.php'>Incluir</a></button>
       <button class='btn btn-outline-primary'><a href='http://localhost/clientWebSevicePHP/index.php'>Voltar</a></button>
       </div>";

echo $html;
?>