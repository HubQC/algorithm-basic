<?php

namespace Algorithm\Heap;

abstract class Heap
{

	private $heap = [];
	private $size = -1;

	public function __construct ()
	{
		$this->size = 0;
		$this->heap[] = 0;
	}

	public function getSize ( )
	{
        return $this->size;    	
        // return count( $this->heap );
	}

	abstract public function insert( $item );
	abstract public function shiftUp( Int $index );
	abstract public function shiftDown( Int $index );

	// @TODO: print tree on page
	public function treePrint ()
	{
		
	}

	public function __toString ()
	{
		return __METHOD__;
	}

}
