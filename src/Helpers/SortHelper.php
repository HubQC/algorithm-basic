<?php

namespace Algorithm\Helpers;

class SortHelper
{
	private $array_length;
	private $leftborder;
	private $rightBorder;
	private $numberPerLine;

	public function __construct($array_length, $leftborder, $rightBorder)
	{
		$this->array_length = $array_length;
		$this->leftborder = $leftborder;
		$this->rightBorder = $rightBorder;
		$this->numberPerLine = 10;
	}

	/**
	 * generate random array between [$range_left, $range_right]
	 *
	 * @param $array_length
	 * @param $range_left
	 * @param $range_right
	 */
	public function generateRandomArray ()
	{
		$array_length = $this->array_length;
		$range_left   = $this->leftborder;
		$range_right  = $this->rightBorder;
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

	public function isSorted ( Array $array )
	{
		$size = sizeof( $array );

		for ( $i = 0; $i < $size - 1; ++$i ) {
			if ( $this->array[$i] > $this->array[$i + 1] ) {
				return false;
			}
		}

		return true;
	}

	public function setNumberPerLine ( $number )
	{
		$this->numPerLine = $number;	
	}

	public function printArray ( Array $array)
	{
		$numPerLine = $this->numberPerLine;
		$size = count($array);
		$buffer = '';

		foreach ($array as $key => $value) {
			$buffer .= $value . ', ';
			$pos = $key + 1;
			if ($pos % $numPerLine == 0 && $pos != $size) {
				$buffer .= PHP_EOL;	
			}
		}

		return  '[' . PHP_EOL . $buffer . PHP_EOL . ']';
	}

	private function _findMin ( Array $array )
	{
		$size = sizeof( $array );
		$min  = 0;

		for ( $j = 0; $j < $size; $j++ ) {
			if ( $array[$min] >= $array[$j] ) {
				$min = $j;
			}
		}

		return $min;
	}

}
