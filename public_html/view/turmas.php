<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/Turmas.css">
    <link rel="stylesheet" href="../Bibliotecas/Font-awesome/css/font-awesome.min.css">

    <title>Turmas</title>
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js"> </script>
    <script src="../Bibliotecas/popper.min.js"></script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script scr="../Bibliotecas/jquery/jquery.min.js"></script>
</head>

<body>
    
<?php
    session_start();
    include_once "navBar.php";
    if($_SESSION["user"] == 'professor'){
    navProfessor();
    }else{
    navAluno();
    }
    ?>
    <!--<nav class="navbar  navbar-dark bg-info">
        <div>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target"
                style="display: flex; align-items: center;">
                <span class="navbar-toggler-icon"></span>
                <a href="" class="navbar-brand text-white" style="margin-left: 12px;">0 AO 1</a>
        </div>
     Menu hamburhuer 
        </button>
        Navega
        <div class="collapse navbar-collapse" id="nav-target">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a href="../index.php" class="nav-link text-white">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="atividades.php" class="nav-link text-white">Atividades Teorícas</a>
                </li>
                <li class="nav-item">
                    <a href="praticas.php" class="nav-link text-white">Atividades Práticas</a>
                </li>
                <li class="nav-item">
                    <a href="CriaQuiz.php" class="nav-link text-white">Criar Quiz</a>
                </li>
                <li class="nav-item">
                    <a href="EditaPerfil.php" class="nav-link text-white">Editar Perfil</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link text-white">Login</a>
                </li>
                <li class="nav-item">
                    <a href="mais.php" class="nav-link text-white">Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="rendimento.php" class="nav-link text-white">Rendimento</a>
                </li>
                <li class="nav-item">
                    <a href="Turmas.php" class="nav-link text-white">Matérias</a>
                </li>
                <li class="nav-item">
                    <a href="videos.php" class="nav-link text-white">Vídeos</a>
                </li>


            </ul>
        </div>

    </nav>
-->
    <div class="container">
        <div class="row">
            <div class="one-third col-md-4"> <a href="#" class="img-caption">
                    <figure> <img src="../Assets/img/poo.jpg" alt="" />
                        <figcaption>
                            <h3>Orientada a Objetos</h3> <span>Teste seus conhecimentos em POO!</span>
                        </figcaption>
                    </figure>
                </a> </div>
            <div class="one-third col-md-4"> <a href="#" class="img-caption">
                    <figure> <img src="../Assets/img/c.png" alt="" />
                        <figcaption>
                            <h3>C</h3> <span>Teste seus conhecimentos<br></br> na linguagem C!</span>
                        </figcaption>
                    </figure>
                </a> </div>
            <div class="one-third col-md-4"> <a href="#" class="img-caption">
                    <figure> <img src="../Assets/img/cmais.png" alt="" />
                        <figcaption>
                            <h3>C++</h3> <span>Teste seus conhecimentos<br></br> na linguagem C++!</span>
                        </figcaption>
                    </figure>
                </a> </div>
        </div>
        <div class="row">
            <div class="one-third col-md-4"> <a href="#" class="img-caption">
                    <figure> <img src="../Assets/img/pi.jpg" alt="" />
                        <figcaption>
                            <h3>Programação Para Internet</h3> <span>Aprimore seus conhecimentos em html,<br></br> css,
                                js, bootstrap e muito mais!</span>
                        </figcaption>
                    </figure>
                </a> </div>
            <div class="one-third col-md-4"> <a href="#" class="img-caption">
                    <figure> <img src="../Assets/img/py.png" alt="" />
                        <figcaption>
                            <h3>Python</h3> <span>Teste seus conhecimentos<br></br> na linguagem Python!</span>
                        </figcaption>
                    </figure>
                </a> </div>
            <div class="one-third col-md-4"> <a href="#" class="img-caption">
                    <figure> <img src="../Assets/img/calculo.png" alt="" />
                        <figcaption>
                            <h3>Cálculo</h3> <span>Teste seus conhecimentos em cálculo!</span>
                        </figcaption>
                    </figure>
                </a> </div>
        </div>
    </div>

</body>

</html>