<?php
    $sSigla = $_GET['sigla'];
    $sNome  = $_GET['nome'];
    $sHtml = '<form action="putEstado.php" method="post">
                Sigla: <input type=text name=est_sigla value='.$sSigla.' readonly><br>
                 Nome: <input type=text name=nome value='.$sNome.'><br>
                <input type=submit value="Enviar">
              </form>';

    echo $sHtml;
?>