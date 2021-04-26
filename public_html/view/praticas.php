<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Assets/css/teorica.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bibliotecas/Font-awesome/css/font-awesome.min.css">
    <title>Atividades Práticas</title>
    <script scr="../Bibliotecas/jquery/jquery.min.js"></script>
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="../Bibliotecas/popper.min.js"></script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
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
    <section>
        <div class="leftBox">
            <div class="content">
                <h1 class="text-info">Atividades Práticas</h1>

            </div>
        </div>
        <div class="events">
            <ul>
                <li>
                    <div class="time">
                        <h2> <br> <span> 1</span></h2>
                    </div>
                    <div class="details">
                        <h3 class="text-info">Objeto</h3>
                        <p>Este quiz tem como finalidade testar o conhecimento dos alunos sobre Objeto.</p>
                        <a class="text-info" href="perguntas.php">Iniciar Quiz</a>
                    </div>

                </li>
                <li>
                    <div class="time">
                        <h2> <span> 2 </span></h2>
                    </div>
                    <div class="details">
                        <h3 class="text-info">Exemplo</h3>
                        <p>ISTO É UM EXEMPLO</p>
                        <a class="text-info" href="#">Detalhes</a>
                    </div>

                </li>
                <li>
                    <div class="time">
                        <h2> <span> 3</span></h2>
                    </div>
                    <div class="details">
                        <h3 class="text-info">Exemplo</h3>
                        <p>ISTO É UM EXEMPLO</p>
                        <a class="text-info" href="#">Detalhes</a>
                    </div>

                </li>

            </ul>
        </div>
    </section>

</body>

</html>