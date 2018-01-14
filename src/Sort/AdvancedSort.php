<?php

namespace Algorithm\Sort;

class AdvancedSort extends Sort
{

	protected $methods = [
			'mergeSort',
			'quickSort'
	];


	/**
	|---------------------------------------------------------------------------------- 
	| 	Merge Sort
	|---------------------------------------------------------------------------------- 
	*/

	// NlogN
	// Extra O(N) space
	// top to btm
	public function mergeSort ()
	{
		$this->__mergeSort( 0, sizeof( $this->array ) - 1 );
	}

	// optimize: 1. merge only when arr[mid] > arr[mid+1]
	//           2. when r - l <= 15(a number), start using insertion sort {from position L to R}
	// [l...r] sort
	private function __mergeSort ( $l, $r )
	{
		if ( $l >= $r ) {
			return;
		}

		$mid  = ceil( ( $r - $l ) / 2 + $l );
		// devide && conquer
		$this->__mergeSort( $l, $mid );
		$this->__mergeSort( $mid + 1, $r );

		$array = $this->__merge( $left, $mid, $right );
	}

	/**
	 * Merge [$left, ... , $mid] and [$mid+1, ..., $right]
	 * 
	 * @param  [int] $left  [left border]
	 * @param  [int] $mid   []
	 * @param  [int] $right [description]
	 * @return [array]        [description]
	 */
	private function __merge ( $left, $mid, $right )
	{
		$i = $left; // current left element
		$j = $mid + 1; // current right element
		// $k = $i; // current element needs fill

		$l = $mid - 1; // left border
		$r = $right;    // right border

	// 	$a = [];

		while ( $i < $j ) {
			if ( $this->array[$i] > $this->array[$j] ) {
				array_swap( $this->array, $i, $j );
			}

			$i++;
		}

		// while ( $k <= $r ) {
		// 	while ( $i < $l && $j < $r ) {
		// 		if ( $left[$i] > $right[$j] ) {
		// 			$a[] = $right[$j++];
		// 		} else {
		// 			$a[] = $left[$i++];
		// 		}
		// 	}

		// 	// only right element left
		// 	while ( $i >= $l && $j < $r ) {
		// 		$a[] = $right[$j++];
		// 	}

		// 	// only left element left
		// 	while ( $j >= $r && $i < $l ) {
		// 		$a[] = $left[$i++];
		// 	}

		// 	$k++;
		// }

	// 	return $k;
	}

	// merge sort from btm to top
	// good for linked list with NlogN
	public function merge_bu ()
	{
		$n = sizeof( $this->array );

		for ( $step = 1; $step <= $n; $step += $step ) {
			for ( $i = 0; $i + $step < n; $i += $step + $step ) {
				// __merge(arr, $i, $i + $step - 1, min(i + step + step - 1, n - 1);
			}
		}
	}

	/**
	|---------------------------------------------------------------------------------- 
	| 	Quick Sort
	|---------------------------------------------------------------------------------- 
	*/

	// [ < 4, 4, > 4 ]
	// [v, .... < v , ... > v, i]
	//  l,        j ,          i
	public function quickSort ()
	{

	}

	private function _quickSort ( $left, $right )
	{
		
	}
}