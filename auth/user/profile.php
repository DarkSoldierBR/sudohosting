<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/check/check_user.php'); 
require_once($_SERVER['DOCUMENT_ROOT'].'/controller/profile.php'); 
if (!isset($_SESSION)) session_start();

?>

<html>

<head>
    <title>SudoHosting</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="../src/script/datedropper/datedropper.pro.min.js"></script>

    <!-- CSS only -->
    <link rel="stylesheet" href="/../css/auth.css">
    <link rel="stylesheet" href="/../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../css/home.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <iframe src="/../common/header.php"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

    <div class="container-fluid py-5" id="background">
    <div class="col mx-auto p-3" style="background-image: linear-gradient(#FF0000, #FF5232,#FF7B5A); border-radius:25px; max-width: 80vh">
            <div class="row">
               <h2 class="mx-auto text-font my-4 quicksand">Seu Perfil</h2>
            </div>

                <!-- Nome -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Nome</p>
                    </div>
                    <div class="col">
                        <div class="container login-campo">
                        <?php echo '<input class="form-control" style="border-width: 0px; height: 33px; background-color: #ffffff;" value="'.$_SESSION["UsuarioNome"].'" readonly>'; ?>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Email</p>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="container login-campo">
                        <?php echo '<input class="form-control" style="border-width: 0px; height: 33px; background-color: #ffffff;" value="'.$_SESSION["UsuarioEmail"].'" readonly>'; ?>

                        </div>
                    </div>
                </div>

                <!-- CPF -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt" ;>CPF</p>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="container login-campo">
                        <?php echo '<input type="text" class="form-control" style="border-width: 0px; height: 33px;background-color: #ffffff;" value="'.$_SESSION["UsuarioCPF"].'" readonly>'; ?>
                        </div>
                    </div>
                </div>
            
                <!-- Data de Nascimento -->
                <div class="row justify-content-between px-3 my-4">
                        <p class="font-weight-bold text-nowrap" style="font-size: 15pt;">
                           Data de nascimento
                        </p>
                        <?php echo '<input id="date-input" name="data_nascimento" class="login-campo text-center" type="text" style="max-width: 7rem;" value="'.$_SESSION["UsuarioNascimento"].'" readonly>'; ?>
                        
                     </div>                                    

                <div class="row justify-content-between">
                             
                <div class="col">
                    <div class="text-center align-middle">
                    <a class="btn button-black p-2" href="/auth/reset_password.php">
                        <lead class="font-weight-bold text-font text-nowrap" style="font-size: 13pt;">Alterar senha</lead>
                    </a>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center align-middle">
                    <a class="btn button-black p-2" href="/auth/user/disable_account.php">
                        <lead class="font-weight-bold text-font" style="font-size: 13pt;">Excluir conta</lead>
                    </a>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center">
                        <form action="../../controller/logout.php" method="post">
                            <button type="submit" value="Logout" class="text-center btn button-black p-2"> 
                                    <lead class="font-weight-bold p-3 text-font" style="font-size: 13pt;">Sair</lead>             
                            </button>
                        </form>
                    </div>
                </div>



                </div>
                </div>
                
              
                <!-- Painel -->
                <div class="row m-5 justify-content-center">
                    <!-- VPS -->
                    <div class="col my-4 text-center">
                        <img src="/src/img/private 1.png" class="img" height="200px" alt="VPS Image">
                        <h4><strong>Clique para acessar o VPS</strong></h4>
                        <div class="col-5 mx-auto button-red my-4">
                            <h5 class="text-font p-2"><strong>Acessar</strong></h5>
                        </div>

                    </div>
                    <!-- Cloud -->
                    <div class="col my-4 text-center">
                        <img src="/src/img/cloud.png" class="img" height="200px" alt="Cloud Image">
                        <h4><strong>Clique para acessar a Cloud</strong></h4>
                        <a href="http://sudohosting.servehttp.com:223/nextcloud/">
                        <div class="col-5 mx-auto button-red my-4">
                            <h5 class="text-font p-2"><strong>Acessar</strong></h5>
                        </div>
                        </a>

                    </div>
                    <!-- Hospedagem -->
                    <div class="col my-4 text-center">
                        <img src="/src/img/hosting.png" class="img" height="200px" alt="Hosting Image">
                        <h4><strong>Clique para acessar a Hospedagem</strong></h4>
                        <div class="col-5 mx-auto button-red my-4">
                            <h5 class="text-font p-2"><strong>Acessar</strong></h5>
                        </div>

                    </div>
                </div>
    </div>

    <!-- Footer -->
    <iframe src="/../../../common/footer.html"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

</body>