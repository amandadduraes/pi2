<?php
    
function criaAtividade($desc_atv, $turma, $tipo){
    include("conexao.php");
    $sql = "insert into atividade (descricao, turma_codigo, id_tipo) values (?,?,?)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(1, $desc_atv);
    $stmt->bindParam(2, $turma);
    $stmt->bindParam(3, $tipo);
    
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo '<script>alert("Atividade criada com sucesso!");</script>';
        }else{
            echo '<script>alert("Erro ao criar a atividade!");</script>';
        }
    }
}

        // $sql1 = "insert into questao (id, descricao, valor, atividade_id, alternativa_correta_id) values (?,?,?,?,?)"
        // $stmt1 = $PDO->prepare($sql1);
        // $stmt1->bindParam(1, null);
        // $stmt1->bindParam(2, $desc1);
        // $stmt1->bindParam(3, 10);
        // $stmt1->bindParam(4, $atv_id);
        // $stmt1->bindParam(5, );

        // // ALTERNATIVA A
        // $sqlA = "insert into alternativa (id, descricao, questao_id) values (?,?,?)"
        // $stmtA = $PDO->prepare($sqlA);
        // $stmtA->bindParam(1, null);
        // $stmtA->bindParam(2, $questaoA);
        // $stmtA->bindParam(3, $ques_id);
        // if($stmtA->execute()){
        //     if($stmtA->rowCount() > 0){
        //         echo "alert('"Alternativa A criada com sucesso!"')";
        //     }else{
        //         echo "alert('"Erro ao criar a Alternativa A!"')";
        //     }
        // }
        // // ALTERNATIVA B
        // $sqlB = "insert into alternativa (id, descricao, questao_id) values (?,?,?)"
        // $stmtB = $PDO->prepare($sqlB);
        // $stmtB->bindParam(1, null);
        // $stmtB->bindParam(2, $questaoB);
        // $stmtB->bindParam(3, $ques_id);
        // if($stmtB->execute()){
        //     if($stmtB->rowCount() > 0){
        //         echo "alert('"Alternativa B criada com sucesso!"')";
        //     }else{
        //         echo "alert('"Erro ao criar a Alternativa B!"')";
        //     }
        // }
        // // ALTERNATIVA C
        // $sqlC = "insert into alternativa (id, descricao, questao_id) values (?,?,?)"
        // $stmtC = $PDO->prepare($sqlC);
        // $stmtC->bindParam(1, null);
        // $stmtC->bindParam(2, $questaoC);
        // $stmtC->bindParam(3, $ques_id);
        // if($stmtC->execute()){
        //     if($stmtC->rowCount() > 0){
        //         echo "alert('"Alternativa C criada com sucesso!"')";
        //     }else{
        //         echo "alert('"Erro ao criar a Alternativa C!"')";
        //     }
        // }
        // // ALTERNATIVA D
        // $sqlD = "insert into alternativa (id, descricao, questao_id) values (?,?,?)"
        // $stmtD = $PDO->prepare($sqlD);
        // $stmtD->bindParam(1, null);
        // $stmtD->bindParam(2, $questaoD);
        // $stmtD->bindParam(3, $ques_id);
        // if($stmtD->execute()){
        //     if($stmtD->rowCount() > 0){
        //         echo "alert('"Alternativa D criada com sucesso!"')";
        //     }else{
        //         echo "alert('"Erro ao criar a Alternativa D!"')";
        //     }
        // }
?>
