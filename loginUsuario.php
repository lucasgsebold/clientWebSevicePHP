<?php
    $sHtml = '
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
    <div class="container">
    <form class="text-center border border-light p-5" action="#!">
        <div class="form-group col-md-10">
        <p class="h4 mb-4">Sign in</p>

        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
    
        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">
    
        <button class="btn btn-info btn-block my-4"><a href="http://localhost/clientWebSevicePHP/index.php">Logar</a></button>
        <a href="">Cadastro</a>
        </div>
    </form>
    </div>
    </body>
</html>';

    echo $sHtml;
?>
