<?php

namespace Mudanca;

require 'Mudanca.php';

use Mudanca\Mudanca;

class MudancaBusiness {
	
	public function calculaIcms($valor, $taxa) {
		return $valor * $taxa;
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

}