<?php
    $iCodigo  = $_GET['codigo'];
    $sNome    = $_GET['nome'];
    $iIdade    = $_GET['idade'];
    $sEmail    = $_GET['email'];
    $iCidade  = $_GET['cidade'];
    $sHtml = '<h2>Alterar Pessoa</h2>
              <form action="putPessoa.php" method="post">
               Código: <input type=text name=pes_codigo value='.$iCodigo.' readonly><br>
                 Nome: <input type=text name=nome value='.$sNome.'><br>
                Idade: <input type=number name=idade value='.$iIdade.'><br>
                Email: <input type=email name=email value='.$sEmail.'><br>
               Cidade: <input type=number name=cid_codigo value='.$iCidade.'><br>
                <input type=submit value="Enviar">
                <button><a href="http://localhost/clientWebSevicePHP/Pessoa/getPessoa.php">Voltar</a></button>
              </form>';

    echo $sHtml;
?>