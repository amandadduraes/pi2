<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/css/materias.css">
  <link rel="stylesheet" href="../assets/Bibliotecas/Font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  <meta charset="utf-8" />
  <title>Vídeos</title>
</head>

<body>
  <?php
  include_once "menu.php";
  include_once "../model/Usuario.php";

  session_start();

  if (!isset($_SESSION["user"])) {
    header("Location: ../index.php");
  }

  $usuario = $_SESSION["user_perfil"];


  if ($usuario == 'professor') {
    navProfessor();
  } else {
    navAluno();
  }
  ?>
 <div class="container-principal">
    <div class="container-esquerda">
    </div>
    <div class="container-direita">
    
     

      <a class="linksMat" href="./BoasPraticas.html">Lista de Boas Práticas de Programação Orientada a Objetos</a>
      <a class="linksMat" href="./MasPraticas.html">Lista de Más Práticas de Programação Orientada a Objetos</a>
      <a class="linksMat" href="./sugestoes.html"> Sugestões sobre Programação Orientada a Objetos     </a>
        
      </div>
    </div>
  
 

</html>