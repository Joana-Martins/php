<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";
echo $dt->format("d/m/Y H:i:s");

?>