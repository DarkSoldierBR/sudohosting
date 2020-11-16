

<?php
   // A sessão precisa ser iniciada em cada página diferente
   if (!isset($_SESSION)) session_start();
   ?>
<html>
   <head>
      <title>SudoHosting</title>
      <link rel="shortut icon" href="/src/img/favicon.ico" title="SudoHosting">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- CSS only -->
      <link rel="stylesheet" href="../css/auth.css">
      <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/home.css">
        <!-- Scripts -->
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
      <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
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
               <h2 class="mx-auto text-font my-4 quicksand">Acesse sua conta</h2>
            </div>
            <div class="col text-center">
               <form action="../controller/login.php" method="post">
                  <fieldset>
                     <!-- Email -->
                     <div class="form-group">
                        <div class="row my-4">
                           <div class="col-2">
                              <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Email</p>
                           </div>
                           <div class="col">
                              <div class="container login-campo">
                                 <input type="email" name="email" class="form-control"
                                    style="border-width: 0px; height: 33px;">
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Senha -->
                     <div class="form-group">
                        <div class="row my-4">
                           <div class="col-2">
                              <p class="my-2 text-center font-weight-bold" style="font-size: 15pt">Senha</p>
                           </div>
                           <div class="col">
                              <div class="container login-campo">
                                 <input type="password" name="password" class="form-control"
                                    style="border-width: 0px; height: 33px;">
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                        if(isset($_SESSION["invalido"]) && $_SESSION["invalido"]=='true'){
                                  $_SESSION["invalido"] = 'false';
                                  echo '<span><div class="container text-center text-font p-1 quicksand my-4" style="background-color: #685C57; border-radius: 25px;"><lead>Email ou senha invalidos, verifique e tente novamente.</lead></div></span></span>';
                        }
                        ?>
                     <button type="submit" value="btn-login" class="btn button-black y-2 px-3">
                        <h5 class="text-font my-auto p"><strong>Entrar</strong></h5>
                     </button>
                  </fieldset>
               </form>
               <!-- Não possui conta -->
               <a href="reset_password.php">
                  <p class="mt-4 text-font">Esqueci a senha</p>
               </a>
               <a href="register.php">
                  <p class="text-font">Clique aqui para cadastrar</p>
               </a>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <iframe src="../common/footer.html"
         onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>
   </body>
</html>

