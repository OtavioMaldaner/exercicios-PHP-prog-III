<?php

class Festa implements ActiveRecord{

    private int $idFesta;
    
    public function __construct(private string $nome,private string $endereco, private string $cidade, private string $dia){
    }

    public function getIdFesta():int {
        return $this->idFesta;
    }
    public function setIdFesta(int $idFesta):void{
        $this->idFesta = $idFesta;
    }
    
    public function getNome():string{
        return $this->nome;
    }
    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

    public function getEndereco():string{
        return $this->endereco;
    }
    public function setEndereco(string $endereco):void{
        $this->endereco = $endereco;
    }

    public function getCidade():string {
        return $this->cidade;
    }
    public function setCidade(string $cidade):void {
        $this->cidade = $cidade;
    }

    public function getDia():string {
        return $this->dia;
    }
    public function setDia(string $dia):void {
        $this->dia = $dia;
    }
    public function save():bool{
        $conexao = new MySQL();
        if(isset($this->id)){
            $sql = "UPDATE festa SET nome = '{$this->nome}' ,endereco = '{$this->endereco}', cidade = '{$this->cidade}', dia = '{$this->dia}' WHERE idFesta = {$this->idFesta}";
        }else{
            $sql = "INSERT INTO festa (nome,endereco, cidade, dia) VALUES ('{$this->nome}','{$this->endereco}', '{$this->cidade}', '{$this->dia}')";
        }
        return $conexao->executa($sql);
        
    }
    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM festa WHERE idFesta = {$this->idFesta}";
        return $conexao->executa($sql);
    }

    public static function find($idFesta):Festa{
        $conexao = new MySQL();
        $sql = "SELECT * FROM festa WHERE idFesta = {$idFesta}";
        $resultado = $conexao->consulta($sql);
        $f = new Festa($resultado[0]['nome'],$resultado[0]['endereco'], $resultado[0]['cidade'], $resultado[0]['dia']);
        $f->setIdFesta($resultado[0]['idFesta']);
        return $f;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM festa";
        $resultados = $conexao->consulta($sql);
        $festas = array();
        foreach($resultados as $resultado){
            $f = new Festa($resultado['nome'],$resultado['endereco'], $resultado['cidade'], $resultado['dia']);
            $f->setIdFesta($resultado['idFesta']);
            $festas[] = $f;
        }
        return $festas;
    }

    
}
