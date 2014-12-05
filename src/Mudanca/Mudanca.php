<?php

namespace Mudanca;

require 'vendor/autoload.php';

use Mudanca\TipoMudanca;

class Mudanca {
	
	private $valorItens;
	private $volume;
	private $km;
	private $tipoMudanca;
	private $tipoImposto;

	public function getValorItens() {
		return $this->valorItens;
	}

	public function setValorItens($valorItens) {
		$this->valorItens = $valorItens;
	}

	public function getVolume() {
		return $this->volume;
	}

	public function setVolume($volume) {
		$this->volume = $volume;
	}

	public function getKm() {
		return $this->km;
	}

	public function setKm($km) {
		$this->km = $km;
	}

	public function getTipoMudanca() {
		return $this->tipoMudanca;
	}

	public function setTipoMudanca($tipoMudanca) {
		$this->tipoMudanca = $tipoMudanca;
	}

	public function getTipoImposto() {
		return $this->tipoImposto;
	}

	public function setTipoImposto($tipoImposto) {
		$this->tipoImposto = $tipoImposto;
	}

}