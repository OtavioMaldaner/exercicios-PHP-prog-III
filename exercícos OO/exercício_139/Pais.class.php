<?php
require_once 'Estado.class.php';
class Pais {
    public string $nome;
    private $listaEstados = array();
    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }
    
    public function adicionaEstado(Estado $estado){
        $this->listaEstados[] = $estado;
    }
    public function montaTabela():string{
        $retorna = '<table><tr><th>Estado</th><th>Cidade</th></tr>';
        foreach($this->listaEstados as $estado){
            $retorna .= '<tr><td>'.$estado->getNome().'</td><td>';
            $cidades = $estado->getCidades();
            foreach($cidades as $cidade){
                $retorna .= $cidade->getNome().'<br>';
            }
            $retorna .= '</td></tr>';
        }
        $retorna .= '</table>';
        return $retorna;
    }

}