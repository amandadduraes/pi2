<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/listaQuiz.css">
    <link rel="stylesheet" href="../Bibliotecas/Font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <!-- <script scr="../Bibliotecas/jquery/jquery.min.js"></script>
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    
    <script src="http://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
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
    include "../model/Conexao1.php";
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
    <form method="post" action="../controller/listaBancoController.php" id="form">
    <input type="hidden" name="id" id="idDel" value="">
        <div class="container">
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
                            <button type="button" onclick="mudaIDdelete(<?=$row['id']?>)" class="btn btn-danger"><em
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
    </form>
</body>

</html>