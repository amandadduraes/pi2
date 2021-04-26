<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/mais.css">
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
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
   
    <div class="container-teste">
        <span class="big-circle"></span>
        <img src="../Assets/img/corpo1.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title text-info">Sobre o Trabalho</h3>
                <p class="text">
                    Trabalho desenvolvido pela aluna Amanda Durães juntamente com o aluno Ricardo Barbosa, com o objetivo de
                    ajudar alunos dos cursos de Computação.
                </p>

                <div class="info">
                    <div class="information">
                        <img src="../Assets/img/logoUfu.png" class="icon" alt="" />
                        <p>Universidade Federal de Uberlândia</p>
                    </div>
                    <div class="information">
                        <img src="../Assets/img/e-mail.png" class="icon" alt="" />
                        <p>amandaduraes@ufu.br</p>

                    </div>
                    <div class="information">
                        <img src="../Assets/img/e-mail.png" class="icon" alt="" />
                        <p>ricardo.filho@ufu.br</p>
                    </div>
                </div>


            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="index.html" autocomplete="off">
                    <h3 class="title text-white">Contato</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" />
                        <label for="">Nome</label>
                        <span>Nome</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" />
                        <label for="">E-mail</label>
                        <span>E-mail</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Telefone</label>
                        <span>Telefone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Mensagem</label>
                        <span>Mensagem</span>
                    </div>
                    <input type="submit" value="Enviar" class="btn"/>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js">
    </script>
    <script src="../Bibliotecas/popper.min.js"> </script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</body>

</html>