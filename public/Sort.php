<?php

require __DIR__ . './../vendor/autoload.php';

use Algorithm\Helpers\SortTestHelper AS Helper;
use Algorithm\Sort\BasicSort;
use Algorithm\Sort\AdvancedSort;
use Algorithm\Configuration\ArrayConfig;

/** Prepare Area */
$config = [ 10, 0, 1000 ]; 
$helper = new Helper( ... $config);

/**  Sort  **/
// OPTIONS FOR ARRAY SORTING: 
// SELECTION, INSERTION, UPDATED_INSERTION
// MERGE, QUICK
display([ new BasicSort(ArrayConfig::INSERTION, $helper), new BasicSort(ArrayConfig::SELECTION, $helper),]);






