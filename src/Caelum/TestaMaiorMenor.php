<?php

require 'MaiorMenor.php';

$maiorMenor = new MaiorMenor;
$lista = array(8,5,3,2,1);
$maiorMenor->encontra($lista);

echo "Menor: " . $maiorMenor->menor . PHP_EOL;
echo "Maior: " . $maiorMenor->maior . PHP_EOL;


