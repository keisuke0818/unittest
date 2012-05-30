<?php 
/**
* @author keisuke kurata
*/
class Triangle {
	
	const triangle3 = 1;
	const triangle2 = 2;
	const triangle0 = 3;
	
	function Triangle(){
	}
	
	function validateTriangle( $side1, $side2, $side3 ){
		
		//各辺が1以上
		if( !($side1 >= 1 && $side2 >= 1 && $side3 >= 1) ){
			return false;
		}
		//各辺が整数
		if( !(is_int($side1) && is_int($side2) >= 1 && is_int($side3) >= 1) ){
			return false;
		}
		//１辺が２辺を足した以下
		if( !( ($side1 < $side2 + $side3) && ($side2 < $side1 + $side3) && ($side3 < $side1 + $side2) ) ){
			return false;
		}
		
		return true;
	}
	
	function getTriangleKind( $side1, $side2, $side3 ){
		
		// ・正三角形の場合は1
		if( $side1 == $side2 && $side2 == $side3 && $side1 == $side3 ){
			return self::triangle3;
		}
		
		// ・二等辺三角形の場合は2
		if( $side1 == $side2 || $side2 == $side3 || $side1 == $side3 ){
			return self::triangle2;
		}
		
		// ・不等辺三角形の場合は3
		if( $side1 != $side2 && $side2 != $side3 && $side1 != $side3 ){
			return self::triangle0;
		}
	}
	
	//正三角形チェック
	function isTriangle3( $side1, $side2, $side3 ){
		
		// ・正三角形の場合は1
		if( $side1 == $side2 && $side2 == $side3 && $side1 == $side3 ){
			return self::triangle3;
		}
	}
	
	//二等辺三角形チェック
	function isTriangle2( $side1, $side2, $side3 ){
		
		// ・二等辺三角形の場合は2
		if( $side1 == $side2 || $side2 == $side3 || $side1 == $side3 ){
			return self::triangle2;
		}
	}
	
	//不等辺三角形チェック
	function isTriangle0( $side1, $side2, $side3 ){
		
		// ・不等辺三角形の場合は3
		if( $side1 != $side2 && $side2 != $side3 && $side1 != $side3 ){
			return self::triangle0;
		}
	}

}

?>
