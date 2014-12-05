<?php

namespace Mudanca;

require 'vendor/autoload.php';

use PHPUnit_Framework_TestCase as PHPUnit;
use Mudanca\Mudanca;
use Mudanca\TipoImposto;
use Mudanca\TipoMudanca;

class MudancaBusinessTest extends PHPUnit {
	
	public function testDeveCalcularICMS() {
		$business = new MudancaBusiness;
		$icmsCalculado = $business->calculaImposto(TipoImposto::ICMS, 5603.60, 0.03);
		$this->assertEquals(173.31, round($icmsCalculado, 2));
	}

	public function testDeveCalcularISS() {
		$business = new MudancaBusiness;
		$issCalculado = $business->calculaImposto(TipoImposto::ISS, 5000);

		$this->assertEquals(40, round($issCalculado, 2));
	}

	public function testDeveRetornarValorDaMudancaPorTipoResidencial() {
		$business = new MudancaBusiness;
		$valorMudanca = $business->valorMudanca(TipoMudanca::RESIDENCIAL);

		$this->assertEquals(3.5, $valorMudanca);
	}

	public function testDeveRetornarValorDaMudancaPorTipoComercial() {
		$business = new MudancaBusiness;
		$valorMudanca = $business->valorMudanca(TipoMudanca::COMERCIAL);

		$this->assertEquals(2.75, $valorMudanca);
	}

	public function testDeveCalcularCustoTotalDaMudanca() {
		$mudanca = new Mudanca;
		$mudanca->setValorItens(5700.5);
		$mudanca->setVolume(730);
		$mudanca->setKm(1300);
		$mudanca->setTipoMudanca(TipoMudanca::RESIDENCIAL);
		$mudanca->setTipoImposto(TipoImposto::ICMS);


		$business = new MudancaBusiness;
		$valorTotal = $business->calculaCustoTotal($mudanca);

		$this->assertEquals(5776.91, round($valorTotal,2));
	}

}