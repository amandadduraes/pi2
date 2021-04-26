<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="../Bibliotecas/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/rendimento.css">
    <link rel="stylesheet" href="../Bibliotecas/Font-awesome/css/font-awesome.min.css">

    <title>Atividades Teóricas</title>
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js"></script>
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
    include("../model/Conexao1.php");
    $stmt = $PDO->query("select * from usuario order by pontuacao desc");
    while ($row = $stmt->fetch()) {?>
                    <td class="lalign"><?=$row["email"]?></td>
                    <td><?=$row["pontuacao"]?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
  
</body>

</html>