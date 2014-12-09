<?php

require "MaiorMenor.php";

$maiorMenor = new MaiorMenor;
//$maiorMenor->encontra(array(8,6,5,3));

//echo "Maior: " . $maiorMenor->maior . PHP_EOL;
//echo "Menor: " . $maiorMenor->menor . PHP_EOL;

$maiorMenor->encontra(array(2,4,5,6,8));

echo "Maior: " . $maiorMenor->maior . PHP_EOL;
echo "Menor: " . $maiorMenor->menor . PHP_EOL;
