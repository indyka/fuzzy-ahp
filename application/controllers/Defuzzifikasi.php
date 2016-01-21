<?php 

class Defuzzifikasi extends CI_Controller

{	

	public function __construct() {

        parent::__construct();

    }

	public function laptop1($miu=''){

		return $miu+1;

	}

	public function laptop2($miu=''){

		return $miu+2;

	}

	public function laptop3($miu=''){

		return $miu+3;

	}

	public function laptop4($miu=''){

		return $miu+4;

	}

	public function laptop5($miu=''){

		return $miu+5;

	}

	public function laptop6($miu=''){

		return $miu+6;

	}

	public function laptop7($miu=''){

		return $miu+7;

	}

	public function laptop8($miu=''){

		return $miu+8;

	}

	public function laptop9($miu=''){

		return $miu+9;

	}

	public function laptop10($miu=''){

		return $miu+10;

	}

	public function wa($z, $miu){

		return ( ($z[0]*$miu[0]) + ($z[1]*$miu[1]) + ($z[2]*$miu[2]) + ($z[3]*$miu[3]) + ($z[4]*$miu[4]) +($z[5]*$miu[5]) + ($z[6]*$miu[6]) + ($z[7]*$miu[7]) + ($z[8]*$miu[8]) + ($z[9]*$miu[9]) ) / ( $miu[0] + $miu[1] + $miu[2] + $miu[3] + $miu[4] + $miu[5] + $miu[6] + $miu[7] + $miu[8] + $miu[9] ); 
	
	}

	public function defuzz_laptop1($x=''){

		$miu = 0;

		if ($x>=2) {
			$miu = 0;
		}

		elseif ($x>1 && $x<=2) {
			$miu = (2-$x);
		}

		elseif ($x<=1) {
			$miu = 1;
		}

		return abs($miu);

	}

	public function defuzz_laptop2($x=''){

		$miu = 0;

		if ($x<=1 || $x>=3) {
			$miu = 0;
		}

		elseif ($x>1 && $x<=2) {
			$miu = ($x-1);
		}

		elseif ($x>2 && $x<=3) {
			$miu = (3-$x);
		}

		return abs($miu);

	}

	public function defuzz_laptop3($x=''){

		$miu = 0;

		if ($x<=2 || $x>=4) {
			$miu = 0;
		}

		elseif ($x>2 && $x<=3) {
			$miu = ($x-2);
		}

		elseif ($x>3 && $x<=4) {
			$miu = (4-$x);
		}

		return abs($miu);

	}

	public function defuzz_laptop4($x=''){

		$miu = 0;

		if ($x<=3 || $x>=5) {
			$miu = 0;
		}

		elseif ($x>3 && $x<=4) {
			$miu = ($x-3);
		}

		elseif ($x>4 && $x<=5) {
			$miu = (5-$x);
		}

		return abs($miu);

	}

	public function defuzz_laptop5($x=''){

		$miu = 0;

		if ($x<=4 || $x>=6) {
			$miu = 0;
		}

		elseif ($x>4 && $x<=5) {
			$miu = ($x-4);
		}

		elseif ($x>5 && $x<=6) {
			$miu = (6-$x);
		}

		return abs($miu);

	}

	public function defuzz_laptop6($x=''){

		$miu = 0;

		if ($x<=5 || $x>=7) {
			$miu = 0;
		}

		elseif ($x>5 && $x<=6) {
			$miu = ($x-5);
		}

		elseif ($x>6 && $x<=7) {
			$miu = (7-$x);
		}

		return abs($miu);

	}

	public function defuzz_laptop7($x=''){

		$miu = 0;

		if ($x<=6 || $x>=8) {
			$miu = 0;
		}

		elseif ($x>6 && $x<=7) {
			$miu = ($x-6);
		}

		elseif ($x>7 && $x<=8) {
			$miu = (8-$x);
		}

		return abs($miu);

	}

	public function defuzz_laptop8($x=''){

		$miu = 0;

		if ($x<=7 || $x>=9) {
			$miu = 0;
		}

		elseif ($x>7 && $x<=8) {
			$miu = ($x-7);
		}

		elseif ($x>8 && $x<=9) {
			$miu = (9-$x);
		}

		return abs($miu);

	}

	public function defuzz_laptop9($x=''){

		$miu = 0;

		if ($x<=8 || $x>=10) {
			$miu = 0;
		}

		elseif ($x>8 && $x<=9) {
			$miu = ($x-8);
		}

		elseif ($x>9 && $x<=10) {
			$miu = (10-$x);
		}

		return abs($miu);

	}

	public function defuzz_laptop10($x=''){

		$miu = 0;

		if ($x<=9) {
			$miu = 0;
		}

		elseif ($x>9 && $x<10) {
			$miu = ($x-9);
		}

		elseif ($x>=10) {
			$miu = 1;
		}

		return abs($miu);
		
	}

}

