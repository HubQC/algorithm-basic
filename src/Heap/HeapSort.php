<?php

namespace Algorithm\Heap;


class HeapSort
{

    private $size;
    private $array;

    public function __construct( Array $array )
    {
        $this->array = $array;
        $this->size  = sizeof($array);
    }

    public function sort1()
    {
        $heap = new MaxHeap( $this->size );
        foreach ( $this->array as $number ) {
            $heap->insert( $number );
        }

        $sortedArray = [];
        for ($i = $this->size; $i >= 0; $i--) {
            $sortedArray[] = $heap->extractMax();
        }

        return $sortedArray;
    }
}