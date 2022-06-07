<?php

//Sou um comentario :)
$anoNascimento = 2000;
$nome = "Joana";
$sobrenome = "Martins";
$nomeCompleto = $nome . " " . $sobrenome;
unset($anoNascimento);

echo $nomeCompleto;
exit;
//Se ano do nascimento existe
if (isset($anoNascimento)){
    echo $anoNascimento;
}else{
    echo "Nao tenho ano";
}

?>