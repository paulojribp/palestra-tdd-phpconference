<?php

namespace Caelum\Numeros;

require 'vendor/autoload.php';

use PHPUnit_Framework_TestCase as PHPUnit;

class NumerosRomanosTest extends PHPUnit {

	public function testDeveConverterAlgarismoI() {
		$romanos = new NumerosRomanos();
		$valor = $romanos->converte('I');
		$this->assertEquals(1, $valor);
	}

	public function testDeveConverterAlgarismoV() {
		$romanos = new NumerosRomanos();
		$valor = $romanos->converte('V');
		$this->assertEquals(5, $valor);
	}

	public function testDeveConverterAlgarismoX() {
		$romanos = new NumerosRomanos();
		$valor = $romanos->converte('X');
		$this->assertEquals(10, $valor);
	}

	public function testDeveConverterAlgarismoC() {
		$romanos = new NumerosRomanos();
		$valor = $romanos->converte('C');
		$this->assertEquals(100, $valor);
	}

	public function testDeveConverterAlgarismoIV() {
		$romanos = new NumerosRomanos();
		$valor = $romanos->converte('IV');
		$this->assertEquals(4, $valor);
	}

	public function testDeveConverterAlgarismoXIX() {
		$romanos = new NumerosRomanos();
		$valor = $romanos->converte('XIX');
		$this->assertEquals(19, $valor);
	}

	public function testDeveConverterAlgarismoCXX() {
		$romanos = new NumerosRomanos();
		$valor = $romanos->converte('CXX');
		$this->assertEquals(120, $valor);
	}

	public function testDeveConverterAlgarismoII() {
		$romanos = new NumerosRomanos();
		$valor = $romanos->converte('II');
		$this->assertEquals(2, $valor);
	}
	
}










