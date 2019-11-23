<?php

require_once "../../classe/conexao.php";
require_once "../../classe/categorias.php";

$obj = new categorias();


//array para armazenar os dados inserido para o banco.
$dados = array(
    
 $_POST['idcategoria'],
 $_POST['categoriaU']

);

echo $obj->updateCategoria($dados);


?>



