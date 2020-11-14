

<?php
   // A sessão precisa ser iniciada em cada página diferente
   if (!isset($_SESSION)) session_start();
   ?>
<html>
   <head>
      <title>SudoHosting</title>
      <link rel="shortut icon" href="/src/img/favicon.ico" title="GitHub">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
         <div class="container py-5" id="login-container">
            <h2 class="text-center text-font quicksand">Excluir conta</h2>
            <lead>
               <h5 class="text-center text-font quicksand">Confirme seus dados</h5>
            </lead>
            <div class="col px-5 text-center my-4">
               <form action="/../controller/disable_account.php" method="post">
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
                     <button type="submit" value="btn-login" class="btn button-black" style="width: 30vh;">
                        <h5 class="text-font my-auto p"><strong>Excluir</strong></h5>
                     </button>
                     <div class="my-2">
                        <lead>
                           <h7 class="text-center text-font quicksand">Essa ação não podera ser desfeita</h7>
                        </lead>
                     </div>
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
      <!-- Footer -->
      <iframe src="/../common/footer.html"
         onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>
   </body>
</html>

