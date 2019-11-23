<?php

//sempre iniciar sessão quando for trabalhar com elas.
session_start();
require_once "../../classe/conexao.php";
require_once "../../classe/categorias.php";

$obj = new categorias();

$data= date('Y-m-d');
$iduser = $_SESSION['iduser'];
$categoria = $_POST['categoria'];


//array para armazenar os dados inserido para o banco.
$dados = array(
    $iduser,
    $categoria,
    $data
    
);

echo $obj->createCategorias($dados);


?>



