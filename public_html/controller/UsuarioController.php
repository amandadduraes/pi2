<?php

 //Função para redirecionar o usuário assim que o mesmo fazer cadastro.
 require_once (__DIR__."./../model/Usuario.php");
 require_once (__DIR__."./../model/Cadastro.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(array_key_exists("save", $_POST)) {
		$nome =  filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
		$instituicao = filter_input (INPUT_POST, 'instituicao', FILTER_SANITIZE_STRING);
		$perfil = filter_input (INPUT_POST, 'perfil', FILTER_SANITIZE_STRING);

		if(Cadastro::buscarUsuarioEmail($email)){
			echo json_encode(array("error"=>true));
			return;
		}

		$novoUsuario = new Usuario();
		$novoUsuario->nome = $nome;
		$novoUsuario->email = $email;
		$novoUsuario->senha = $senha;
		$novoUsuario->instituicao = $instituicao;
		$novoUsuario->perfil = $perfil;

		$aux = Cadastro::criarUsuario($novoUsuario);
		echo json_encode($aux);
	}
	
}




?>