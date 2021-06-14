<?php


    header('Content-Type: application/json');
    require_once("../model/edita-perfil.php");
    include_once "../model/Usuario.php";
    require_once("../model/Cadastro.php");

    session_start();

        $nome = $_POST['name'];
        $senha = $_POST['senha'];
        $instituicao = $_POST['instituicao'];
        $email = $_POST['email'];
        edita-perfil($nome, $senha, $instituicao, $email);

        $usuario = Cadastro::buscarUsuarioEmail($email);
        $_SESSION["user"] = $usuario;

        header("Location:../view/edita-perfil.php");
        
?>