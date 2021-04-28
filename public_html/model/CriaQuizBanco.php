<?php
function criaAtividade($desc_atv, $turma, $tipo, $PDO){
    try{
    $sql = "insert into atividade (descricao, turma_codigo, id_tipo) values (?,?,?)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(1, $desc_atv);
    $stmt->bindParam(2, $turma);
    $stmt->bindParam(3, $tipo);
    $stmt->execute();
    }catch(PDOException $erro){
        error_log(print_r($erro->getMessage(),1));
        echo '<script>alert("Erro ao Criar atividade: Avise um administrador!!\n");</script>';
    }
}
function criaPergunta($questao, $atv_id, $PDO){
    try{
    $pontos = 10;
    $sql = "insert into questao (descricao, valor, atividade_id) values (?,?,?)";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(1, $questao);
    $stmt->bindParam(2, $pontos);
    $stmt->bindParam(3, $atv_id);
    $stmt->execute();
    }catch(PDOException $erro){
        error_log(print_r($erro->getMessage(),1));
        echo '<script>alert("Erro ao Criar a pregunta:\n'.$questao.'\n Avise um administrador!!\n");</script>';
    }        
}
function criaAlternativas($alternativasA, $alternativasB, $alternativasC, $alternativasD, $alt1, $alt2, $alt3, $alt4, $id_pergunta, $PDO){
    try{
    // ALTERNATIVA A
    $sqlA = "insert into alternativa (descricao, questao_id, configuracao) values (?,?,?)";
    $stmtA = $PDO->prepare($sqlA);
    $stmtA->bindParam(1, $alternativasA);
    $stmtA->bindParam(2, $id_pergunta);
    $stmtA->bindParam(3, $alt1);
    $stmtA->execute();
    // ALTERNATIVA B
    $sqlB = "insert into alternativa (descricao, questao_id, configuracao) values (?,?,?)";
    $stmtB = $PDO->prepare($sqlB);
    $stmtB->bindParam(1, $alternativasB);
    $stmtB->bindParam(2, $id_pergunta);
    $stmtB->bindParam(3, $alt2);
    $stmtB->execute();  
    // ALTERNATIVA C
    $sqlC = "insert into alternativa (descricao, questao_id, configuracao) values (?,?,?)";
    $stmtC = $PDO->prepare($sqlC);
    $stmtC->bindParam(1, $alternativasC);
    $stmtC->bindParam(2, $id_pergunta);
    $stmtC->bindParam(3, $alt3);
    $stmtC->execute();
    // ALTERNATIVA D
    $sqlD = "insert into alternativa (descricao, questao_id, configuracao) values (?,?,?)";
    $stmtD = $PDO->prepare($sqlD);
    $stmtD->bindParam(1, $alternativasD);
    $stmtD->bindParam(2, $id_pergunta);
    $stmtD->bindParam(3, $alt4);
    $stmtD->execute();
    }catch(PDOException $erro){
        error_log(print_r($erro->getMessage(),1));
        echo '<script>alert("Erro ao Criar as alternativas: Avise um administrador!!\n");</script>';
    }   
}
?>
