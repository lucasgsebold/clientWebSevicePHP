<?php
require('../index.php'); 
  $sHtml = '<div class=\'container\'>
            <h2>Cadastro de Conta</h2>
             <form action="postConta.php" method="post">
             <div class="form-group col-md-6">
               Número: <input type=number class="form-control" name=cnt_numero><br>
            Descrição: <input type=text class="form-control" name=descricao><br>
                 Data: <input type=text class="form-control" name=data><br>
                Valor: <input type=number class="form-control" name=valor><br>
                 Tipo: <input type=number class="form-control" name=tipo><br>
             Situação: <input type=number class="form-control" name=situacao><br>
               Pessoa: <input type=number class="form-control" name=pes_codigo><br>
                <input type=submit class="btn btn-outline-primary" value="Enviar">
                <button class="btn btn-outline-primary"><a href="http://localhost/clientWebSevicePHP/Conta/getConta.php">Voltar</a></button>
              </div>
              </form>
              </div>';

    echo $sHtml;
?>