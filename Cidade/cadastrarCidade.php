<?php
require('../index.php'); 
    $sHtml = '<div class=\'container\'>
              <form action="postCidade.php" method="post">
              <div class="form-group col-md-6">
               Código: <input type=text class="form-control" name=cid_codigo><br>
                 Nome: <input type=text class="form-control" name=nome><br>
               Estado: <input type=text class="form-control" name=est_sigla><br>
                <input type=submit class="btn btn-outline-primary" value="Enviar">
                <button class="btn btn-outline-primary"><a href="http://localhost/clientWebSevicePHP/Cidade/getCidade.php">Voltar</a></button>
              </div>
              </form>';

    echo $sHtml;
?>