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
    <nav class="navbar  navbar-dark bg-info">
        <div>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target"
                style="display: flex; align-items: center;">
                <span class="navbar-toggler-icon"></span>
                <a href="" class="navbar-brand text-white" style="margin-left: 12px;">0 AO 1</a>
        </div>
        <!-- Menu hamburhuer -->
        </button>
        <!-- Navegação -->
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