<?php

namespace Mudanca;

require 'vendor/autoload.php';

use PHPUnit_Framework_TestCase as PHPUnit;
use Mudanca\Mudanca;
use Mudanca\TipoImposto;

class MudancaBusinessTest extends PHPUnit {
	
	public function testDeveCalcularICMS() {
		$business = new MudancaBusiness;
		$icmsCalculado = $business->calculaIcms(5603.60, 0.03);
		$this->assertEquals(173.31, round($icmsCalculado, 2));
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

	public function testDeveRetornarValorDaMudancaPorTipoComercial() {
		$business = new MudancaBusiness;
		$valorMudanca = $business->valorMudanca(Mudanca::COMERCIAL);

		$this->assertEquals(2.75, $valorMudanca);
	}

	public function testDeveCalcularCustoTotalDaMudanca() {
		$business = new MudancaBusiness;
		$valorTotal = $business->calculaCustoTotal(5700.5, 730, 1300, 
				Mudanca::RESIDENCIAL, TipoImposto::ICMS);

		$this->assertEquals(5776.91, round($valorTotal,2));
	}

}