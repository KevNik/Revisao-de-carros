<?php

namespace Classe\Proprietario;

class Proprietario{
    static function receberDados($nome, $dataNascimento, $carro, $sexo)
    {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->carro = $carro;
        $this->sexo = $sexo;
        $this->id = 0;
    }
    public function __construct($nome, $dataNascimento, $carro, $sexo) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->carro = $carro;
        $this->sexo = $sexo;
    }

    public function salvar()
    {
        $sql = 'INSERT INTO proprietario VALUES '.$this->id.' '.$this->nome.' '.$this->dataNascimento.' '.$this->carro.' '.$this->sexo;
        
        $this->id++;
    }
}