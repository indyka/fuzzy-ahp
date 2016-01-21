<?php 

class Fuzzifikasi extends CI_Controller

{	

	public function __construct() {

        parent::__construct();

    }

	public function low($x=''){

		$miu = 0;

		if ($x>=4) {
			$miu = 0;
		}

		elseif (1<$x && $x<=4) {
			$miu = (4-$x)/3;
		}

		elseif ($x<=1) {
			$miu = 1;
		}

		return $miu;

	}

	public function medium($x=''){

		$miu = 0;

		if ($x<=1 || $x>=9) {
			$miu = 0;
		}

		elseif (1<$x && $x<=5) {
			$miu = ($x-1)/4;
		}

		elseif (5<$x && $x<=9) {
			$miu = (9-$x)/4;
		}

		return $miu;

	}

	public function high($x=''){

		$miu = 0;

		if ($x<=6) {
			$miu = 0;
		}

		elseif (6<$x && $x<=9) {
			$miu = ($x-6)/3;
		}

		elseif ($x>=9) {
			$miu = 1;
		}
		
		return $miu;

	}

}

