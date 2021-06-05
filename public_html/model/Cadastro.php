<?php


require_once(__DIR__."./Conexao1.php");
class Cadastro{


public static function fazerCadastro(){
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
        
    } else{
    echo"Erro ao tentar efetivar cadastro";
}

  } 
}
           
public static function buscarUsuarioEmail($email){
try{
  $PDO = Conexao::getConexao(); //Chamando a conexão criada em Conexao.php;

    $sql = $PDO->prepare("SELECT * FROM usuario WHERE email = ?");
    $sql->bindValue(1,$email);

    $res = $sql->execute();

    if ($res == 1 ) {
        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
            $usuario = new Usuario();
            $usuario->carregarObjetoDoBancoDeDados($dados);
            return $usuario;
        }
        else return NULL;
    }
}
catch (Exception $e){
    echo $e->getMessage();
}    
}

public static function criarUsuario( Usuario $novoUsuario ) {
  try {
      $PDO = Conexao::getConexao(); //Chamando a conexão criada em Conexao.php;

      $sql = $PDO->prepare("INSERT INTO usuario(email, senha, nome, instituicao, perfil) VALUES (?, ?, ?, ?, ?)");
      $sql->bindValue(1, $novoUsuario->email);
      $sql->bindValue(2, $novoUsuario->senha);
      $sql->bindValue(3, $novoUsuario->nome);
      $sql->bindValue(4, $novoUsuario->instituicao);
      $sql->bindValue(5, $novoUsuario->perfil);

      $res = $sql->execute();
      
      return $res;
  } catch(Exception $e) {
      echo $e;
      $sql->debugDumpParams();
  }
}
          }  
   

?>