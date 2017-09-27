<?php

require __DIR__ . './../vendor/autoload.php';

use Algorithm\Sort\BasicSort;
use Algorithm\Sort\AdvancedSort;
use Algorithm\Configuration\ArrayConfig;
use Algorithm\Helpers\SortHelper as Helper;

/** Prepare Area */
$config = [ 20, 0, 1000 ];
$helper = new Helper(... $config);
$helper->setNumberPerline(15);

/**  Sort  **/
// OPTIONS FOR ARRAY SORTING:
// SELECTION, INSERTION, UPDATED_INSERTION
// MERGE, QUICK
$toCompare =[
	// BASIC SORT
    new BasicSort(ArrayConfig::INSERTION, $helper),
    new BasicSort(ArrayConfig::SELECTION, $helper),
    new BasicSort(ArrayConfig::UPDATED_INSERTION, $helper),

	// ADVANCED SORT

] ;
display($toCompare);
