<?php 

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
  // Tenta se conectar ao servidor MySQL
  mysqli_connect('localhost', 'root', '') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  $con = mysqli_connect("localhost", "root", "", "test");

  $id=$_SESSION["UsuarioID"];

  // Validação do usuário/senha digitados
  $sql = "SELECT * FROM `tbl_usuario` WHERE (`usu_id` = '".$id."')";  
  $query = mysqli_query($con,$sql);

  $resultado = mysqli_fetch_assoc($query);

  $_SESSION['UsuarioCPF'] = $resultado['usu_cpf'];
  $_SESSION['UsuarioEmail'] = $resultado['usu_email'];


  $data_nascimento=date_create($resultado['usu_dtnsc']);
  $_SESSION['UsuarioNascimento']=date_format($data_nascimento,"d/m/Y");
