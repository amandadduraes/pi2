<?php

require_once(__DIR__."/Conexao1.php");


  
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
              } else{
              echo"Erro ao tentar efetivar cadastro";
          }

           }
            
            
  
      
   

?>