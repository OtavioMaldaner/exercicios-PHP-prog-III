<?php

class Voto implements ActiveRecord{

    private int $idUsuario;
    
    public function __construct(private string $time){
    }

    public function setIdUsuario(int $idUsuario):void{
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario():int{
        return $this->idUsuario;
    }

    public function setTime(string $time):void{
        $this->time = $time;
    }

    public function getTime():string{
        return $this->time;
    }

    public function save($time):bool{
        $conexao = new MySQL();
        $sql = "INSERT INTO voto (idUsuario, time_voto) VALUES ('{$this->getIdUsuario()}','{$time}')";
        return $conexao->executa($sql);
    }

    public static function find($idUsuario):Usuario{
        $conexao = new MySQL();
        $sql = "SELECT * FROM usuarios WHERE idUsuario = {$idUsuario}";
        $resultado = $conexao->consulta($sql);
        $u = new Usuario($resultado[0]['email'],$resultado[0]['senha']);
        $u->setIdUsuario($resultado[0]['idUsuario']);
        return $u;
    }

    public function delete():bool{
        $conexao = new MySQL();
        $sql = "DELETE FROM usuarios WHERE idUsuario = {$this->idUsuario}";
        return $conexao->executa($sql);
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT time_voto, COUNT(time_voto) contagem FROM voto";
        $resultados = $conexao->consulta($sql);
        $votos = array();
        // foreach($resultados as $resultado){
        //     // $v = new Voto($resultado['time_voto']);
        //     $votos['time'] = $resultado['time_voto'];
        //     $votos['contagem'] = $resultado['contagem'];
        // }
        return $resultados;
    }
}
