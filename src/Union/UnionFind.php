<?php


namespace Algorithm\Union;

class UnionFind 
{

	/*
	|   element |  0  |1
	|   ------------------------------------------------
	|    id     |  0 |1
	|*/ 

	private $id;
	private $count;

	public function __construct( Int $n ) 
	{
		$this->count = $n;
		$this->id = [];	


		for ( $i = 0; $i < $n ; $i++ ) { 
			$this->id[$i] = $i; 
		}
	}


	public function union($p, $q) 
	{

		$pId = $this->find( $p );	
		$qId = $this->find( $q );	

		if ( $pId == $qId ) {
			return ;
		}

		for ($i = 0; $i < $this->count; $i ++) { 
			// find p element, then union with q
			if ( $this->id[$i] == $pId ) {
				$this->id[$i] = $qId;
			}	
		}
	}

	public function find( $p ) 
	{
		if ( $p < 0 || $p > $this->count ) {
			throw new Exception("out of range", 1);
			
		}
		return $this->id[$p];	
	}

	public function isConnected() 
	{
		
	}
}