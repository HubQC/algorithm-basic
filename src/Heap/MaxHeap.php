<?php

namespace Algorithm\Heap;


// 最大堆
class MaxHeap
{

	// for node(i)
	// parent(i) = i / 2;
	// left child = i * 2
	// right child =i * 2 + 1;
	// array[0, 1, 2, 3, 4, 5, 6, 7]

	private $data = [];
	private $size = -1;

	// @TODO: optimize for array_swap

	public function __construct ( $size, $autoFill = false )
	{
		if ( !$autoFill ) {
			return ;
		}

		for ( $i = 0; $i <= $size; $i++ ) {
			$this->insert( rand() * 100 );
		}
	}

	public function insert ( $item )
	{
		$this->data[] = $item;
		$this->size++;

		$this->shiftUp( $this->size );
	}

	public function extractMax ()
	{
		$max = $this->data[1];

		// array_swap( $this->data, 1, $this->size );
		$this->data[1] = $this->data[$this->size];
		$this->size--;

		$this->shiftDown( 1 );

		return $max;
	}

	public function getSize ()
	{
		return $this->size;
	}

	private function shiftUp ( $index )
	{
		while ( $index > 1 && $this->data[$index] > $this->size[$index / 2] ) {
			array_swap( $this->data, $index, $index / 2 );
			$index /= 2;
		}
	}

	private function shiftDown ( $index )
	{
		while ( 2 * $index <= $this->size ) {
			$leftChild   = $index * 2;
			$rightChild  = $leftChild + 1;
			$largerChild = $leftChild;

			if ( $rightChild <= $this->size && $this->data[$leftChild] < $this->data[$rightChild] ) {
				$largerChild = $rightChild;
			}

			if ( $this->data[$index] >= $this->data[$largerChild] ) {
				break;
			}

			// TODO: assign value instead of swapping value
			array_swap( $this->data, $index, $largerChild );
			$index = $largerChild;
		}
	}

	// @TODO: print tree on page
	public function treePrint ()
	{

	}

	public function __toString ()
	{
		return __METHOD__;
	}
}