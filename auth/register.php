<html>

<head>
    <title>SudoHosting</title>
    <link rel="shortut icon" href="/src/img/favicon.ico" title="GitHub">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/node_modules/popper.js/dist/popper.min.js"></script>
    <script src="../src/script/datedropper/datedropper.pro.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <!-- CSS only -->
    <link rel="stylesheet" href="../css/auth.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <iframe src="/../common/header.php"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

    <div class="container-fluid py-5" id="background">
        <div class="container py-5" id="login-container">
            <h2 class="text-center text-font quicksand">Crie sua conta</h2>
            <div class="col px-5 text-center my-4">

            <form action="../controller/register.php" method="post">
                    <fieldset>


                <!-- Nome -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Nome</p>
                    </div>
                    <div class="col">
                        <div class="container login-campo">
                            <input type="text" name="name" class="form-control" style="border-width: 0px; height: 33px;">
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Email</p>
                    </div>
                    <div class="col">
                        <div class="container login-campo">
                            <input type="email" name="email" class="form-control" style="border-width: 0px; height: 33px;">
                        </div>
                    </div>
                </div>

                <!-- Senha -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Senha</p>
                    </div>
                    <div class="col">
                        <div class="container login-campo">
                        <input type="password" name="password" class="form-control" style="border-width: 0px; height: 33px;">
                        </div>
                    </div>
                </div>

                <!-- CPF -->
                <div class="row my-4">
                    <div class="col-2">
                        <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">CPF</p>
                    </div>
                    <div class="col">
                        <div class="container login-campo">
                            <input type="text" name="cpf" class="form-control" onkeypress="$(this).mask('000.000.000-00');"
                                style="border-width: 0px; height: 33px;">
                        </div>
                    </div>
                </div>

                
                <!-- Data de Nascimento -->
                <div class="row justify-content-between mt-4 mb-2">
                    <div class="col-">
                        <p class="font-weight-bold text-nowrap" style="font-size: 15pt;margin-left: 15px;">
                            Data de nascimento</p>
                    </div>
                    <div class="col-sm">
                        <input id="date-input" name="data_nascimento" class="login-campo text-center" type="text" style="width: 150px;">
                        <!-- datedropper init -->
                        <script>
                        $('#date-input').dateDropper({
                                large: true,
                                lang: "pt",
                                onChange: function(res) {
                                console.log('Current date ' + (res.date.m+'/'+res.date.d+'/'+res.date.Y) );
                            }                            
                            });
                            
                        </script>
                    </div>
                </div>
                

          
                <!-- Botão -->
                <button type="submit" value="btn-register" class="btn button-black" style="width: 30vh;">
                            <h5 class="text-font my-auto p"><strong>Cadastrar</strong></h5>
                        </button>

                        </fieldset>
                </form>

                <!-- Mensagem de erro -->
                <?php
                if(isset($_SESSION["invalido"]) && $_SESSION["invalido"]=='true'){
                          $_SESSION["invalido"] = 'false';
                        
                          echo '<span><div class="container text-center text-font p-1 quicksand my-4" style="background-color: #685C57; border-radius: 25px;"><lead>Dados invalidos, verifique e tente novamente.</lead></div></span></span>';
                }
                ?>
                <div class="my-4">
                    <lead>Estudantes da ETEC conseguem hospedagem grátis para o TCC.</lead>
                </div>
                <p>Já possui uma conta?</p>
                <a href="login.php">
                    <p class="text-font">Clique aqui para entrar</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <iframe src="
    ../common/footer.html"
        onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>

</body>