<?php

namespace Caelum;

class MaiorMenor {

	public $maior;
	public $menor;
	
	public function encontra($itens) {
		foreach($itens as $item) {
			if (empty($this->maior) || $item > $this->maior) {
				$this->maior = $item;
			}

			if (empty($this->menor) || $item < $this->menor) {
				$this->menor = $item;
			} 

			
		}
	}

}