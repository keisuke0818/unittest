<?php 
/**
* @author keisuke kurata
*/
require_once 'PHPUnit/Autoload.php';
require_once 'Triangle.class.php';

class TriangleTest extends PHPUnit_Framework_TestCase{
	
    protected $triangle;
    protected function setUp(){
		$this->triangle = new Triangle();
    }
	
	// 【演習】 三角形の各辺の長さを表す整数を入力して
	// そして、各辺が三角形を形成しない場合は例外を起こすこと。
	function testValidate(){
		
		$side1 = 1;
		$side2 = 1;
		$side3 = 0;
        $this->assertEquals(false, $this->triangle->validateTriangle( $side1, $side2, $side3 ) );
		
		$side1 = 1;
		$side2 = 0.3;
		$side3 = 0.5;
        $this->assertEquals(false, $this->triangle->validateTriangle( $side1, $side2, $side3 ) );
		
		$side1 = 8;
		$side2 = 4;
		$side3 = 4;
        $this->assertEquals(false, $this->triangle->validateTriangle( $side1, $side2, $side3 ) );
	}
	
	function testTriangle(){
		
		// ・正三角形の場合は1
		$side1 = 5;
		$side2 = 5;
		$side3 = 5;
        $this->assertEquals(true, $this->triangle->validateTriangle( $side1, $side2, $side3 ) );
        $this->assertEquals(Triangle::equilateral_triangle, $this->triangle->getTriangleId( $side1, $side2, $side3 ) );
		
		// ・二等辺三角形の場合は2
		$side1 = 4;
		$side2 = 4;
		$side3 = 5;
        $this->assertEquals(true, $this->triangle->validateTriangle( $side1, $side2, $side3 ) );
        $this->assertEquals(Triangle::isosceles_triangle, $this->triangle->getTriangleId( $side1, $side2, $side3 ) );
		
		// ・不等辺三角形の場合は3
		$side1 = 3;
		$side2 = 4;
		$side3 = 5;
        $this->assertEquals(true, $this->triangle->validateTriangle( $side1, $side2, $side3 ) );
        $this->assertEquals(Triangle::scalene_triangle, $this->triangle->getTriangleId( $side1, $side2, $side3 ) );
		
	}
	
}


?>
