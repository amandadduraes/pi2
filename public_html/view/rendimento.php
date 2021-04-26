<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="../Bibliotecas/jquery/jquery.min.js"></script>
    <!--Bootstrap Versão 4.1.3  -->
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/rendimento.css">

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
    
    <div id="wrapper">
        <h1>Rank Geral</h1>

        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th><span>Email</span></th>
                    <th><span>Pontuação</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
    include("../model/conexao.php");
    $stmt = $PDO->query("select * from usuario order by pontuacao desc");
    while ($row = $stmt->fetch()) {?>
                    <td class="lalign"><?=$row["email"]?></td>
                    <td><?=$row["pontuacao"]?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js">
    </script>
    <script src="../Bibliotecas/popper.min.js">
    </script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</body>

</html>