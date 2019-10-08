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

$result = curl_exec($ch);

curl_close($ch);
$decodedText = html_entity_decode($result);
$result = json_decode($decodedText, true);

//echo $result;

   // print_r($result["est_sigla"]);

echo "<table>
        <tr>
            <td>Sigla</td>
            <td>Nome</td>
        </tr>";
        
        "<tr>
        </tr>
      </table>";
?>