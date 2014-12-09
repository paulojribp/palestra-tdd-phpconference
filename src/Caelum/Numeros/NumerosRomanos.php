<?php

namespace Caelum\Numeros;

class NumerosRomanos {

	public $tabela = array('I' => 1, 'V' => 5, 'X' => 10,
		'L' => 50, 'C' => 100);

	public function converte($caracter) {
		$total = 0;

		for ($pos = 0; $pos < strlen($caracter); $pos++) {
			$simbolo = $caracter[$pos];

			if (!empty($this->tabela[$simbolo])) {
				$valor = $this->tabela[$simbolo];

				if ($valor < $this->tabela[$caracter[$pos+1]]) {
					$total -= $valor;
				} else {
					$total += $valor;
				}
				
			}

		}

		return $total;
	}

}