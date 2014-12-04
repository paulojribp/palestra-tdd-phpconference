<?php

require_once 'MaiorMenor.php';

$maiorMenor = new MaiorMenor;
$itens = array(2,4,6,8,10);

$maiorMenor->encontra($itens);

echo 'Menor: ' . $maiorMenor->menor . PHP_EOL;
echo 'Maior: ' . $maiorMenor->maior . PHP_EOL;
