<?php

namespace Algorithm\Union;

class PathCompressionUnion
{
	
	function __construct(argument)
	{
		# code...
	}

	public function find( $p ) 
	{
		// edition 1
		while ( $p != $this->parent[$p]) {
			// compression path
			// e.g.: 1->2->3->4  ===> 1->3->4
			// 						  2-/
			$this->parent( $p ) = $this->parent( $this->parent( $p ) );	
			$p = $this->parent( $p );
		}	

		// edition 2
		if ( $p != $this->parent( $p )) {
			$this->parent( $p ) = $this->find( $this->parent( $p ) );
		}

		return $this->parent( $p );


	}
}