<?php
require_once (__DIR__."./../model/Login.php");

// Função para destruir a sessão do usuário --> deslogar
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

	if(array_key_exists("deslogar",$_GET)) {
		session_start();
		session_destroy();

		header("Location: ../index.php");		
	}
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(array_key_exists("login",$_POST)) {
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
		if($email && $senha) {
			$user = Login::verificaUsuario($email, $senha);
			
			if($user == NULL) {
				//usuário não encontrado
				$res["res"] = FALSE;
				$res["msg"] = "Usuario nao encontrado!";
				echo json_encode($res);
			}
			else {
				//usuário encontrado
				
				session_start();
				
				
				$_SESSION["user"] = $user;

				$res["res"] = TRUE;
				$res["msg"] = "Usuario encontrado!";
				$res["user"] = $user;
				echo json_encode($res);
			}
		}
		else {
			$res["res"] = FALSE;
			$res["msg"] = "Campos com valores incorretos!";
			echo json_encode($res);
		
	} 

}
}
?>