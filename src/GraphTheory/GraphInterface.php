<?php

namespace Algorithm\GraphTheory;

interface GraphInterface
{
	public function __construct ( Int $n, Bool $directed );
	public function V();
	public function E();
	public function addEdge( Int $v, Int $W );	
	public function hasEdge( Int $v, Int $w );

}