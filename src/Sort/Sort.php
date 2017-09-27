<?php

namespace Algorithm\Sort;

use Algorithm\Helpers\SortHelper;

abstract class Sort
{

	public $array = [];

	protected $method_code = 0;
	protected $methods     = [];
	protected $helper;

	public function __construct ( $method_code = 0, SortHelper $helper )
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
		$execution_time = ($end - $start) * 1000;

		$msg .= 'Sorted:   ' . $this->helper->printArray( $this->array ) . "\n" ;
		$msg .= 'Time Spent: ' . $execution_time . 'ms' . "\n";

		return $msg;
	}

	private function _getClassName ()
	{
		return static::class;
	}
}