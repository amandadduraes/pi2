
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

