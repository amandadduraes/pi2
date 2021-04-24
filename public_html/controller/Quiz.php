<?php
    include("../model/CriaQuizBanco.php");

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
    print_r($_POST);
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
            criaAtividade($desc_atv, $turma, $tipo);

            $contaTam=$_POST["pergunta"];
            

            for($i = 0; $i < count($contaTam); $i++){
                $alternativasCorretas = $_POST["correta"][$i];
                $perguntas=$_POST["pergunta"][$i];

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
                include("../model/Conexao.php");
                $stmt = $PDO->query("select id from atividade where descricao='$desc_atv'");
                $id_atv = $stmt->fetch(); 
                echo "$id_atv['id']"; 
            }
            
            
            
            
            
            echo "$alt1--$alt2--$alt3--$alt4";
            //criaQuestaoEAlternativas($pergunta, $questaoA, $questaoB, $questaoC, $questaoD, $alt1, $alt2, $alt3, $alt4);
            
        
        

        //   foreach (int i in pergunta){

        //   }
    
        }
    }
?>