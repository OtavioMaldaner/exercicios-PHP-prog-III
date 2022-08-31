<?php
require_once 'Cidade.class.php';
class Estado {
    private string $nome;
    private $cidades = array();
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function adicionaCidade(Cidade $cidade){
        $this->cidades[] = $cidade;
    }
    public function getCidades():array{
        return $this->cidades;
    }
}