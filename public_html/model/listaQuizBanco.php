<?php
function deletaQuiz($id, $PDO){
    $sql = "delete from atividade where id = $id";
    // echo "$sql";
    try{
    $stmt = $PDO->prepare($sql);
    if($stmt->execute()){
        if($stmt->rowCount() > 0){
            echo '<script>alert("Atividade removida com sucesso!");</script>';
        }else{
            echo '<script>alert("Erro ao remover a atividade!");</script>';
        }
    }
}catch(PDOException $e){
    echo $e;
}
}
?>