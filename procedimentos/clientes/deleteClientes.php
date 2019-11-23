<?php

require_once "../../classe/conexao.php";
require_once "../../classe/categorias.php";



$obj = new categorias;


//pegando o id da categoria para enviar para função dele e passar o comando SQL
$id = $_POST['idcategoria'];

echo $obj->deleteCategoria($id);


?>
