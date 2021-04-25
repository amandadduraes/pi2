<?php

require_once(__DIR__."/Conexao1.php");

$arrdeveter = [
    "nome",
    "email",
    "senha",
    "instituicao",
    "perfil"
    
  ];
  print_r($_POST);
  $erro = false;
  foreach($arrdeveter as $dev){
  if(!isset($_POST[$dev])){
  $erro = true;
   echo "<br>".$dev;
  }
  }
   echo "<br>".$erro;
  if(!$erro){
    $nome=$_POST["nome"];
    $email=$_POST["email"];
    $senha = $_POST["senha"];
    $instituicao=$_POST["instituicao"];
    $perfil=$_POST["perfil"];
  }
  
          $PDO = Conexao::getConexao(); //Chamando a conexão criada em Conexao.php


              $sql= "INSERT INTO usuario(nome,email,senha, instituicao,perfil) VALUES (?, ?, ?,?,?)";

              
              $sql= $PDO->prepare($sql);
              $sql->bindParam(1, $nome);
              $sql->bindParam(2, $email);
              $sql->bindParam(3, $senha);
              $sql->bindParam(4, $instituicao);
              $sql->bindParam(5, $perfil);
  
             if ($sql->execute()){
              if($sql->rowCount() > 0) {
                  echo"Nova tupla inserida com sucesso!";

                  header("../view/cadastro.php");
                  
              } else{
              echo"Erro ao tentar efetivar cadastro";
          }

           }
            
            
  
      
   

?>