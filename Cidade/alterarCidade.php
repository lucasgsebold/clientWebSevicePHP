<?php
require('../index.php'); 
    $iCodigo  = $_GET['codigo'];
    $sNome    = $_GET['nome'];
    $sEstado  = $_GET['estado'];
    $sHtml = '<div class=\'container\'>
              <h2>Alterar Cidade</h2>
              <form action="putCidade.php" method="post">
              <div class="form-group col-md-6">
               Código: <input type=number class="form-control" name=cid_codigo value='.$iCodigo.' readonly><br>
                 Nome: <input type=text class="form-control" name=nome value='.$sNome.'><br>
               Estado: <input type=text class="form-control" name=est_sigla value='.$sEstado.'><br>
                <input type=submit value="Enviar" class="btn btn-outline-primary">
                <button class="btn btn-outline-primary"><a href="http://localhost/clientWebSevicePHP/Cidade/getCidade.php">Voltar</a></button>
                </div>
              </form>';

    echo $sHtml;
?>