<?php 
    require_once(__DIR__."/../model/Conexao1.php");
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="../bibliotecas/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/rendimento.css">
    <link rel="stylesheet" href="../bibliotecas/Font-awesome/css/font-awesome.min.css">

    <title>Atividades Teóricas</title>
    <script src="../bibliotecas/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="../bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script scr="../bibliotecas/jquery/jquery.min.js"></script>
</head>

<body>
    <?php include_once "navBar.php"; ?>

    <div id="wrapper">
        <h1>Rank Geral</h1>

        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th><span>Nome</span></th>
                    <th><span>Pontuação</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    $PDO = Conexao::getConexao();
                    $stmt = $PDO->query("select * from usuario order by pontuacao desc");
                    while ($row = $stmt->fetch()) {?>
                    <td class="lalign"><?=$row["nome"]?></td>
                    <td><?=$row["pontuacao"]?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
  
</body>

</html> 