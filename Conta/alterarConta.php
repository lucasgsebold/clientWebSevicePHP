<?php
    require('../index.php');
    $iCodigo    = $_GET['codigo'];
    $sDescricao = $_GET['descricao'];
    $sData      = $_GET['data'];
    $iValor     = $_GET['valor'];
    $iTipo      = $_GET['tipo'];
    $iSituacao  = $_GET['situacao'];
    $iPessoa    = $_GET['pessoa'];
    $sHtml = '<div class=\'container\'>
              <h2>Alterar Conta</h2>
              <form action="putConta.php" method="post">
              <div class="form-group col-md-6">
               Número: <input type=number class="form-control" name=cnt_numero value='.$iCodigo.' readonly><br>
            Descrição: <input type=text class="form-control" name=descricao value='.$sDescricao.'><br>
                 Data: <input type=text class="form-control" name=data value='.$sData.'><br>
                Valor: <input type=number class="form-control" name=valor value='.$iValor.'><br>
                 Tipo: <input type=number class="form-control" name=tipo value='.$iTipo.'><br>
             Situação: <input type=number class="form-control" name=situacao value='.$iSituacao.'><br>
               Pessoa: <input type=number class="form-control" name=pes_codigo value='.$iPessoa.'><br>
                <input type=submit class="btn btn-outline-primary" value="Enviar">
                <button class="btn btn-outline-primary"><a href="http://localhost/clientWebSevicePHP/Conta/getConta.php">Voltar</a></button>
              </div>
              </form>
              </div>';

    echo $sHtml;
?>