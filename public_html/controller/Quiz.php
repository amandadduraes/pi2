<?php
    include("../model/CriaQuizBanco.php");
    include("../model/Conexao1.php");
    $arrdeveter = [
        "pergunta",
        "questaoA",
        "questaoB",
        "questaoC",
        "questaoD",
        "descricao",
        "correta",
        "tipo",
        "turma",
        "acao"
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
        if($_POST["acao"] == "inserir") {

            $desc_atv = $_POST["descricao"];
            $tipo = $_POST["tipo"];
            $turma = $_POST["turma"];
            $PDO = Conexao::getConexao();
            criaAtividade($desc_atv, $turma, $tipo, $PDO);

            $contaTam=$_POST["pergunta"];
            

            for($i = 0; $i < count($contaTam); $i++){
                $alternativasCorretas = $_POST["correta"][$i];
                $perguntas = $_POST["pergunta"][$i];

                $alternativasA = $_POST["questaoA"][$i];
                $alternativasB = $_POST["questaoB"][$i];
                $alternativasC = $_POST["questaoC"][$i];
                $alternativasD = $_POST["questaoD"][$i];

                if($alternativasCorretas == '1'){
                    $alt1 = "certo";
                    $alt2 = "errado";
                    $alt3 = "errado";
                    $alt4 = "errado";
                }else if($alternativasCorretas == '2'){
                    $alt1 = "errado";
                    $alt2 = "certo";
                    $alt3 = "errado";
                    $alt4 = "errado";
                }else if($alternativasCorretas == '3'){
                    $alt1 = "errado";
                    $alt2 = "errado";
                    $alt3 = "certo";
                    $alt4 = "errado";
                }else{
                    $alt1 = "errado";
                    $alt2 = "errado";
                    $alt3 = "errado";
                    $alt4 = "certo";
                }
                
                $id_atv = $PDO->lastInsertId(); 
                // echo "---$id_atv---"; 
                // echo "$alt1--$alt2--$alt3--$alt4";
                criaPergunta($perguntas, $id_atv, $PDO);
                $id_pergunta = $PDO->lastInsertId();
                // echo "---$id_pergunta---";

                criaAlternativas($alternativasA, $alternativasB, $alternativasC, $alternativasD, $alt1, $alt2, $alt3, $alt4, $id_pergunta, $PDO);
            }
            
            
    
    
        }
    }
?>