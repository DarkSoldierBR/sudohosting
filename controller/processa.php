<?php

include_once("conexao.php");

$nome = ($_POST['nome']);
$email = ($_POST['email']);
$senha = ($_POST['password']);
$cpf = ($_POST['cpf']);
$data = ($_POST['data']);
$requisito = ($_POST['requisito']);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios(nome, email, senha, data, cpf, requisito) VALUES ('$nome_usuario','$email_usuario', '$senha_usuario', '$data_usuario', '$cpf_usuario', '$requisito_usuario')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
