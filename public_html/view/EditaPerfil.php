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

    <!-- No evento document.ready realizar chamada Ajax para logincontroller.php buscando quem é o usuário logado
    Se retornar sucesso carregar dados retornados no formulário -->

</head>

<body>
    <script src="../Bibliotecas/jquery/jquery.min.js"></script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="../Assets/js/EditaPerfil.js"></script>

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
    <form id="form1" method="POST" action="" class="col-12">
        <div id="prin" class="container">
            <input type="hidden" id="email" name="email" value='<?=$usuario->email?>'>
            <div class="col-12 d-flex p-5">
                <div class="col-7 mx-auto">
                    <div class="form-group"> <input type="text" id="nome" name="nome" class="form-control" required
                            value='<?=$usuario->nome?>'>
                        <label class="form-control-placeholder" for="nome">Nome</label>
                    </div>
                    <div class="form-group"> <input type="password" id="senha" name="senha" class="form-control"
                            required>
                        <label class="form-control-placeholder" for="senha">Senha</label>
                    </div>

                    <div class="form-group"> <input type="text" id="Instituição" name="instituicao" class="form-control"
                            required value='<?=$usuario->instituicao?>'> <label class="form-control-placeholder"
                            for="Instituição">Instituição</label>
                    </div>

                    <p> <input id="bntAtualiza" type="button" value="Atualizar Perfil" class="btn btn-lg btn-primary" />
                    </p>
                </div>
            </div>
        </div>
    </form>

</body>

</html>