<?php

class Carro{
    static function receberDados($nome, $ano, $modelo, $marca, $placa)
    {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->placa = $placa;
        $this->id = 0;
    }
}