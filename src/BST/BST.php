<?php

namespace Algorithm\BST;

use Algorithm\BST\Node as Node;

class BST
{
	protected $node;
	protected $leftNode;
	protected $rightNode;

	protected $size;
	
	function __construct( $key, $value, Node $left = null, Node $right = null )
	{
		$this->node = new Node( $key, $value );
		$this->left = $left;
		$this->right = $right;
	}

	public function size() 
	{
		return $this->size;	
	}

	public function count ( $arguments )
	{
		return $this->size;	
	}

	public function isEmpty() 
	{
		return $this->count() == 0;		
	}

	/**
	 * 向以Node为根的BST中，插入节点 （$key, $val)
	 * 返回插入新节点后的BST的根
	 * 递归写法 （ try  非递归 )
	 */ 	
	public function insert( Node $node, $key, $val ) 
	{
		if ( $node == null) {
			return new Node( $key, $val );
		}

		if ( $key == $node->key ) {
			$node->value = $val;
		} elseif ( $key < $node->key) {
			$node->left  = $this->insert( $node->left, $key, $val );
		} else {
			$node->right = $this->insert( $node->right, $Key, $val );
		}
		// @TODO: TBD
		$this->size ++;
		return $node;
	}

	// return node
	public function search( Node $node, Int $val ) 
	{
		if ( $node == null ) {
			return null;
		}

		if ( $node->val == $val ) {
			return $node;
		}	

		if ( $val < $node->val ) {
			return $this->search( $node->left, $val );
		}

		if ( $val > $node->val ) {
			return $this->search( $node->right, $val );
		}
	}

	// similar to search
	// return true / false
	public function contain() 
	{
		
	}

	/**
	 * DFS: 前，中，后序遍历 ( pre-order, in-order, post-order )
	 * BFS: with stack
	 * @helpers.php
	 */

	/**
	 *  return key
	 */ 
	public function min() 
	{
		
	}

	/**
	 * return key
	 */ 
	public function max() 
	{
		
	}

	/**
	 * 
	 */
	public function removeMin() 
	{
		
	}

	public function removeMax() 
	{
		
	}

	/**
	 * remove any node
	 * Hubbard Deletion 
	 */  
	public function remove() 
	{
		
	}

	// 顺序性

	public function successor() 
	{
		
	}

	public function predecessor() 
	{
		
	}

	public function floor() 
	{
		
	}

	public function ceil() 
	{
		
	}

	public function rank() 
	{
		
	}

	public function select( Int $rank ) 
	{
		
	}
}