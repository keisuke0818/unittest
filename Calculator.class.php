<?php 

/**
* @author koji,hiranabe
*/
class Calculator {
	
	private $value;
	function Calculator(){
		$this->value = 0;
	}

	function set( $value ){
		$this->value = $value;
	}
	function get(){
		return $this->value;
	}
	
	function reset(){
		$this->value = 0;
	}
	
	function plus( $target_value ){
		$this->value += $target_value;
	}
	
	function minus( $target_value ){
		$this->value -= $target_value;
	}
	
	function multiply( $target_value ){
		$this->value *= $target_value;
	}
	
	function divide( $target_value ){
		$this->value /= $target_value;
	}

}

?>
