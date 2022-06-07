<?php

$total = 178;
$desconto = 0.9;

do{
    $total *= $desconto;

}while($total > 100);

echo $total;

?>