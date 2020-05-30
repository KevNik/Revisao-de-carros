<?php

class Proprietario{
    static function receberDados($nome, $dataNascimento, $carro, $sexo)
    {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->carro = $carro;
        $this->sexo = $sexo;
        $this->id = 0;
    }
}