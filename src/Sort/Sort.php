<?php

namespace Algorithm\Sort;

use Algorithm\Sort\SortTestHelper;

abstract class Sort
{

	public $array = [];

	protected $method_code = 0;
	protected $methods     = [];

	public function __construct ( $method_code = 0, $array = [ 100, 0, 1000 ] )
	{
		$helper = new SortTestHelper();

		$this->array       = $helper->generateRandomArray( ... $array );
		$this->method_code = $method_code;
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

	private function _printArray ( $array )
	{
		echo '<em>[';
		foreach ( $array as $num ) {
			echo $num . ', ';
		}
		echo ']</em>';
	}

	private function _testSort ()
	{
		$sort = $this->methods[$this->method_code]; // set calculate method

		// execution time
		$start = microtime( true );
		$this->$sort( $this->array ); // sort array
		$end            = microtime( true );
		$execution_time = $end - $start;

		return "<br><kbd><h4>Excution Time: $execution_time, is executed : {$this->_isSorted()}</h4></kbd><br>";
	}

	private function _isSorted ()
	{
		$size = sizeof( $this->array );

		for ( $i = 0; $i < $size - 1; ++$i ) {
			if ( $this->array[$i] > $this->array[$i + 1] ) {
				return 'No';
			}
		}

		return 'Yes';
	}

	private function _getClassName ()
	{
		return static::class;
	}
}