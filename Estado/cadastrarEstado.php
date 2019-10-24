<?php
require('../index.php'); 
    $sHtml = '<div class=\'container\'>
              <h2>Cadastro de Estado</h2>
              <form action="postEstado.php" method="post">
              <div class="form-group col-md-6">
                Sigla: <input type=text class="form-control" name=est_sigla><br>
                 Nome: <input type=text class="form-control" name=nome><br>
                <input type=submit class="btn btn-outline-primary" value="Enviar">                  
                <button class="btn btn-outline-primary"><a href="http://localhost/clientWebSevicePHP/Estado/getEstado.php">Voltar</a></button>
                </div>
              </form>
              </div>';

    echo $sHtml;
?>