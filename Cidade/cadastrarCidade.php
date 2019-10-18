<?php
    $sHtml = '<h2>Cadastro de Cidade</h2>
              <form action="postCidade.php" method="post">
               Código: <input type=text name=cid_codigo><br>
                 Nome: <input type=text name=nome><br>
               Estado: <input type=text name=est_sigla><br>
                <input type=submit value="Enviar">
                <button><a href="http://localhost/clientWebSevicePHP/Cidade/getCidade.php">Voltar</a></button>
              </form>';

    echo $sHtml;
?>