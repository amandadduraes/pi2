<?php
function deletaQuiz($id, $PDO){
    header('Content-Type: application/json');
    $sql = "delete from atividade where id = $id";
    // echo "$sql";
    try{
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo json_encode('Quiz removido com sucesso!');
        }else{
            echo json_encode('Falha ao remover o Quiz!');
        }
    }
}catch(PDOException $e){
    echo $e;
}
}
?>