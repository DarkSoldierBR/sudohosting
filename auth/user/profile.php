<?php

  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();

  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID'])) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: /auth/login.php"); exit;
  }

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
    <iframe src="/../common/header.html"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

    <div class="container-fluid py-5" id="background">
        <div class="container py-5" id="login-container">
            <h2 class="text-center text-font quicksand">Seu Perfil</h2>
            <div class="col px-5 text-center">

                <!-- Nome -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Nome</p>
                    </div>
                    <div class="col">
                        <div class="container login-campo">
                            <input class="form-control" style="border-width: 0px; height: 33px;">
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
                            <input class="form-control" style="border-width: 0px; height: 33px;">

                        </div>
                    </div>
                </div>

                <!-- Senha -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Senha</p>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="container login-campo">
                            <input class="form-control" style="border-width: 0px; height: 33px;">

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
                            <input type="text" class="form-control" style="border-width: 0px; height: 33px;"
                                onkeypress="$(this).mask('000.000.000-00');" style="border-width: 0px;">
                        </div>
                    </div>
                </div>

                    <!-- Data de Nascimento -->
                <div class="row justify-content-between my-4">
                    <div class="col-">
                        <p class="font-weight-bold text-nowrap" style="font-size: 15pt;margin-left: 15px;">
                            Data de nascimento</p>
                    </div>
                    <div class="col-sm">

                        <input id="date-input" class="login-campo text-center" type="text" style="width: 150px;">
                        <!-- datedropper init -->
                        <script>$('#date-input').dateDropper({
                                large: true,
                                lang: "pt"
                            });
                        </script>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="text-center my-4">
                        <a class="btn button-black p-2" href="/auth/user/update_profile.html">
                            <lead class="font-weight-bold p-3 text-font" style="font-size: 13pt;">Alterar dados</lead>
                        </a>
                         </div>
                         <div class="text-center my-4">
                            <a class="btn button-black p-2">
                                <lead class="font-weight-bold p-3 text-font" style="font-size: 13pt;">Sair</lead>
                            </a>
                             </div>
                </div>

            </div>
        </div>

        <!-- Painel -->
        <div class="row m-5 justify-content-center">
            <!-- VPS -->
            <div class="col-3 mx-5 text-center" style="height: 300px;">
                <img src="/src/img/private 1.png" class="img" height="200px" alt="VPS Image">
                <h4><strong>Clique para acessar o VPS</strong></h4>
                <div class="button-red my-4">
                    <h5 class="text-font p-2"><strong>Acessar</strong></h5>
                </div>

            </div>
            <!-- Cloud -->
            <div class="col-3 mx-5 text-center" style="height: 300px;">
                <img src="/src/img/cloud.png" class="img" height="200px" alt="Cloud Image">
                <h4><strong>Clique para acessar a Cloud</strong></h4>
                <div class="button-red my-4">
                    <h5 class="text-font p-2"><strong>Acessar</strong></h5>
                </div>

            </div>
            <!-- Hospedagem -->
            <div class="col-3 mx-5 text-center" style="height: 300px;">
                <img src="/src/img/hosting.png" class="img" height="200px" alt="Hosting Image">
                <h4><strong>Clique para acessar a Hospedagem</strong></h4>
                <div class="button-red my-4">
                    <h5 class="text-font p-2"><strong>Acessar</strong></h5>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <iframe src="/../common/footer.html"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

</body>