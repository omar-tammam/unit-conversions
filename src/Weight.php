<?php 

namespace Expandcart\UnitConversion;


class Weight {
	
	private $kilogram;
	
	public function __construct ($kilogram){
		$this->kilogram = $kilogram;
	}
	
	public function toPound (){
		return $this->kilogram * 2.204623;
	}
	
	public function toTonne (){
		return $this->kilogram / 1000;
	}
	
	public function toGram (){
		return $this->kilogram * 1000;
	}
	
	public function toOunce (){
		return $this->kilogram * 35.274;
	}
	
	
	
	
}


?>