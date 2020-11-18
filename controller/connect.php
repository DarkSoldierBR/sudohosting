<?php
$servername = "localhost";
$username = "sudohosting";
$password = "sudo123";

// Cria um conexão
$conn = new mysqli($servername, $username, $password,"website");

// Verifica a conexão 
if ($con->connect_error) {
  die("Ocorreu um erro no banco de dados do site, Informe um administrador e tente novamente mais tarde." . $conn->connect_error);
}
?> 