<?php

namespace Algorithm\Sort;

use Algorithm\Sort\Sort;

class BasicSort extends Sort
{
	protected $methods = [
		'selectionSort',
		'insertionSort',
		'updatedInsertionSort',
	];

	public function selectionSort ()
	{
		$size = sizeof($this->array);

		for ($i = 0; $i < $size; ++$i) {

			// findMin of [i, $size)
			$indexMin = $i;
			for ($j = $indexMin + 1; $j < $size;  $j++) {
				if ($this->array[$indexMin] >= $this->array[$j]) {
					$indexMin = $j;
				}
			}

			array_swap($this->array, $i, $indexMin);
		}

		return;
	}

	public function insertionSort ()
	{
		$size = sizeof($this->array);

		for ($i = 1; $i < $size; $i++) {
			for ($j = $i; $j > 0 && $this->array[$j] < $this->array[$j-1]; $j--) {
				array_swap($this->array, $j-1, $j);
			}
		}
	}

	public function updatedInsertionSort ()
	{
		$size = sizeof($this->array);

		for ($i = 1; $i < $size; $i++) {
			$current = $this->array[$i];

			for ($j = $i; $j > 0 && $this->array[$j-1] > $current; $j--) {
				$this->array[$j] = $this->array[$j-1];
			}

			$this->array[$j] = $current;
		}
	}

	// @TODO
	public function bubbleSort ()
	{

	}

	// @TODO
	public function shellSort ()
	{

	}
}