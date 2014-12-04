<?php

namespace Caelum;

require_once 'vendor/autoload.php';

use Caelum\MaiorMenor;
use PHPUnit_Framework_TestCase as PHPUnit;

class MaiorMenorTest extends PHPUnit {
	
	public function testDeveAcharMaiorNumero() {
		$maiorMenor = new MaiorMenor;
		$maiorMenor->encontra(array(1,2,3,4,5));
		$this->assertEquals($maiorMenor->maior, 5);
		$this->assertEquals($maiorMenor->menor, 1);
	}
	public function testDeveAcharMaiorEMenorNumeroDescrescente() {
		$maiorMenor = new MaiorMenor;
		$maiorMenor->encontra(array(5,4,3,2,1));
		$this->assertEquals($maiorMenor->maior, 5);
		$this->assertEquals($maiorMenor->menor, 1);
	}

	public function testDeveAcharMaiorEMenorNumeroSemOrdem() {
		$maiorMenor = new MaiorMenor;
		$maiorMenor->encontra(array(4,7,2,5,1));
		$this->assertEquals($maiorMenor->maior, 7);
		$this->assertEquals($maiorMenor->menor, 1);
	}

}