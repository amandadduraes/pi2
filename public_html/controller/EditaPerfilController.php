<?php
    header('Content-Type: application/json');
    require_once("../model/editaPerfil.php");
    include_once "../model/Usuario.php";


        $nome = $_POST['name'];
        $senha = $_POST['senha'];
        $instituicao = $_POST['instituicao'];
        $email = $_POST['email'];
        editaPerfil($nome, $senha, $instituicao, $email);
        
?>