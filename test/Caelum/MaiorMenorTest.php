<?php

namespace Caelum;

require 'vendor/autoload.php';

use PHPUnit_Framework_TestCase as PHPUnit;

class MaiorMenorTest extends PHPUnit {

	public function testDeveEncontrarOMaiorMenorOrdenado() {
		$maiorMenor = new MaiorMenor;
		$maiorMenor->encontra(array(1,2,3,4,5));

		$this->assertEquals(5, $maiorMenor->maior);
		$this->assertEquals(1, $maiorMenor->menor);
	}

	public function testDeveEncontrarOMaiorMenorOrdenadoInverso() {
		$maiorMenor = new MaiorMenor;
		$maiorMenor->encontra(array(5,4,3,2,1));

		$this->assertEquals(5, $maiorMenor->maior);
		$this->assertEquals(1, $maiorMenor->menor);
	}

	public function testDeveEncontrarOMaiorMenorBaguncado() {
		$maiorMenor = new MaiorMenor;
		$maiorMenor->encontra(array(4,2,7,9,5,3));

		$this->assertEquals(9, $maiorMenor->maior);
		$this->assertEquals(2, $maiorMenor->menor);
	}

}