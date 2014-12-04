<?php

namespace Caelum\Romanos;

require_once '/Users/paulojr/projects/PalestraTDD/vendor/autoload.php';

use Caelum\Romanos\ConversorDeRomanos;
use PHPUnit_Framework_TestCase as PHPUnit;

class ConversorDeRomanosTest extends PHPUnit {
	
	private $romano;

	protected function setUp() {
		$this->romano = new ConversorDeRomanos;
	}
	
	public function testDeveConverterLetraI() {
		$numero = $this->romano->converte('I');
		$this->assertEquals(1, $numero);
	}

	public function testDeveConverterLetraV() {
		$numero = $this->romano->converte('V');
		$this->assertEquals(5, $numero);
	}

	public function testDeveConverterLetraX() {
		$numero = $this->romano->converte('X');
		$this->assertEquals(10, $numero);
	}

	public function testDeveConverterLetraII() {
		$numero = $this->romano->converte('II');
		$this->assertEquals(2, $numero);
	}

	public function testDeveConverterLetraXXII() {
		$numero = $this->romano->converte('XXII');
		$this->assertEquals(22, $numero);
	}

	public function testDeveConverterLetraIV() {
		$numero = $this->romano->converte('IV');
		$this->assertEquals(4, $numero);
	}

	public function testDeveConverterLetraIXX() {
		$numero = $this->romano->converte('IXX');
		$this->assertEquals(19, $numero);
	}

	public function testDeveConverterLetraXCVIII() {
		$numero = $this->romano->converte('XCVIII');
		$this->assertEquals(98, $numero);
	}

}