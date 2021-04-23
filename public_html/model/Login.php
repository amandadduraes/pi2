<?php
require_once(__DIR__."/Conexao.php");

$PDO = Conexao::getConexao(); //Chamando a conexão criada em Conexao.php

$email = $_POST["email"];
$senha = $_POST["senha"];


$sql= "SELECT * FROM  usuario WHERE email = ? AND senha = ? ";
$sql= $PDO->prepare($sql);
$sql->bindParam(1, $email);
$sql->bindParam(2, $senha);

if ($sql->execute()) {
    $linha = $sql->fetch();
    if ($linha) {

        echo"Tupla encontrada com sucesso!";
    } else{
        echo"Tupla não encontrada";
    }


}

?>