<?php

class Bearch
{
	public function binarySearch ( Array $array, $target )
	{
		$size = sizeof( $array );

		$left = 0;
		$right = $size - 1;

		while ( $left <= $right ) {
			
			$mid = $left + ( $right - $left ) / 2;

			if ( $array[$mid] < $target ) {
				$left = $mid + 1;
			} elseif ( $array[$mid] > $target ) {
				$right = $mid - 1;
			} else {
				return $mid;
			}
		}

		return -1;
	}
}