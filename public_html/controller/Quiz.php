<?php
    include("../model/CriaQuizBanco.php");

    $arrdeveter = [
        "pergunta",
        "setA",
        "setB",
        "setC",
        "setD",
        "questaoA",
        "questaoB",
        "questaoC",
        "questaoD",
        "descricao",
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
            echo "$desc_atv--$turma--$tipo";
            criaAtividade($desc_atv, $turma, $tipo);

            $pergunta=$_POST["pergunta"];
            $questaoA = $_POST["questaoA"];
            $questaoB = $_POST["questaoB"];
            $questaoC = $_POST["questaoC"];
            $questaoD = $_POST["questaoD"];
            
            $setA=$_POST["setA"];
            $setB=$_POST["setB"];
            $setC=$_POST["setC"];
            $setD=$_POST["setD"];
        
        

        //   foreach (int i in pergunta){

        //   }
    
        }
    }
?>