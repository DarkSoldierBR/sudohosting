<?php 
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['usuario'])) {
	header('Location: index.php'); //O "index.php" vc deve colocar a página que o usuário vai ser redirecionado caso deixe os campos em brancos
	exit();
}

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$usuario = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_rows($result);

if($row == 1) {
	$_SESSION["USUARIO"] = $USUARIO;
	header('Location: painel.php');
	exit();
} else {
	header('Location: painel.php');
	exit();
}
?>