<?php
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
  
  // Conecta ao banco atraves do connect.php
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/connect.php'); 

  $email = mysqli_real_escape_string($con,$_POST['email']);
  $cpf = mysqli_real_escape_string($con,$_POST['cpf']);
  $data_nascimento = mysqli_real_escape_string($con,$_POST['data_nascimento']);

  // Converte a data para YY/mm/dd
  $data_nascimento=date_create($data_nascimento);
  $data_nascimento=date_format($data_nascimento,"Y-m-d");
  echo $data_nascimento;

  // Validação do usuário/senha digitados
  $sql = "SELECT `usu_id` FROM `tbl_usuario` WHERE (`usu_email` = '".$email."') AND (`usu_cpf` = '".$cpf."') AND (`usu_dtnsc` = '".$data_nascimento."')";  
  $query = mysqli_query($con,$sql);

  $resultado = mysqli_fetch_assoc($query);

  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      if (!isset($_SESSION)) session_start();
      // Invalida a sessão e manda pro login.php
      $_SESSION["invalido"] = 'true';
      header("location: /auth/reset_password.php");
      } else {
          $new_password = mysqli_real_escape_string($con,$_POST['new_password']);
          $sql="UPDATE `tbl_usuario` SET `usu_senha` = SHA1('".$new_password."') WHERE (`usu_id` = '".$resultado['usu_id']."');";
          $query = mysqli_query($con,$sql);
          //Limpa a sessão
          session_destroy();
          //Redireciona pro Login
          header("location: /auth/login.php");
    }
