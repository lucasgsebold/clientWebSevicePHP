<?php
    $sHtml = '<h2>Cadastro de Pessoa</h2>
              <form action="postPessoa.php" method="post">
               Código: <input type=number name=pes_codigo><br>
                 Nome: <input type=text name=nome><br>
                Idade: <input type=number name=idade><br>
                Email: <input type=email name=email><br>
               Cidade: <input type=number name=cid_codigo><br>
                <input type=submit value="Enviar">
                <button><a href="http://localhost/clientWebSevicePHP/Pessoa/getPessoa.php">Voltar</a></button>
              </form>';

    echo $sHtml;
?>