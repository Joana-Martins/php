<?php

class Pessoa{
    //Atributos
    public $nome; 

    public function falar() { // métodos
        return "O meu nome é ".$this->nome;
    }
}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio";
echo $glaucio->falar();

?>