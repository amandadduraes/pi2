<?php


include "../model/Conexao1.php";
include "../model/Usuario.php";
include "../model/listaQuizBanco.php";
header('Content-Type: application/json');
session_start();
$usuario = $_SESSION["user"];
if (!isset($usuario)) {
    die();
}

try {
    $PDO = Conexao::getConexao();
    $id = $_POST["id"];
    deletaQuiz($id, $PDO);
    //header("Location: ../view/listaQuiz.php");
    
} catch (Exception $e) {
    echo $e;
}
