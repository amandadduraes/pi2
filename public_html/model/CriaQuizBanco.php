<?php
    
function criaAtividade($desc_atv, $turma, $tipo, $PDO){
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
function criaPergunta($questao, $atv_id, $PDO){
    $pontos = 10;
    $sql = "insert into questao (descricao, valor, atividade_id) values (?,?,?)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(1, $questao);
    $stmt->bindParam(2, $pontos);
    $stmt->bindParam(3, $atv_id);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo '<script>alert("Questão criada com sucesso!");</script>';
        }else{
            echo '<script>alert("Erro ao criar a Questão!");</script>';
        }
    }
}
function criaAlternativas($alternativasA, $alternativasB, $alternativasC, $alternativasD, $alt1, $alt2, $alt3, $alt4, $id_pergunta, $PDO){
        // ALTERNATIVA A
        $sqlA = "insert into alternativa (descricao, questao_id, configuracao) values (?,?,?)";
        $stmtA = $PDO->prepare($sqlA);
        $stmtA->bindParam(1, $alternativasA);
        $stmtA->bindParam(2, $id_pergunta);
        $stmtA->bindParam(3, $alt1);
        if($stmtA->execute()){
            if($stmtA->rowCount() > 0){
                echo 'alert("Alternativa A criada com sucesso!")';
            }else{
                echo 'alert("Erro ao criar a Alternativa A!")';
            }
        }
        // ALTERNATIVA B
        $sqlB = "insert into alternativa (descricao, questao_id, configuracao) values (?,?,?)";
        $stmtB = $PDO->prepare($sqlB);
        $stmtB->bindParam(1, $alternativasB);
        $stmtB->bindParam(2, $id_pergunta);
        $stmtB->bindParam(3, $alt2);
        if($stmtB->execute()){
            if($stmtB->rowCount() > 0){
                echo 'alert("Alternativa B criada com sucesso!")';
            }else{
                echo 'alert("Erro ao criar a Alternativa B!")';
            }
        }
        // ALTERNATIVA C
        $sqlC = "insert into alternativa (descricao, questao_id, configuracao) values (?,?,?)";
        $stmtC = $PDO->prepare($sqlC);
        $stmtC->bindParam(1, $alternativasC);
        $stmtC->bindParam(2, $id_pergunta);
        $stmtC->bindParam(3, $alt3);
        if($stmtC->execute()){
            if($stmtC->rowCount() > 0){
                echo 'alert("Alternativa C criada com sucesso!")';
            }else{
                echo 'alert("Erro ao criar a Alternativa C!")';
            }
        }
        // ALTERNATIVA D
        $sqlD = "insert into alternativa (descricao, questao_id, configuracao) values (?,?,?)";
        $stmtD = $PDO->prepare($sqlD);
        $stmtD->bindParam(1, $alternativasD);
        $stmtD->bindParam(2, $id_pergunta);
        $stmtD->bindParam(3, $alt4);
        if($stmtD->execute()){
            if($stmtD->rowCount() > 0){
                echo 'alert("Alternativa D criada com sucesso!")';
            }else{
                echo 'alert("Erro ao criar a Alternativa D!")';
            }
        }
}
?>
