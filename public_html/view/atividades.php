
<!DOCTYPE >
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Assets/css/teorica.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="."></script>
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">

    <title>Atividades Teóricas</title>

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
    

    <section>
        <div class="leftBox">
            <div class="content">
                <h1 class="text-info">Atividades Teóricas</h1>

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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js">
    </script>
    <script src="../Bibliotecas/popper.min.js">
    </script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</body>

</html>