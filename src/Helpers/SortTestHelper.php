<?php

namespace Algorithm\Helpers;

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

	public function getSortTime (Array $origin, Array $toBeVerified)
	{
		$sort = $this->methods[$this->method_code]; // set calculate method

		// execution time
		$start = microtime( true );
		$this->$sort( $this->array ); // sort array
		$end            = microtime( true );
		$execution_time = $end - $start;

		return "<br><kbd><h4>Excution Time: $execution_time, is executed : {$this->_isSorted()}</h4></kbd><br>";
	}

	public function isSorted ()
	{
		$size = sizeof( $this->array );

		for ( $i = 0; $i < $size - 1; ++$i ) {
			if ( $this->array[$i] > $this->array[$i + 1] ) {
				return 'No';
			}
		}

		return 'Yes';
	}

	public function printArray ( Array $array )
	{
		echo '<em>[';
		foreach ( $array as $num ) {
			echo $num . ', ';
		}
		echo ']</em>';
	}

	public function __toString ()
	{
		echo '<samp><h1>' . $this->_getClassName() . '<h2>' . $this->methods[$this->method_code] . '</h2></h1></samp>';
		echo '<br><code><h3>before -- </h3></code>';
		$this->_printArray( $this->array );

		echo $this->_testSort();

		echo '<code><h3>after --- </h3></code>';
		$this->_printArray( $this->array );

		return '';
	}

	private function _findMin ( $array )
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

	private function _getClassName ()
	{
		return static::class;
	}
}
