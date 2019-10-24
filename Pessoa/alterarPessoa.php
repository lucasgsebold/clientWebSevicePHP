<?php
require('../index.php'); 
    $iCodigo  = $_GET['codigo'];
    $sNome    = $_GET['nome'];
    $iIdade    = $_GET['idade'];
    $sEmail    = $_GET['email'];
    $iCidade  = $_GET['cidade'];
    $sHtml = '<div class=\'container\'>
              <h2>Alterar Pessoa</h2>
              <form action="putPessoa.php" method="post">
              <div class="form-group col-md-6">
               Código: <input type=text class="form-control" name=pes_codigo value='.$iCodigo.' readonly><br>
                 Nome: <input type=text class="form-control" name=nome value='.$sNome.'><br>
                Idade: <input type=number class="form-control" name=idade value='.$iIdade.'><br>
                Email: <input type=email class="form-control" name=email value='.$sEmail.'><br>
               Cidade: <input type=number class="form-control" name=cid_codigo value='.$iCidade.'><br>
                <input type=submit class="btn btn-outline-primary" value="Enviar">
                <button class="btn btn-outline-primary"><a href="http://localhost/clientWebSevicePHP/Pessoa/getPessoa.php">Voltar</a></button>
                </div>
              </form>
              </div>';

    echo $sHtml;
?>