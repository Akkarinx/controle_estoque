<?php

class usuarios{

    public function registroUsuario($dados){
        $conn = new conectar();
        $conexao= $conn->conexao();


        $dataCaptura = date ('Y-m-d');



        $sql = "INSERT INTO usuarios (nome, user , email , senha , dataCaptura) VALUE('$dados[0]', '$dados[1]', '$dados[2]', '$dados[3]', '$dataCaptura')";

        return mysqli_query($conexao,$sql);

    }
    
    public function login($dados){
        $conn = new conectar();
        $conexao= $conn->conexao();

        //criptografar os dados recebido da senha para comparar na querry
        $senha = sha1($dados[1]);
        
        $_SESSION['usuario'] =  $dados[0];
        //self = chamar função que está neste arquivo.
        $_SESSION['iduser'] = self::buscarId($dados);
        $sql = "SELECT * FROM usuarios where user = '$dados[0]' and senha = '$senha' ";
        
        
        $result = mysqli_query($conexao, $sql);

        
        if (mysqli_num_rows($result) > 0){
            return 1;
        }else {
            return 0;
        }

        

    }

    public function buscarId($dados){
        $conn = new conectar();
        $conexao= $conn->conexao();

        $senha = sha1($dados[1]);

        $sql = "SELECT id FROM usuarios where user = '$dados[0]' and senha = '$senha' ";

        $result = mysqli_query($conexao, $sql);

           //retornar apenas o primeiro elemento do array que no caso é o usuario. 
        return mysqli_fetch_row($result)[0];



    }


}