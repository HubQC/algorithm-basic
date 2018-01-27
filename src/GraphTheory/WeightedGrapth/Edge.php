<?php

class Edge
{
	protected $a;
	protected $b;
	protected $weight;

	public function __construct( $a, $b, $weight) 
	{
		$this->a = $a;	
		$this->b = $b;	
		$this->weight = $weight;	
	}
}