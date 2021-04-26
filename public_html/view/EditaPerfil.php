<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/EditaPerfil.css">
    <link rel="stylesheet" href="../Bibliotecas/Font-awesome/css/font-awesome.min.css">
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="../Bibliotecas/popper.min.js"></script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script scr="../Bibliotecas/jquery/jquery.min.js"></script>

    <!-- No evento document.ready realizar chamada Ajax para logincontroller.php buscando quem é o usuário logado
    Se retornar sucesso carregar dados retornados no formulário -->

</head>

<body>
    <?php
$arrdeveter = [
  "nome",
  "email",
  "Instituição",
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
  $email = $_POST["email"];
  $Instituição = $_POST["Instituição"];
}
?>
    
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
    <form method="POST" action="../controller/EditaPerfilController.php" enctype='multipart/form-data' class="col-10">
        <div class="container">
        <input type="hidden" name="email" value='<?=$usuario->email?>'>
            <div class="col-12 d-flex p-5">
                <div class="col-7 mx-auto">
                    <div class="form-group"> <input type="text" id="nome" name="nome" class="form-control" required value='<?=$usuario->nome?>'>
                        <label class="form-control-placeholder" for="nome">Nome</label>
                    </div>
                    <div class="form-group"> <input type="password" id="email" name="senha" class="form-control" required>
                        <label class="form-control-placeholder" for="senha">Senha</label>
                    </div>
                   
                    <div class="form-group"> <input type="text" id="Instituição" name="instituicao" class="form-control"
                            required value='<?=$usuario->instituicao?>'> <label class="form-control-placeholder" for="Instituição">Instituição</label>
                    </div>
            
        <p> <input type="submit" value="Atualizar Perfil" class="btn btn-lg btn-primary" /> </p>
    </form>

</body>

</html>