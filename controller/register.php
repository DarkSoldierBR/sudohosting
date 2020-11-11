<?php
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
  // Tenta se conectar ao servidor MySQL
  mysqli_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  $con = mysqli_connect("localhost", "root", "", "test");

  $nome = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpf = $_POST['cpf'];
  $data_nascimento = $_POST['data_nascimento'];
 
  // Converte a data para YY/mm/dd
  $data_nascimento=date_create($data_nascimento);
  $data_nascimento=date_format($data_nascimento,"Y-m-d");
  echo $data_nascimento;

  // Insere a query de cadastros com os dados no Mysql
  $sql = "INSERT INTO `tbl_usuario` (`usu_id`, `usu_nome`, `usu_senha`, `usu_email`, `usu_nivel`, `usu_ativo`, `usu_cadastro`, `usu_dtnsc`) VALUES (' ', '".$name."',  SHA1('".$password."'), '".$email."', '1', '1', ' ', '".$data_nascimento."')";  
  $query = mysqli_query($con,$sql);

//   Verifica se o usuario foi inserido
  $sql = "SELECT `usu_id` FROM `tbl_usuario` WHERE (`usu_email` = '".$email."')";  
  $query = mysqli_query($con,$sql);
  $resultado = mysqli_fetch_assoc($query);

  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      if (!isset($_SESSION)) session_start();
      // Invalida a sessão e manda pro login.php
      $_SESSION["invalido"] = 'true';
      header("location: /auth/register.php");
      } else {
          session_destroy();
          //Redireciona pro Login
          header("location: /auth/login.php");
    }
