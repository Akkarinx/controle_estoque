<?php

class categorias{

    public function createCategorias($dados){
        $conn = new conectar();
        $conexao= $conn->conexao();


        $dataCaptura = date('Y-m-d');



        $sql = "INSERT INTO categorias (id_usuario , nome_categoria , dataCaptura) VALUE('$dados[0]', '$dados[1]', '$dados[2]')";

        return mysqli_query($conexao,$sql);

    }


    public function updateCategoria($dados){
        $conn = new conectar();
        $conexao= $conn->conexao();

        $sql = "UPDATE categorias SET nome_categoria = '$dados[1]'  where id_categoria =  '$dados[0]'";
        

        echo mysqli_query($conexao,$sql);

    }


    public function deleteCategoria($dados){

        $conn = new conectar();
        $conexao= $conn->conexao();

        $sql = "DELETE from categorias where id_categoria = '$dados'";


        return mysqli_query($conexao,$sql);
    }

}


    ?>