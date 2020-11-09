<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "usuarios";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuaio, $senha, $dbname);
	
	if(!$conn){
		die("falha na conexão: " . mysqli_connect_error());
	}else{	
	//echo "Conexão realizada com sucesso";
	}
	
?>