<?php
    $iCodigo    = $_GET['codigo'];
    $sDescricao = $_GET['descricao'];
    $sData      = $_GET['data'];
    $iValor     = $_GET['valor'];
    $iTipo      = $_GET['tipo'];
    $iSituacao  = $_GET['situacao'];
    $iPessoa    = $_GET['pessoa'];
    $sHtml = '<h2>Alterar Conta</h2>
              <form action="putConta.php" method="post">
               Número: <input type=number name=cnt_numero value='.$iCodigo.' readonly><br>
            Descrição: <input type=text name=descricao value='.$sDescricao.'><br>
                 Data: <input type=text name=data value='.$sData.'><br>
                Valor: <input type=number name=valor value='.$iValor.'><br>
                 Tipo: <input type=number name=tipo value='.$iTipo.'><br>
             Situação: <input type=number name=situacao value='.$iSituacao.'><br>
               Pessoa: <input type=number name=pes_codigo value='.$iPessoa.'><br>
                <input type=submit value="Enviar">
                <button><a href="http://localhost/clientWebSevicePHP/Conta/getConta.php">Voltar</a></button>
              </form>';

    echo $sHtml;
?>