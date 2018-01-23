<?php

namespace Algorithm\GraphTheory;

use GraphInterface;

/*
| ------------------------------------
| 稀疏图 - 邻接表 ( Adjacency Lists )
| Sparse Graph
| ------------------------------------
|
| 		0 --- 1           0 1
|           / |           1 0 2 3
|         /   |           2 1 3
|       3 --- 2           3 1 2
| 						  
|
| 		0 ---> _1         0 1
|            /  |         1 2
|         /     |_        2 3
|       3 <---  2         3 1
| 						 
|
*/
class DenseGraph implements Graph
{
	protected $m; // 边
	protected $n; // 顶点
	protected $directed; //

	protected $G = []; // Graph Vector, true: 有边  false: 无边

	public function __construct( Int $n, Bool $directed ) 
	{
		$this->n = $n;	
		$this->m = 0;

		for ( $i = 0; $i < $n; $i ++ ) {
			$this->G[] = [];
		}
	}

	public function V() 
	{
		return $n;
	}

	public function E() 
	{
		return $m;
	}

	public function addEdge( Int $v, Int $w ) 
	{
		// check n > v > 0, n > w > 0	

		if ( $this->hasEdge( $v, $w )) {
			return ;
		}

		$this->G[$v][] = $w;

		// 处理 自环边, 忽略 平行边判断
		if ( $v != $w && !$this->directed ) {
			$this->G[$w][] = $v;
		}

		$this->m ++ ;
	}

	public function hasEdge( Int $v, $int w ) 
	{
		// check n, w [0, n)

		$size = sizeof( $this->G[$v] );
		for ($i = 0; $i < $size; $i ++) { 
			if ( $this->G[$v][$i] == $w ) {
				return true;
			}
		}

		return false;
	}
}