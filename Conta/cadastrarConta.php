<?php
    $sHtml ='<h2>Cadastro de Conta</h2>
             <form action="postConta.php" method="post">
               Número: <input type=number name=cnt_numero><br>
            Descrição: <input type=text name=descricao><br>
                 Data: <input type=text name=data><br>
                Valor: <input type=number name=valor><br>
                 Tipo: <input type=number name=tipo><br>
             Situação: <input type=number name=situacao><br>
               Pessoa: <input type=number name=pes_codigo><br>
                <input type=submit value="Enviar">
                <button><a href="http://localhost/clientWebSevicePHP/Conta/getConta.php">Voltar</a></button>
              </form>';

    echo $sHtml;
?>