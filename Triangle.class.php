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
		
		//�e�ӂ�1�ȏ�
		if( !($side1 >= 1 && $side2 >= 1 && $side3 >= 1) ){
			return false;
		}
		//�e�ӂ�����
		if( !(is_int($side1) && is_int($side2) >= 1 && is_int($side3) >= 1) ){
			return false;
		}
		//�P�ӂ��Q�ӂ𑫂����ȉ�
		if( !( ($side1 < $side2 + $side3) && ($side2 < $side1 + $side3) && ($side3 < $side1 + $side2) ) ){
			return false;
		}
		
		return true;
	}
	
	function getTriangleKind( $side1, $side2, $side3 ){
		
		// �E���O�p�`�̏ꍇ��1
		if( $side1 == $side2 && $side2 == $side3 && $side1 == $side3 ){
			return self::triangle3;
		}
		
		// �E�񓙕ӎO�p�`�̏ꍇ��2
		if( $side1 == $side2 || $side2 == $side3 || $side1 == $side3 ){
			return self::triangle2;
		}
		
		// �E�s���ӎO�p�`�̏ꍇ��3
		if( $side1 != $side2 && $side2 != $side3 && $side1 != $side3 ){
			return self::triangle0;
		}
	}
	
	//���O�p�`�`�F�b�N
	function isTriangle3( $side1, $side2, $side3 ){
		
		// �E���O�p�`�̏ꍇ��1
		if( $side1 == $side2 && $side2 == $side3 && $side1 == $side3 ){
			return self::triangle3;
		}
	}
	
	//�񓙕ӎO�p�`�`�F�b�N
	function isTriangle2( $side1, $side2, $side3 ){
		
		// �E�񓙕ӎO�p�`�̏ꍇ��2
		if( $side1 == $side2 || $side2 == $side3 || $side1 == $side3 ){
			return self::triangle2;
		}
	}
	
	//�s���ӎO�p�`�`�F�b�N
	function isTriangle0( $side1, $side2, $side3 ){
		
		// �E�s���ӎO�p�`�̏ꍇ��3
		if( $side1 != $side2 && $side2 != $side3 && $side1 != $side3 ){
			return self::triangle0;
		}
	}

}

?>
