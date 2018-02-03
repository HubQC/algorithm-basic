<?php

namespace Algorithm\Helpers;

use Algorithm\GrapthTheory\GrpahInterface as Graph;

class GrapthIterator implements Iterator
{
    public function __construct( Graph $G )
    {
        var_dump( __METHOD__ );
    }
    public function current ()
    {
    }

    public function key ()
    {
    }

    public function next ()
    {
    }

    public function rewind ()
    {
    }

    public function valid ()
    {
    }
}

$i = new GIterator();
