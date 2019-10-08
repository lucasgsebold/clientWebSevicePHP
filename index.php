<?php
    session_start();
    $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwiaWF0IjoxNTcwMTQyNjI4LCJleHAiOjE1NzA3NDc0Mjh9.PVHPaGU161aDiPMPgt3VsM-kR1rERyO1B_En2wMdhDY";
    $_SESSION["token"] = $token;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body>
    <button><a href="http://localhost/clientWebService/get.php">Listar Estado</a></button>
</body>
</html>