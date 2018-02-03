<?php

namespace Algorithm\Heap\MaxHeap;

use Algorithm\Heap\Heap;

class IndexMaxHeap extends Heap
{
    protected $content;

    public function __construct()
    {
        $this->content = [];
        parent::__construct();
    }

	public function shiftUp ( $index )
	{
        if ( $index <= 0 || $index > $this->size ) {
            return ;
        }
        
        $content = $this->content[$this->heap[$index]];
        $parentIndex = (int)($index / 2);
        $parentContent = $this->content[$this->heap[$parentIndex]];

        while( $index > 0 &&  $content > $parentContent ) {
            array_swap( $this->heap, $index, $parentIndex );

            $parentIndex = (int)( $parentIndex / 2 );
            $parentContent = $this->content[$this->heap[$parentIndex]];         
        }
	}

	public function shiftDown ( $index )
	{
	
        if ( $index <= 0 || $index > $this->size ) {
            return ;
        }
        
        $content = $this->content[$this->heap[$index]];

        // find max child content
        $leftChildIndex = $index * 2;
        $rightChildIndex = $leftChild + 1;

        $leftChildContent = $this->content[$this->heap[$leftChildIndex]]; 
        $rightChildContent = $this->content[$this->heap[$rightChildIndex]]; 

        if ( $leftChildContent > $rightChildContent ) {
            $maxChildIndex = $leftChildIndex;
            $maxChildContent = $leftChildContent;
        } else {
            $maxChildIndex = $rightChildIndex;
            $maxChildContent = $rightChildContent;
        }

        // move down
        while( $index > 0 &&  $content > $parentContent ) {
            array_swap( $this->heap, $index, $parentIndex );

            $parentIndex = (int)( $parentIndex / 2 );
            $parentContent = $this->content[$this->heap[$parentIndex]];         
        }

	}

    public function insert( $item )
    {
    }
}
