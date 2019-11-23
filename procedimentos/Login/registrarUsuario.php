<?php

require_once "../../classe/conexao.php";
require_once "../../classe/usuarios.php";

$obj = new usuarios();

//criptografia da senha para armazenar no banco
$senha = sha1($_POST['senha']);

//array para armazenar os dados inserido para o banco.
$dados = array(
    $_POST['nome'],
    $_POST['usuario'],
    $_POST['email'],
    $senha
);

echo $obj->registroUsuario($dados);


?>



