<?php
	include_once("conexao.php");
	$nome_usuario = $_POST['txt_nome_usuario'];
	$email_usuario = $_POST['txt_email_usuario'];
	$senha_usuario = $_POST['txt_senha_usuario'];
	$data_usuario = $_POST['int_data_usuario'];
	$cpf_usuario = $_POST['int_cpf_usuario'];
	$requisito_usuario = $_POST['txt_requisito_usuario']; //Requisito é se o aluno participa ou não da ETEC
	//echo "$nome_usuario - $email_usuario";
	
	$result_usuario = "INSERT INTO usuarios(nome, email, senha, data, cpf, requisito) VALUES ('$nome_usuario','$email_usuario', '$senha_usuario', '$data_usuario', '$cpf_usuario', '$requisito_usuario')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/SudoHost/register.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/SudoHost/register.php'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>