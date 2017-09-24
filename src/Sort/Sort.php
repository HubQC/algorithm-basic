<?php

namespace Algorithm\Sort;

use Algorithm\Helpers\SortTestHelper;

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


}