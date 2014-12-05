<?php

namespace Mudanca;

require 'vendor/autoload.php';

use PHPUnit_Framework_TestCase as PHPUnit;
use Mudanca\Mudanca;

class MudancaBusinessTest extends PHPUnit {
	
	public function testDeveCalcularICMS() {
		$business = new MudancaBusiness;
		$icmsCalculado = $business->calculaIcms(5000, 0.06);
		$this->assertEquals(300, $icmsCalculado);
	}

	public function testDeveCalcularISS() {
		$business = new MudancaBusiness;
		$issCalculado = $business->calculaIss(5000);

		$this->assertEquals(40, $issCalculado);
	}

	public function testDeveRetornarValorDaMudancaPorTipoResidencial() {
		$business = new MudancaBusiness;
		$valorMudanca = $business->valorMudanca(Mudanca::RESIDENCIAL);

		$this->assertEquals(3.5, $valorMudanca);
	}

	public function testeDeveRetornarValorDaMudancaPorTipoComercial() {
		$business = new MudancaBusiness;
		$valorMudanca = $business->valorMudanca(Mudanca::COMERCIAL);

		$this->assertEquals(2.75, $valorMudanca);
	}

}