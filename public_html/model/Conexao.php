

<!-- Utilizarei para fazer a conexão de dados o padrão de projeto Singleton, que serve para não
criar várias instâncias da mesma classe, ela mesma cria a sua própria instância
 e  podemos acessar ela em qualquer parte do projeto, seu funcionamento
é tipo uma variável global.
-->
<?php

class Conexao{ //Criando uma classe que se chama conexão
    protected static  $conexao; // criando uma varíavel do  tipo protegida e estática   

        private function __construct () { //Criando um construtor da classe privada
            self::$conexao = new PDO('mysql:host=localhost;dbname=pi2',"root",""); // Criando a minha conexão com o banco de dados com o PDO
            self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }

        public static function getConexao() { // Criando o nosso método estático verificando se estamos acessando o BD
            if(!self::$conexao)
                new Conexao();
            return self::$conexao;
        } 

}
?>

<!-- A forma mais simples de criar um objeto Singleton é criando uma classe que possui um construtor
 privado e uma instância estática dela mesma. Para utilizarmos essa instância
 estática criamos um método que verifica se a classe já foi instanciada. Se sim retornamos ela, caso contrário criamos uma e retornamos.
 -->