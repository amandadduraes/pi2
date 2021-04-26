<?php
session_start();
session_destroy();
?>
<html>
<head>
  <title>Tela inicial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <meta charset="utf-8"/>

  <link rel="stylesheet" href="Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <script src="./Bibliotecas/jquery/jquery-3.3.1.slim.min.js"></script>
  <script src="./Bibliotecas/popper.min.js"></script>
  <script src="./Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>  
</head>
<body>
    <div class="container">
      <div class="content">
        <h2 class="display-3">0 ou 1</h2>

        <p class=" display-2">O nosso objetivo é apoiar estudantes de Computação. 
          <br>Venha aprender com a gente!"</p>                     

        <a class=" btn  btn-white text-info" href="view/cadastro.php" >Cadastro</a>
        <a class=" btn   text-info" href="view/login.php">Login</a>
      </div>
    </div>   
</body>
</html>