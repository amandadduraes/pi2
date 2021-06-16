<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/listaQuiz.css">
    <link rel="stylesheet" href="../Bibliotecas/Font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Bibliotecas/dataTables/jquery.dataTables.min.css">
    <script src="../Bibliotecas/jquery/googleapis-jquery.min.js"></script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="../Bibliotecas/dataTables/jquery.dataTables.min.js"></script>
    <script src="../Assets/js/listaQuiz.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
    <title>Lista Quiz</title>
</head>

<body>
<?php

include_once "menu.php";

session_start();

if(!isset($_SESSION["user"])){
    header("Location: ../index.php");
}

$usuario_perfil = $_SESSION["user_perfil"]; 
$usuario_nome = $_SESSION["user_nome"] ;
$usuario_instituicao = $_SESSION["user_instituicao"];

if($usuario_perfil == "professor"){
    navProfessor();
}
else{
    navAluno();
}
?>
        <div class="container p-2">
        <small id="prin" style="display: none; color: red;" class="pb-2"></small>
            <table id="example" class="display">
                <thead>
                    <tr>
                        <td class="centraliza"><em class="fa fa-cog"></em></td>
                        <th>Turma</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $PDO = Conexao::getConexao();
                            $stmt = $PDO->query("select * from atividade");
                            while ($row = $stmt->fetch()) {
                        ?>
                        <td class="centraliza">
                            <button type="button" onclick="mudaIDdelete(<?=$row['id']?>,this)" class="btn btn-danger"><em
                                    class="fa fa-trash"></em></button>
                        </td>
                        <th>
                            <?=$row['id']?>
                        </th>
                        <th>
                            <?=$row['descricao']?>
                        </th>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
</body>

</html>