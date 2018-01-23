<?php

namespace Algorithm\GraphTheory;

/*
| ----------------------------------------
|  稠密图 - 邻接矩阵 ( Adjacency Matrix)
|  Dense Graph
| ----------------------------------------
| 
| 		0 --- 1              0 1 2 3
|           / |           0  0 1 0 0 
|         /   |           1  1 0 1 1
|       3 --- 2           2  0 1 0 1
| 						  3  0 1 1 0
|
| 		0 ---> _1            0 1 2 3
|            /  |         0  0 1 0 0 
|         /     |_        1  0 0 1 0
|       3 <---  2         2  0 0 0 1
| 						  3  0 1 0 0
|
|*/
class SparseGraph 
{
	protected $m; // 边
	protected $n; // 顶点
	protected $directed; //

	protected $G = []; // Graph Vector, true: 有边  false: 无边

	public function __construct( Int $n, Bool $directed ) 
	{
		$this->N = $n;	
		$this->M = 0;

		for ( $i = 0; $i < $n; $i ++ ) {
			$this->G[] = array_fill( 0, $n, false );
		}
	}

	// 返回顶点📖
	public function V() 
	{
		return $this->N;
	}

	// 返回边📖
	public function E() 
	{
		return $this->M;
	}

	// 顶点 v w 之间建立一条边
	public function addEdge( Int $v, Int $w ) 
	{
		// check n > v > 0, n > w > 0	

		if ( $this->hasEdge( $v, $w )) {
			return ;
		}

		$this->G[$w][$v] = true;

		if ( !$this->directed ) {
			$this->G[$w][$v] = true;
		}

		$this->M ++ ;
	}

	public function hasEdge( Int $v, $int w ) 
	{
		return G[$v][$w];	
	}
}