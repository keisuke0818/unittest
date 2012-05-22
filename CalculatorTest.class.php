<?php 
/**
* @author koji
*/
//require_once 'Framework/TestCase.php';
require_once 'PHPUnit/Autoload.php';
require_once 'Calculator.class.php';

class CaluratorTest extends PHPUnit_Framework_TestCase{
	
    protected $calurator;
    protected function setUp(){
        $this->calurator = new Calculator();
    }
	
	function testPlus(){
		
		//test code
		$this->calurator->plus(1);
		$this->assertEquals(1,$this->calurator->get());
		
		$this->calurator->plus(5);
		$this->assertEquals(6,$this->calurator->get());
		
		$this->calurator->plus(10);
		$this->assertEquals(16,$this->calurator->get());
	}
	
	function testMinus(){
		
		$this->calurator->set(10);
		
		$this->calurator->minus(1);
		$this->assertEquals(9,$this->calurator->get());
		
		$this->calurator->minus(5);
		$this->assertEquals(4,$this->calurator->get());
		
		$this->calurator->minus(3);
		$this->assertEquals(1,$this->calurator->get());
	}
	
	function testMultiply(){
		
		$this->calurator->set(1);
		
		//test code
		$this->calurator->multiply(2);
		$this->assertEquals(2,$this->calurator->get());
		
		$this->calurator->multiply(5);
		$this->assertEquals(10,$this->calurator->get());
		
		$this->calurator->multiply(3);
		$this->assertEquals(30,$this->calurator->get());
	}
	
	function testDivide(){
		
		$this->calurator->set(40);
		
		$this->calurator->divide(2);
		$this->assertEquals(20,$this->calurator->get());
		
		$this->calurator->divide(5);
		$this->assertEquals(4,$this->calurator->get());
		
		$this->calurator->divide(4);
		$this->assertEquals(1,$this->calurator->get());
	}



}


?>
