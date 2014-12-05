<?
	/*function d($var) {
		echo "[DEBUG] = " . $var . PHP_EOL;
	}*/

	class Imposto {
		const ICMS = 0, ISS = 1;
	}

	class Mudanca {
		const RESIDENCIAL=0, COMERCIAL=1;
	}

	function moeda($numero) {
		return number_format($numero, 2, ",", ".");
	}

	// Taxa cobrada pelo estado que recebe a mudança
	$icms = 0.3;
	// Taxa cobrada dentro do mesmo município
	$iss = 0.008;

	// Valor dos itens do cliente
	$valorTotalDosItens = 5700.5;

	// Volume em metros cúbicos dos itens do cliente
	$volumeColetaEntrega = 730;

	// Km total entre a origem e destino
	$kmTotal = 1300;

	// Valor de cada KM percorrido
	$valorKm = 2.31;

	// Define o tipo de imposto
	$tipoMedicao = Imposto::ICMS;

	$mudanca_tipo = Mudanca::RESIDENCIAL;
	
	// Dependendo do tipo de mudança, o valor é alterado
	if ($mudanca_tipo == Mudanca::RESIDENCIAL) {
		$valor_coleta_entrega = 3.5;
	} else if ($mudanca_tipo == Mudanca::COMERCIAL) {
		$valor_coleta_entrega = 2.75;
	}

	// O seguro da mudança é 0,8% do valor dos itens
	$seguroTotal = $valorTotalDosItens * (0.8/100);
	
	// O valor total é o volume multiplicado pelo valor unitário
	$coletaEntregaTotal = $valor_coleta_entrega * $volumeColetaEntrega;
	
	// O valor total da mudança é o calculo abaixo
	$soma1 = ($valorKm * $kmTotal) + $coletaEntregaTotal + $seguroTotal;
	
	// valor total da mudança (se for ICMS)
	$somaTotalICMS = ($soma1 / (1-$icms)) - $soma1;
	
	$freteTotal = $soma1;
	
	if ($tipoMedicao == Imposto::ICMS) {
		$freteTotal += $somaTotalICMS; //$soma1 / (1-$icms);
	} else if ($tipoMedicao == Imposto::ISS) {
		$freteTotal += ($iss * $soma1); 
	}
	
	$valores = moeda($valorKm) . ";" . moeda($valorKm * $kmTotal) . ";"
		. moeda($somaTotalICMS) . ";" . moeda($freteTotal) . ";";
	echo $valores;
?>
