<?php

class Alternativa {
    public $id;
    public $descricao;
    public $questao_id;
    public $configuracao;

    public function carregarObjetoDoBancoDeDados( array $tupla ) {
        $this->id = $tupla["id"];
        $this->descricao = $tupla["descricao"];
        $this->questao_id = $tupla["questao_id"];
        $this->configuracao = $tupla["configuracao"];
    }
}
