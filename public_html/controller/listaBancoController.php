<?php


include "../model/Conexao1.php";
include "../model/Usuario.php";
include "../model/listaQuizBanco.php";
session_start();
$usuario = $_SESSION["user"];
if (!isset($usuario)) {
    die();
}

try {
    $PDO = Conexao::getConexao();
    $array = ["id"];
    $erro = false;
    foreach ($array as $dev) {
        if (!isset($_POST[$dev])) {
            $erro = true;
        }
    }

    if (!$erro) {
        $id = $_POST["id"];
        deletaQuiz($id, $PDO);
        header("Location: ../view/listaQuiz.php");
    }
} catch (Exception $e) {
    echo $e;
}
