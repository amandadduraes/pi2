<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/EditaPerfil.css">
    <link rel="stylesheet" href="../Bibliotecas/Font-awesome/css/font-awesome.min.css">

</head>

<body>
    <?php
$arrdeveter = [
  "nome",
  "sobrenome",
  "email",
  "fone",
  "country",
  "city",
  "Instituição",
  "Período"
];
// print_r($_POST);
$erro = false;
foreach($arrdeveter as $dev){
if(!isset($_POST[$dev])){
$erro = true;
// echo "<br>".$dev;
}
}
// echo "<br>".$erro;
if(!$erro){
  $nome=$_POST["nome"];
  $sobrenome=$_POST["sobrenome"];
  $email = $_POST["email"];
  $fone=$_POST["fone"];
  $country=$_POST["country"];
  $city = $_POST["city"];
  $Instituição = $_POST["Instituição"];
  $Período = $_POST["Período"];
}
if(isset($_FILES["foto"])){
  $foto=$_FILES["foto"]["tmp_name"];
}
?>
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js">
    </script>
    <script src="../Bibliotecas/popper.min.js">
    </script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script scr="../Bibliotecas/jquery/jquery.min.js"></script>
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
    <form method="POST" action="" enctype='multipart/form-data' class="col-10">
        <div class="container">
            <div class="col-12 d-flex p-5">
                <div class="col-7 mx-auto">
                    <div class="form-group"> <input type="text" id="nome" name="nome" class="form-control" required>
                        <label class="form-control-placeholder" for="nome">Nome</label>
                    </div>
                    <div class="form-group"> <input type="text" id="sobrenome" name="sobrenome" class="form-control"
                            required> <label class="form-control-placeholder" for="sobrenome">Sobrenome</label>
                    </div>
                    <div class="form-group"> <input type="text" id="email" name="email" class="form-control" required>
                        <label class="form-control-placeholder" for="email">Email</label>
                    </div>
                    <div class="form-group"> <input type="text" id="fone" name="fone" class="form-control" required>
                        <label class="form-control-placeholder" for="fone">Fone</label>
                    </div>
                </div>
                <div class="col-7 mx-auto">
                    <div class="form-group"> <input type="text" id="country" name="country" class="form-control"
                            required> <label class="form-control-placeholder" for="country">País</label> </div>
                    <div class="form-group"> <input type="text" id="city" name="city" class="form-control" required>
                        <label class="form-control-placeholder" for="city">Cidade/Município</label>
                    </div>
                    <div class="form-group"> <input type="text" id="Instituição" name="Instituição" class="form-control"
                            required> <label class="form-control-placeholder" for="Instituição">Instituição</label>
                    </div>
                    <div class="form-group"> <input type="text" id="Período" name="Período" class="form-control"
                            required> <label class="form-control-placeholder" for="Período">Período</label> </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-end flex-column">
            <div class="d-flex align-items-end flex-column">
                <label>Selecione uma foto de Perfil:</label>
                <input type="file" id="foto" name="foto" multiple="multiple" />
            </div>

        </div>
        <p> <input type="submit" value="Atualizar Perfil" class="btn btn-lg btn-primary" /> </p>
    </form>

</body>

</html>