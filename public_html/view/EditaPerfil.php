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
    <?php
    include_once "navBar.php";
    include_once "../model/Usuario.php";
    session_start();
    $usuario = $_SESSION["user"];
    if($usuario->perfil == 'professor'){
    navProfessor();
    }else{
    navAluno();
    }
    ?>
    <form method="POST" action="" enctype='multipart/form-data' class="col-10">
        <div class="container">
            <div class="col-12 d-flex p-5">
                <div class="col-7 mx-auto">
                    <div class="form-group"> <input type="text" id="nome" name="nome" class="form-control" required>
                        <label class="form-control-placeholder" for="nome">Nome</label>
                    </div>
                     <!--<div class="form-group"> <input type="text" id="sobrenome" name="sobrenome" class="form-control"
                            required> <label class="form-control-placeholder" for="sobrenome">Sobrenome</label>
                    </div> -->
                    <div class="form-group"> <input type="text" id="email" name="email" class="form-control" required>
                        <label class="form-control-placeholder" for="email">Email</label>
                    </div>

                    <div class="form-group"> <input type="password" id="email" name="senha" class="form-control" required>
                        <label class="form-control-placeholder" for="senha">Senha</label>
                    </div>
                     <!--<div class="form-group"> <input type="text" id="fone" name="fone" class="form-control" required>
                        <label class="form-control-placeholder" for="fone">Fone</label>
                    </div> 
                </div>
                 <div class="col-7 mx-auto">
                    <div class="form-group"> <input type="text" id="country" name="country" class="form-control"
                            required> <label class="form-control-placeholder" for="country">País</label> </div>
                    <div class="form-group"> <input type="text" id="city" name="city" class="form-control" required>
                        <label class="form-control-placeholder" for="city">Cidade/Município</label>
                    </div> -->
                    <div class="form-group"> <input type="text" id="Instituição" name="Instituição" class="form-control"
                            required> <label class="form-control-placeholder" for="Instituição">Instituição</label>
                    </div>
                   <!-- <div class="form-group"> <input type="text" id="Período" name="Período" class="form-control"
                            required> <label class="form-control-placeholder" for="Período">Período</label> </div>
                </div>
            </div>
        </div>
       <div class="d-flex align-items-end flex-column">
            <div class="d-flex align-items-end flex-column">
                <label>Selecione uma foto de Perfil:</label>
                <input type="file" id="foto" name="foto" multiple="multiple" />
            </div> 

        </div>-->
        <p> <input type="submit" value="Atualizar Perfil" class="btn btn-lg btn-primary" /> </p>
    </form>

</body>

</html>