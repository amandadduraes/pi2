<?php
require_once(__DIR__."/Conexao1.php");

function editaPerfil($nome, $senha, $instituicao, $email){

    $PDO = Conexao::getConexao(); //Chamando a conexão criada em Conexao.php;
	
    $atualizar = $PDO->prepare(
      '	UPDATE usuario
           SET
            nome  = ?,
            senha = ?,
            instituicao = ?
        WHERE
            email = ?'
            
    );

    $atualizar->bindValue(1,$nome);
    $atualizar->bindValue(2,$senha);
    $atualizar->bindValue(3,$instituicao);
    $atualizar->bindValue(4,$email);

    $atualizar->execute();

}


?>