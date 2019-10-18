<?php
    $sHtml = '<h2>Cadastro de Estado</h2>
              <form action="postEstado.php" method="post">
                Sigla: <input type=text name=est_sigla><br>
                 Nome: <input type=text name=nome><br>
                <input type=submit value="Enviar">
                <button><a href="http://localhost/clientWebSevicePHP/Estado/getEstado.php">Voltar</a></button>
              </form>';

    echo $sHtml;
?>