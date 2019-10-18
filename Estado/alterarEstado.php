<?php
    $sSigla = $_GET['sigla'];
    $sNome  = $_GET['nome'];
    $sHtml = '<h2>Alterar Estado</h2>
              <form action="putEstado.php" method="post">
                Sigla: <input type=text name=est_sigla value='.$sSigla.' readonly><br>
                 Nome: <input type=text name=nome value='.$sNome.'><br>
                <input type=submit value="Enviar">
                <button><a href="http://localhost/clientWebSevicePHP/Estado/getEstado.php">Voltar</a></button>
              </form>';

    echo $sHtml;
?>