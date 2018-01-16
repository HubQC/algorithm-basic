<?php

namespace Algorithm\BST;
/**
* 
*/
class Node
{
	protected $key;
	protected $value;
	
	function __construct( $key, $value )
	{
		$this->key = $key;
		$this->value = $value;
	}
}