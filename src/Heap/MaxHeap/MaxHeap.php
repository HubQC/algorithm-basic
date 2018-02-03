<?php

namespace Algorithm\Heap\MaxHeap;

use Alogrithm\Heap\Heap;

// 最大堆
class MaxHeap extends Heap
{
	// for node(i)
	// parent(i)   = i / 2;
	// left child  = i * 2
	// right child = i * 2 + 1;
	// array[x ,0, 1, 2, 3, 4, 5, 6, 7]
	//              __0__
	//             /     \ 
	//           _1_     _2_
	//          /   \   /   \
	//        _3_____4_5_____6_  
	//       /
	//      7
	//                0  
	//             /     \ 
	//            1       2 
	//          /   \   /   \
	//         3     4 5     6   
	//       /
	//      7

	// @TODO: optimize for array_swap
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
}
