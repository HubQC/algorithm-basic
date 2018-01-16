<?php

class UnionFind 
{
	private $id;
	private $count;

	public function __construct( Int $n ) 
	{
		$this->count = $n;
		$this->id = [];	

		for ($i=0; $i < $n ; $i++) { 
			$this->id[$i] = $i; 
		}
	}


	public function union($p, $q) 
	{
		
	}

	public function find($p) 
	{
		
	}

	public function isConnected() 
	{
		
	}
}