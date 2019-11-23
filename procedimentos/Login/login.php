<?php


//iniciando a sessão 
session_start();

require_once "../../classe/conexao.php";
require_once "../../classe/usuarios.php";

$obj = new usuarios();

$dados = array(
    $_POST['usuario'],
    $_POST['senha']
);


echo $obj->login($dados);


?>



