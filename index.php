<?php
    session_start();
    $token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MiwiaWF0IjoxNTcwNzQ3MDE2LCJleHAiOjE1NzEzNTE4MTZ9.-Ltsym67eQCBLKCa7a5NCZbcBNo3FI1j5NqgxqDb3Qk";
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
    <button><a href="http://localhost/clientWebSevicePHP/getEstado.php">Listar Estado</a></button>
</body>
</html>