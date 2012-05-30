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
		
		//�e�ӂ�1�ȏ�
		if( !($side1 >= 1 && $side2 >= 1 && $side3 >= 1) ){
			return false;
		}
		//�e�ӂ�����
		if( !(is_int($side1) && is_int($side2) && is_int($side3)) ){
			return false;
		}
		//�P�ӂ��Q�ӂ𑫂����ȉ�
		if( !( ($side1 < $side2 + $side3) && ($side2 < $side1 + $side3) && ($side3 < $side1 + $side2) ) ){
			return false;
		}
		//�P�ӂ���Ԓ���
		
		return true;
	}
	
	function getTriangleId( $side1, $side2, $side3 ){
		
		// �E���O�p�`�̏ꍇ��1
		if( $side1 == $side2 && $side2 == $side3 && $side1 == $side3 ){
			return self::equilateral_triangle;
		}
		
		// �E�񓙕ӎO�p�`�̏ꍇ��2
		if( $side1 == $side2 || $side2 == $side3 || $side1 == $side3 ){
			return self::isosceles_triangle;
		}
		
		// �E�s���ӎO�p�`�̏ꍇ��3
		if( $side1 != $side2 && $side2 != $side3 && $side1 != $side3 ){
			return self::scalene_triangle;
		}
		
		return self::non_triangle;
	}
	

}

?>
