<?php

namespace Mudanca;

require 'vendor/autoload.php';

use Mudanca\Mudanca;
use Mudanca\TipoImposto;

class MudancaBusiness {
	
	public function calculaIcms($valor, $taxa) {
		return ($valor / (1-$taxa)) - $valor;
	}

	public function calculaIss($valor) {
		return $valor * 0.008;
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
		$valorMudanca = ($valorKm * $km) + $valorCalculado + $seguroItens;
		if ($tipoImposto == TipoImposto::ISS) {
			$valorMudanca += $this->calculaIss($valorMudanca);
		} else if ($tipoImposto == TipoImposto::ICMS) {
			$valorMudanca += $this->calculaIcms($valorMudanca, $taxa);
		}

		return $valorMudanca;
	}

}