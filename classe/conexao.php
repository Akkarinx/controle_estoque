<?php 

class conectar{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $bd = "controle_estoque";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

 ?>