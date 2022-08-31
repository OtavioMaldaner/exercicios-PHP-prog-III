<?php
class Cidade {
    private string $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
}