<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_EMAIL);
$data = filter_input(INPUT_POST, 'dtnsc', FILTER_SANITIZE_EMAIL);
$requisito = filter_input(INPUT_POST, 'requisito', FILTER_SANITIZE_EMAIL);

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
