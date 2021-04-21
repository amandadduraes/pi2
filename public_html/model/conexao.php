<?php
try{
$PDO = new PDO('mysql:host=localhost;dbname=pi2','root','toor123');
}catch (PDOException $erro){
    echo "alert('Erro: '".$erro->getMessage()."' ')";
}
?>