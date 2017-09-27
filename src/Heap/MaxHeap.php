<?php

namespace Algorithm\Heap;

// 最大堆
class MaxHeap
{
	// for node(i)
	// parent(i)   = i / 2;
	// left child  = i * 2
	// right child = i * 2 + 1;
	// array[x ,0, 1, 2, 3, 4, 5, 6, 7]
	//             0
	//            / \
	//          1    2
	//         / \  / \
	//        3  4 5   6
	//       /
	//      7

	private $heap = [];
	private $size = -1;

	// @TODO: optimize for array_swap

	public function __construct ()
	{
		$this->size = 0;
		$this->heap[] = 0;
	}

	public function insert ( $item )
	{
		$this->heap[] = $item;
		$this->size++;

		$this->shiftUp( $this->size );
	}

	public function extractMax ()
	{
		$max = $this->heap[1];

		// array_swap( $this->heap, 1, $this->size );
		$this->heap[1] = $this->heap[$this->size];
		$this->size--;

		$this->shiftDown( 1 );

		return $max;
	}

	public function getSize ()
	{
		// return $this->size;
		return count($this->heap);
	}

	private function shiftUp ( $index )
	{
		while ( $index > 1 && $this->heap[$index] > $this->size[$index / 2] ) {
			array_swap( $this->heap, $index, $index / 2 );
			$index /= 2;
		}
	}

	private function shiftDown ( $index )
	{
		while ( 2 * $index <= $this->size ) {
			$leftChild   = $index * 2;
			$rightChild  = $leftChild + 1;
			$largerChild = $leftChild;

			if ( $rightChild <= $this->size && $this->heap[$leftChild] < $this->heap[$rightChild] ) {
				$largerChild = $rightChild;
			}

			if ( $this->heap[$index] >= $this->heap[$largerChild] ) {
				break;
			}

			// TODO: assign value instead of swapping value
			array_swap( $this->heap, $index, $largerChild );
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