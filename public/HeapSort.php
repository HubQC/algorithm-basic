<?php

require __DIR__ . './../vendor/autoload.php';

use Algorithm\Heap\HeapSort;
use Algorithm\Helpers\SortTestHelper AS Helper;

$config = [ 20, 0, 100];
$helper = new Helper( ... $config );

$Hsort = new HeapSort($array);

$sorted = $Hsort->sort1();

print_r($sorted);
