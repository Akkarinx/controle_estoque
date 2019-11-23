<?php

    //bloco responsavel para verificar se exite sessão iniciada.
    session_start();
    //isset utilizada para saber se uma variavel foi iniciada.
    if(isset($_SESSION['usuario'])){


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <?php require_once "menu.php" ?>
</head>
<body>
    <h1>Bem vindos</h1>
    
</body>
</html>



<?php
    }else{
        //redirecionamento
        header("location:../index.php");

    }


?>