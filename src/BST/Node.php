<?php

namespace Algorithm\BST;

class Node
{
	protected $key;
	protected $value;
	private $left;
	private $right;
	
	function __construct( $key, $value, Node $left = null, Node $right = null )
	{
		$this->key = $key;
		$this->value = $value;

		$this->left = $left;
		$this->right = $right;
	}
}