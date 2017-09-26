<?php

namespace Algorithm\Sort;

use Algorithm\Helpers\SortTestHelper;

abstract class Sort
{

	public $array = [];

	protected $method_code = 0;
	protected $methods     = [];
	protected $helper;

	public function __construct ( $method_code = 0, SortTestHelper $helper )
	{
		$this->helper = $helper;

		$this->array       = $this->helper->generateRandomArray();
		$this->method_code = $method_code;
	}

	public function __toString ()
	{
		$sort = $this->methods[$this->method_code] ;
		$msg = $this->_getClassName() . '::' . $sort . "\n";
		$msg .= 'Original: ' . $this->helper->printArray( $this->array ) . "\n";
	

		// execution time
		$start = microtime( true );
		$this->$sort();	// sort array
		$end            = microtime( true );
		$execution_time = $end - $start;

		$msg .= 'Time Spent: ' . $execution_time . "\n";
		$msg .= 'Sorted: ' . $this->helper->printArray( $this->array ) . "\n" ;

		return $msg;
	}

	private function _getClassName ()
	{
		return static::class;
	}
}