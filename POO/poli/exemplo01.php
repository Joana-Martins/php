<?php

abstract class Animal{
    public function falar(){
        return "Som";
    } 

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Late";
    }   
}

class Gato extends Animal{
    public function falar(){
        return "Mia";
    }   
}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    
    public function mover(){
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";
echo "------------------------- <br/>";
$mingau = new Gato();
echo $mingau->falar() . "<br/>";
echo $mingau->mover() . "<br/>";
echo "------------------------- <br/>";
$piupiu = new Passaro();
echo $piupiu->falar() . "<br/>";
echo $piupiu->mover();


?>