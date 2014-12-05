<?php

namespace Mudanca;

require 'vendor/autoload.php';

use Mudanca\Mudanca;
use Mudanca\TipoImposto;
use Mudanca\TipoMudanca;

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
		if ($tipoMudanca == TipoMudanca::RESIDENCIAL) {
			return 3.5;
		} else if ($tipoMudanca == TipoMudanca::COMERCIAL) {
			return 2.75;
		}

		return 0;
	}

	public function calculaCustoTotal($mudanca) {
		$valorKm = 2.31;
		$taxa = 0.03;

		$seguroItens = $mudanca->getValorItens() * (0.8/100);
		$valorCalculado = $this->valorMudanca($mudanca->getTipoMudanca()) * $mudanca->getVolume();
		$custoMudanca = ($valorKm * $mudanca->getKm()) + $valorCalculado + $seguroItens;
		$custoMudanca += $this->calculaImposto($mudanca->getTipoImposto(), $custoMudanca, $taxa);
		
		return $custoMudanca;
	}

}