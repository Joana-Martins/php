<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Nick Nelson");
$cad->setEmail("nicknelson@gmail.com");
$cad->setSenha("123456");
$cad->registrarVenda();
echo $cad;

?>