<?php

namespace Algorithm\Sort;

use Algorithm\Sort\Sort;

class AdvancedSort extends Sort
{

	protected $methods
		= [
			'mergeSort',
		];

	// NlogN
	// Extra O(N) space
	// top to btm
	public function mergeSort ()
	{
		$this->__mergeSort( $this->array, 0, sizeof( $this->array ) - 1 );
	}

	// optimize: 1. merge only when arr[mid] > arr[mid+1]
	//           2. when r - l <= 15(a number), start using insertion sort {from position L to R}
	// [l...r] sort
	private function __mergeSort ( $array, $l, $r )
	{
		if ( $l >= $r ) {
			return;
		}

		$size = sizeof( $array );
		$mid  = ceil( ( $r - $l ) / 2 + $l );

		// $left = array_slice($array, $mid);
		list( $left, $right ) = array_chunk( $array, $mid );
		$this->__mergeSort( $left, 0, $mid );
		$this->__mergeSort( $right, $mid + 1, $size );

		$array = $this->__merge( $left, $right );
	}

	private function __merge ( $left, $right )
	{
		$i = 0; // current left element
		$j = 0; // current right element
		$k = 0; // current element needs fill

		$l           = sizeof( $left );
		$r           = sizeof( $right );
		$full_length = $l + $r - 1;

		$a = [];

		while ( $k <= $full_length ) {
			while ( $i < $l && $j < $r ) {
				if ( $left[$i] > $right[$j] ) {
					$a[] = $right[$j++];
				} else {
					$a[] = $left[$i++];
				}
			}

			// only right element left
			while ( $i >= $l && $j < $r ) {
				$a[] = $right[$j++];
			}

			// only left element left
			while ( $j >= $r && $i < $l ) {
				$a[] = $left[$i++];
			}

			$k++;
		}

		return $k;
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

	// [ < 4, 4, > 4 ]
	// [v, .... < v , ... > v, i]
	//  l,        j ,          i
	public function quickSort ()
	{

	}
}