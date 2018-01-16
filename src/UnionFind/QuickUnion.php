<?php

namespace Algorithm\UnionFind;

class QuickUnion
{
	
	/*
	|
	| ---------------------
	|  Optimization based on size
	| ---------------------
	|
	|   element   | 0 | 1 | 2 | 3 |
	|   ------------------------------------------------
	|   parement  | 0 | 1 | 1 | 0 |
	|
	|       0 	1
	| 		| 	|
	| 		3 	2
	|*/ 

	private $id;
	private $count;
	private $sz; // $this->sz[$i] elements from root $i
	private $rank; // $this->rank[$i] 表示以$i为根的集合所表示的树的层数

	public function __construct( Int $n ) 
	{
		$this->count = $n;
		$this->id = [];	

		for ( $i = 0; $i < $n ; $i++ ) { 
			$this->id[$i] = $i; 
		}

		//TODO: init for $this->sz


		//TODO: init for $this->rank[$i] = 1 / 0
	}

	// use node with more elements as root
	public function union( $p, $q ) 
	{
		
	}

	// use ranked node ()
	public function union2() 
	{
		
	}

	// return the root of element $p
	public function find( $p ) 
	{
			
	}

	/**
	 *  find parent the elemnt $element
	 */
	public function parent( $element ) 
	{
		
	}

	public function isConnected( $p, $q ) 
	{
		
	}
}

