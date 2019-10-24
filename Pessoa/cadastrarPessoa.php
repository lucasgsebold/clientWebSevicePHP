<?php
require('../index.php'); 
   $sHtml = '<div class=\'container\'>
              <h2>Cadastro de Pessoa</h2>
              <form action="postPessoa.php" method="post">
              <div class="form-group col-md-6">
               Código: <input type=number class="form-control" name=pes_codigo><br>
                 Nome: <input type=text class="form-control" name=nome><br>
                Idade: <input type=number class="form-control" name=idade><br>
                Email: <input type=email class="form-control" name=email><br>
               Cidade: <input type=number class="form-control" name=cid_codigo><br>
                <input type=submit class="btn btn-outline-primary" value="Enviar">
                <button class="btn btn-outline-primary"><a href="http://localhost/clientWebSevicePHP/Pessoa/getPessoa.php">Voltar</a></button>
                </div>
              </form>
              </div>';

    echo $sHtml;
?>