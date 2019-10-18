<?php
    $iCodigo  = $_GET['codigo'];
    $sNome    = $_GET['nome'];
    $sEstado  = $_GET['estado'];
    $sHtml = '<h2>Alterar Cidade</h2>
              <form action="putCidade.php" method="post">
               Código: <input type=number name=cid_codigo value='.$iCodigo.' readonly><br>
                 Nome: <input type=text name=nome value='.$sNome.'><br>
               Estado: <input type=text name=est_sigla value='.$sEstado.'><br>
                <input type=submit value="Enviar">
                <button><a href="http://localhost/clientWebSevicePHP/Cidade/getCidade.php">Voltar</a></button>
              </form>';

    echo $sHtml;
?>