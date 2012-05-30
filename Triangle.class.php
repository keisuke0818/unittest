<?php 
/**
* @author keisuke kurata
*/
class Triangle {
	
	const equilateral_triangle = 1;
	const isosceles_triangle = 2;
	const scalene_triangle = 3;
	const non_triangle = 0;
	
	function Triangle(){
	}
	
	function validateTriangle( $side1, $side2, $side3 ){
		
		//各辺が1以上
		if( !($side1 >= 1 && $side2 >= 1 && $side3 >= 1) ){
			return false;
		}
		//各辺が整数
		if( !(is_int($side1) && is_int($side2) && is_int($side3)) ){
			return false;
		}
		//１辺が２辺を足した以下
		if( !( ($side1 < $side2 + $side3) && ($side2 < $side1 + $side3) && ($side3 < $side1 + $side2) ) ){
			return false;
		}
		//１辺が一番長い
		
		return true;
	}
	
	function getTriangleId( $side1, $side2, $side3 ){
		
		// ・正三角形の場合は1
		if( $side1 == $side2 && $side2 == $side3 && $side1 == $side3 ){
			return self::equilateral_triangle;
		}
		
		// ・二等辺三角形の場合は2
		if( $side1 == $side2 || $side2 == $side3 || $side1 == $side3 ){
			return self::isosceles_triangle;
		}
		
		// ・不等辺三角形の場合は3
		if( $side1 != $side2 && $side2 != $side3 && $side1 != $side3 ){
			return self::scalene_triangle;
		}
		
		return self::non_triangle;
	}
	

}

?>
