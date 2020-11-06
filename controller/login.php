<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
      echo "Login inválido! Senha ta vazio"; exit;
  }

  // Tenta se conectar ao servidor MySQL
  mysqli_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  $con = mysqli_connect("localhost", "root", "", "test");

  $usuario = mysqli_real_escape_string($con,$_POST['email']);
  $senha = mysqli_real_escape_string($con,$_POST['senha']);

  // Validação do usuário/senha digitados
  $sql = "SELECT `usu_id`,`usu_nome`,`usu_nivel` FROM `tbl_usuarios` WHERE (`usu_email` = '".$usuario ."') AND (`usu_senha` = '". sha1($senha) ."')";
  $query = mysqli_query($con,$sql);
  
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    if (!isset($_SESSION)) session_start();
      // Invalida a sessão e manda pro login.php
      $_SESSION["invalido"] = 'true';
      header("location: /auth/login.php");
  } else {
      // Salva os dados encontrados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);

      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();

     

      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['usu_id'];
      $_SESSION['UsuarioNome'] = $resultado['usu_nome'];
      $_SESSION['UsuarioNivel'] = $resultado['usu_nivel'];

      // Redireciona o visitante
      header("location: /auth/user/profile.php"); exit;
  }

  ?>