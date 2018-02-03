<?php
namespace Algorithm\WeightedGraph;

use Algorithm\GraphTheory\GrpahInterface as Graph;

// O(ElogE)
class LazyPrime
{
	private $marked = [];
		
	function __construct( Graph $G )
	{
		# code...
		// init marked => all false
		//
	}

	public function visited ( Int $v )
	{
		return $this->marked[$v];	
	}

	public function visit ( Int $V )
	{
	
	}

	/*
	| Revised LazyPrime
	| Use IndexMinHeap
	|
	| O(ElogV)
	*/

	protected $indexMinHeap = [];
}