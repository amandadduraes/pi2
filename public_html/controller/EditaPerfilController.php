<?php


    header('Content-Type: application/json');
    require_once("../model/editaPerfil.php");
    include_once "../model/Usuario.php";
    require_once("../model/Cadastro.php");

    session_start();

        $nome = $_POST['name'];
        $senha = $_POST['senha'];
        $instituicao = $_POST['instituicao'];
        $email = $_POST['email'];
        editaPerfil($nome, $senha, $instituicao, $email);

        $usuario = Cadastro::buscarUsuarioEmail($email);
        $_SESSION["user"] = $usuario;

        header("Location:../view/EditaPerfil.php");
        
?>