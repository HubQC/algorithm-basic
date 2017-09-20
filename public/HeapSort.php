<?php

require __DIR__ . './../vendor/autoload.php';

use Algorithm\Heap\HeapSort;

$array = [ 4, 2, 53, 6523, 41];

$Hsort = new HeapSort($array);

$sorted = $Hsort->sort1();

print_r($sorted);

