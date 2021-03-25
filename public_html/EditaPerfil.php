<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/EditaPerfil.css">
    <link rel="stylesheet" href="Font-awesome/css/font-awesome.min.css">
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
  "Período",
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

    <script scr="bootstrap/bootstrap.min.js"></script>
    <script scr="bootstrap/jquery.min.js"></script>

    <div class="container-fluid d-flex p-0 col-9">
        <div class="sidebar-container">
            <div class="sidebar-logo">
                DO 0 AO 1
            </div>
            <ul class="sidebar-navigation">
                <li class="header">Navegação</li>
                <li>
                    <a href="#">
                        <i class="fa fa-video-camera" aria-hidden="true"></i> Material em Video
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-book" aria-hidden="true"></i> Material em Leitura
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-clock-o" aria-hidden="true"></i> Quizz
                    </a>
                </li>
                <li class="header">Perfil</li>
                <li>
                    <a href="#">
                        <i class="fa fa-id-card-o" aria-hidden="true"></i> Perfil
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-trophy" aria-hidden="true"></i> Ranking
                    </a>
                </li>
                <li>
                    <a href="EditaPerfil.php">
                        <i class="fa fa-cogs" aria-hidden="true"></i> Editar Perfil
                    </a>
                </li>
            </ul>
        </div>
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
                        <div class="form-group"> <input type="text" id="email" name="email" class="form-control"
                                required>
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
                        <div class="form-group"> <input type="text" id="Instituição" name="Instituição"
                                class="form-control" required> <label class="form-control-placeholder"
                                for="Instituição">Instituição</label>
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
    </div>


</body>

</html>