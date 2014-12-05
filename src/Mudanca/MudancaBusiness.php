<?php

namespace Mudanca;

require 'vendor/autoload.php';

use Mudanca\Mudanca;
use Mudanca\TipoImposto;

class MudancaBusiness {
	
	public function calculaImposto($tipoImposto, $valor, $taxa = 0) {
		if ($tipoImposto == TipoImposto::ICMS) {
			return ($valor / (1-$taxa)) - $valor;
		} else if ($tipoImposto == TipoImposto::ISS) {
			return $valor * 0.008;
		}

		return 0;
	}

	public function valorMudanca($tipoMudanca) {
		if ($tipoMudanca == Mudanca::RESIDENCIAL) {
			return 3.5;
		} else if ($tipoMudanca == Mudanca::COMERCIAL) {
			return 2.75;
		}

		return 0;
	}

	public function calculaCustoTotal($valorItens, $volume, $km, $tipoMudanca, $tipoImposto) {
		$valorKm = 2.31;
		$taxa = 0.03;

		$seguroItens = $valorItens * (0.8/100);
		$valorCalculado = $this->valorMudanca($tipoMudanca) * $volume;
		$custoMudanca = ($valorKm * $km) + $valorCalculado + $seguroItens;
		$custoMudanca += $this->calculaImposto($tipoImposto, $custoMudanca, $taxa);
		
		return $custoMudanca;
	}

}