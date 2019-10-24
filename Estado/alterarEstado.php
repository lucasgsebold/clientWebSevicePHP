<?php
require('../index.php'); 
    $sSigla = $_GET['sigla'];
    $sNome  = $_GET['nome'];
    $sHtml = '<div class=\'container\'>
              <h2>Alterar Estado</h2>
              <form action="putEstado.php" method="post">
              <div class="form-group col-md-6">
                Sigla: <input type=text class="form-control" name=est_sigla value='.$sSigla.' readonly><br>
                 Nome: <input type=text class="form-control" name=nome value='.$sNome.'><br>
                <input type=submit class="btn btn-outline-primary" value="Enviar">
                <button class="btn btn-outline-primary"><a href="http://localhost/clientWebSevicePHP/Estado/getEstado.php">Voltar</a></button>
              <div class="form-group col-md-6">
              </form>
              </div>';

    echo $sHtml;
?>