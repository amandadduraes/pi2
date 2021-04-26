<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bibliotecas/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bibliotecas/Font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Assets/css/CriaQuiz.css">

    <title>Document</title>
</head>

<body>
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js"></script>
    <script src="../Bibliotecas/popper.min.js"></script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script scr="../Bibliotecas/jquery/jquery.min.js"></script>
    <script src="../Assets/js/CriaQuiz.js"></script>
    
    
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
    
    <!-- Os campos aparecerão aqui -->
    <form method="POST" action="../controller/Quiz.php" role="form">
        <input type="hidden" name="acao" value="inserir">
        <div id="Questoes" class="Questoes col-12 p-5">
            <div class="d-flex p-5">
                <div class="col-8 mx-auto">
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1" class="tex">Tipo da questão:</label>
                                <select name="tipo" id="nome" class="browser-default custom-select">
                                    <option value="" disabled selected>Categoria</option>
                                    <?php
                                        $conexao=mysqli_connect("localhost", "root", "toor123", "pi2", 3306);
                                        $seleciona=mysqli_query($conexao,"select * from tipo");
                                            while($campo=mysqli_fetch_array($seleciona)){?>
                                    <option value="<?=$campo["id"]?>"><?=$campo["nome"]?></option>
                                    <?php }?>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1" class="tex">Descrição da atividade:</label>
                                <textarea name="descricao" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1" class="tex">Código da turma:</label>
                                <input name="turma" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1" class="tex">Questão:</label>
                                <textarea name="pergunta[]" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Insira a pergunta aqui!"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-1">
                                <label class="tex checkbox-inline">
                                    <input name="correta[]" type="checkbox" id="inlineCheckbox1" value="1"> a).
                                </label>
                            </div>
                            <div class="form-group col-lg-11">
                                <input name="questaoA[]" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Alternativa a!">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-1">
                                <label class="tex checkbox-inline">
                                    <input name="correta[]" type="checkbox" id="inlineCheckbox1" value="2"> b).
                                </label>
                            </div>
                            <div class="form-group col-lg-11">
                                <input name="questaoB[]" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Alternativa b!">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-1">
                                <label class="tex checkbox-inline">
                                    <input name="correta[]" type="checkbox" id="inlineCheckbox1" value="3"> c).
                                </label>
                            </div>
                            <div class="form-group col-lg-11">
                                <input name="questaoC[]" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Alternativa c!">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-1">
                                <label class="tex checkbox-inline">
                                    <input name="correta[]" type="checkbox" id="inlineCheckbox1" value="4"> d).
                                </label>
                            </div>
                            <div class="form-group col-lg-11">
                                <input name="questaoD[]" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Alternativa d!">
                            </div>
                        </div>
                        <div class="box-actions">
                            <button class="btn btn-success add-more" type="button"
                                onclick="copiarModelo(this)">+</button>
                            <button type="submit" class="btn btn-primary criar">Criar</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </form>

    <!-- Modelo Quiz -->

    <div class="modelo questao col-12 d-none p-5">
        <div class="col-8 mx-auto">
            <fieldset>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label for="exampleInputEmail1" class="tex">Questão:</label>
                        <textarea name="pergunta[]" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Insira a pergunta aqui!"></textarea>
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-lg-1">
                        <label class="tex checkbox-inline">
                            <input name="correta[]" type="checkbox" id="inlineCheckbox1" value="1"> a).
                        </label>
                    </div>
                    <div class="form-group col-lg-11">
                        <input name="questaoA[]" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Alternativa a!">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-1">
                        <label class="tex checkbox-inline">
                            <input name="correta[]" type="checkbox" id="inlineCheckbox1" value="2"> b).
                        </label>
                    </div>
                    <div class="form-group col-lg-11">
                        <input name="questaoB[]" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Alternativa b!">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-1">
                        <label class="tex checkbox-inline">
                            <input name="correta[]" type="checkbox" id="inlineCheckbox1" value="3"> c).
                        </label>
                    </div>
                    <div class="form-group col-lg-11">
                        <input name="questaoC[]" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Alternativa c!">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-1">
                        <label class="tex checkbox-inline">
                            <input name="correta[]" type="checkbox" id="inlineCheckbox1" value="4"> d).
                        </label>
                    </div>
                    <div class="form-group col-lg-11">
                        <input name="questaoD[]" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="Alternativa d!">
                    </div>
                </div>
                <div class="box-actions">
                    <button type="button" class="btn btn-success add-more" onclick="copiarModelo(this)">+</button>
                    <button class="btn btn-danger remove" onclick="removerQuestao(this)" type="button">-</button>
                    <button type="submit" class="btn btn-primary criar">Criar</button>
                </div>

            </fieldset>
        </div>
    </div>
</body>

</html>