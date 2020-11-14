<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['password']))) {
	if (!isset($_SESSION)) session_start();
    // Invalida a sessão e manda pro login.php
	$_SESSION["invalido"] = 'true';
	header("location: /auth/login.php");
}

  // Tenta se conectar ao servidor MySQL
mysqli_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
$con = mysqli_connect("localhost", "root", "", "test");

$usuario = $_POST['email'];
$password = $_POST['password'];

  // Validação do usuário/senha digitados
$sql = "SELECT * FROM `tbl_usuario` WHERE (`usu_email` = '" . $usuario . "') AND (`usu_senha` = '" . sha1($password) . "')";
$query = mysqli_query($con, $sql);
  
        // Salva os dados encontrados na variável $resultado
$resultado = mysqli_fetch_assoc($query);

$ativo = $resultado['usu_ativo'];

if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	if (!isset($_SESSION)) session_start();
      // Invalida a sessão e manda pro login.php
	$_SESSION["invalido"] = 'true';
	header("location: /auth/login.php");
} else if ($ativo == 1) {
    $sql = "UPDATE `tbl_usuario` SET `usu_ativo` = '0' WHERE (`usu_email` = '" . $usuario . "') AND (`usu_senha` = '" . sha1($password) . "')";
    $query = mysqli_query($con, $sql);
    session_destroy(); // Destrói a sessão limpando todos os valores salvos
    header("Location: /"); exit; // Redireciona o visitante

} else {
     // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	if (!isset($_SESSION)) session_start();
     // Invalida a sessão e manda pro login.php
	$_SESSION["invalido"] = 'true';
	header("location: /auth/login.php");
}

