<?php

namespace Algorithm\BST;

use Algorithm\BST\Node as Node;
/**
* 
*/
class BST
{
	protected $node;
	protected $leftNode;
	protected $rightNode;
	
	function __construct( $key, $value, Node $left = null, Node $right = null )
	{
		$this->node = new Node( $key, $value );
		$this->left = $left;
		$this->right = $right;
	}

	public function size() 
	{
		
	}

	public function isEmpty() 
	{
		return $this->count() == 0;		
	}

	/**
	 * 向以Node为根的BST中，插入节点 （$key, $val)
	 * 返回插入新节点后的BST的根
	 *  递归写法 （ try  非递归 )
	 */ 	
	public function insert(Node $node, $key, $val ) 
	{
		if ( $node == null) {
			return new Node( $key, $val );
		}

		if ( $key == $node->key ) {
			$node->value = $val;
		} else if ( $key < $node->key) {
			$node->left = $this->insert( $node->left, $key, $val );
		} else {

		}
		// @TODO: TBD
		return $node;
	}

	// return node
	public function search() 
	{
		
	}

	// similar to search
	// return true / false
	public function contain() 
	{
		
	}

	/**
	 * 前，中，后序遍历
	 */
	public function dfs() 
	{
		$order = [
			'preOrder',
			'inOrder', // 从小到大，输出
			'postOrder', // 空间释放， 左右子树贤释放，最后释放根
		];	
	}

	public function bfs() 
	{
		
	}

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