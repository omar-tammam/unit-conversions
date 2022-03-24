<?php 

namespace Expandcart;


class UnitConversions {
	
	private $kilograms;
	
	public function __construct ($kilograms){
		$this->kilograms = $kilograms;
	}
	
	public function convert (){
		return $this->kilograms * 2.204623;
	}
	
}


?>