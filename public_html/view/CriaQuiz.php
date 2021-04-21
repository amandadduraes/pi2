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
    <?php
$arrdeveter = [
  "pergunta",
  "setA",
  "setB",
  "setC",
  "setD",
  "questaoA",
  "questaoB",
  "questaoC",
  "questaoD"
];
 //print_r($_POST);
$erro = false;
foreach($arrdeveter as $dev){
if(!isset($_POST[$dev])){
$erro = true;
// echo "<br>".$dev;
}
}
 //echo "<br>".$erro;
if(!$erro){
  $pergunta=$_POST["pergunta"];
  $questaoA = $_POST["questaoA"];
  $questaoB = $_POST["questaoB"];
  $questaoC = $_POST["questaoC"];
  $questaoD = $_POST["questaoD"];
  
  $setA=$_POST["setA"];
  $setB=$_POST["setB"];
  $setC=$_POST["setC"];
  $setD=$_POST["setD"];
  

  if($setA == 'certo'){
    $setB='errado';
    $setC='errado';
    $setD='errado';
  }if($setB == 'certo'){
    $setA='errado';
    $setC='errado';
    $setD='errado';
  }if($setC == 'certo'){
    $setA='errado';
    $setB='errado';
    $setD='errado';
  }else{
    $setA='errado';
    $setB='errado';
    $setC='errado'; 
  }
  
}
?>
    <script src="../Bibliotecas/jquery/jquery-3.3.1.slim.min.js">
    </script>
    <script src="../Bibliotecas/popper.min.js">
    </script>
    <script src="../Bibliotecas/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script scr="../Bibliotecas/jquery/jquery.min.js"></script>
    <script src="../Assets/js/CriaQuiz.js"></script>

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
    <!-- Os campos aparecerão aqui -->
    <form method="POST" action="" role="form">
        <div id="Questoes" class="Questoes col-12 p-5">
            <div class="d-flex p-5">
                <div class="col-8 mx-auto">
                    <fieldset>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="exampleInputEmail1" class="tex">Tipo da questão:</label>
                                <select id="nome" class="browser-default custom-select">
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
                                <label for="exampleInputEmail1" class="tex">Questão:</label>
                                <textarea name="pergunta[]" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Insira a pergunta aqui!"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-1">
                                <label class="tex checkbox-inline">
                                    <input name="setA[]" type="checkbox" id="inlineCheckbox1" value="certo"> a).
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
                                    <input name="setB[]" type="checkbox" id="inlineCheckbox1" value="certo"> b).
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
                                    <input name="setC[]" type="checkbox" id="inlineCheckbox1" value="certo"> c).
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
                                    <input name="setD[]" type="checkbox" id="inlineCheckbox1" value="certo"> d).
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
                            <input name="setA[]" type="checkbox" id="inlineCheckbox1" value="certo"> a).
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
                            <input name="setB[]" type="checkbox" id="inlineCheckbox1" value="certo"> b).
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
                            <input name="setC[]" type="checkbox" id="inlineCheckbox1" value="certo"> c).
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
                            <input name="setD[]" type="checkbox" id="inlineCheckbox1" value="certo"> d).
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