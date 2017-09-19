<?php

namespace Algorithm\Sort;

class SortTestHelper
{

	/**
	 * generate random array between [$range_left, $range_right]
	 *
	 * @param $array_length
	 * @param $range_left
	 * @param $range_right
	 */
	public function generateRandomArray ( $array_length, $range_left, $range_right )
	{
		$array = [];

		if ( $range_left >= $range_right ) {
			$temp        = $range_left;
			$range_left  = $range_right;
			$range_right = $temp;
		}

		for ( $i = 0; $i < $array_length; ++$i ) {
			srand( $this->make_seed() );

			$array[] = rand() % ( $range_right - $range_left + 1 ) + $range_left;
		}

		return $array;
	}

	private function make_seed ()
	{
		list( $usec, $sec ) = explode( ' ', microtime() );

		return $sec + $usec * 1000000;
	}

}
