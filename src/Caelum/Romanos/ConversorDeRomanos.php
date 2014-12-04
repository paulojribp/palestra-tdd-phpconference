<?php

namespace Caelum\Romanos;

require_once 'vendor/autoload.php';

class ConversorDeRomanos {
	
	private $tabela = array(
		'I' => 1,
		'V' => 5,
		'X' => 10,
		'L' => 50,
		'C' => 100
	);

	public function converte($simbolo) {
		$total = 0;
		
		for ($i=0; $i < strlen($simbolo); $i++) {
			$simboloAtual = $simbolo[$i];
			$atual = $this->tabela[$simboloAtual]; //I

			if (array_key_exists($simboloAtual, $this->tabela)) {
				if ($atual < $this->tabela[$simbolo[$i+1]]) {
						$total -= $atual;
				} else {
					$total += $atual;
				}
			}

			
		}

		return $total;
	}

}