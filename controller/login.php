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
  $sql = "SELECT `usu_nome` FROM `tbl_usuarios` WHERE (`usu_email` = '".$usuario ."')";
  $query = mysqli_query($con,$sql);
  
  if (mysqli_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontados na variável $resultado
      $resultado = mysqli_fetch_assoc($query);
  }

  ?>