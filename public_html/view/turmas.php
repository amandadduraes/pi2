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
include_once "navBar.php";
include_once "../model/Usuario.php";
session_start();


if(!isset($_SESSION["user"])){
    header("Location: ../index.php");
}

$usuario = $_SESSION["user"];

if($usuario->perfil == 'professor'){
    navProfessor();
}else{
    navAluno();
}
?>
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