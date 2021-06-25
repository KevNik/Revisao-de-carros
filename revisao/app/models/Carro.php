<?php

namespace Classe\Carro;

use DataBase\Connection;

class Carro{

    public function __construct($nome, $ano, $modelo, $marca, $placa) {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->placa = $placa;
        $this->id = 0;
        $this->table = 'carro';
    }

    public function add()
    {
        $sql = 'INSERT INTO carro VALUES '.$this->id.' '.$this->nome.' '.$this->modelo.' '.$this->ano.' '.$this->marca.' '.$this->placa;
        mysqli_query($conn, $sql);
        $this->id++; 
    }

    public function getCar($comando, $coluna, $where, $coluna2, $operador, $valor )
    {
        $slq = ''.$comando.' '.$coluna.'FROM '.$this->tabela;

        if($where && $coluna2 && $operador && $valor){
            $slq += $where.' '.$coluna2.' '.$operador.' '.$valor;
        }
        $queryResutl = mysqli_query($conn, $sql);
        return $queryResutl;
        

    }

    public function getAll()
    {
        $sql = 'SELECT * FROM '.$this->table;
        $queryResult = mysqli_query($conn, $sql);
        return $queryResult;
    }

    public function getALLByName($name)
    {
        $sql = 'SELECT nome_carro FROM '.$this->tabale.' ORDER BY LIKE %'.$name.'%';
        $queryResult = mysqli_query($conn, $sql);
        return $queryResult;
    }

}