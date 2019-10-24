<?php
    session_start();
    $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwiaWF0IjoxNTcxOTU2OTY5LCJleHAiOjE1NzI1NjE3Njl9.4GL-Yn2mUG408N30-yhW-O7aKMnLOzz4S-OjO7xVNyA";
    $_SESSION["token"] = $token;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Menu</title>
</head>
<body>
    <div class='container'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="http://localhost/clientWebSevicePHP/index.php">ConFin</a>
            <a class="navbar-brand" href="http://localhost/clientWebSevicePHP/Estado/getEstado.php">Listar Estados</a>
            <a class="navbar-brand" href="http://localhost/clientWebSevicePHP/Cidade/getCidade.php">Listar Cidades</a>
            <a class="navbar-brand" href="http://localhost/clientWebSevicePHP/Pessoa/getPessoa.php">Listar Pessoas</a>
            <a class="navbar-brand" href="http://localhost/clientWebSevicePHP/Conta/getConta.php">Listar Contas</a>
            <a class="navbar-brand" href="http://localhost/clientWebSevicePHP/loginUsuario.php">Logout</a>
        </nav>
    </div>
</body>
</html>