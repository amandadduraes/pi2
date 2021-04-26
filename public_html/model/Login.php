<?php
    require_once(__DIR__."/Conexao1.php");
    require_once(__DIR__."/Usuario.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    class Login{
    public static function verificaUsuario($email, $senha){
    $PDO = Conexao::getConexao(); //Chamando a conexão criada em Conexao.php
    $sql= "SELECT * FROM  usuario WHERE email = ? AND senha = ? ";
    $sql= $PDO->prepare($sql);
    $sql->bindParam(1, $email);
    $sql->bindParam(2, $senha);



    if ($sql->execute()) {
        $linha = $sql->fetch();


        if ($linha) {       
            $usuario = new  Usuario();
            $usuario->carregarObjetoDoBancoDeDados($linha);
            return $usuario;
        } else{
            
            return NULL;
        }
                    }
} 

    }

?>