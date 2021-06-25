<?php

namespace Classe\Revisao;

class Revisao {
    static function receberDados($proprietario, $data)
    {
        $this->$proprietario = $proprietario;
        $this->data = $data;
        $this->id = 0;
    }
}