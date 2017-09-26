<?php

require __DIR__ . './../vendor/autoload.php';

use Algorithm\Helpers\SortTestHelper AS Helper;
use Algorithm\Sort\BasicSort;
use Algorithm\Sort\AdvancedSort;
use Algorithm\Configuration\ArrayConfig;

/** Prepare Area */

define( 'SelectionSort', 0);
define( 'InsertionSort', 1);
define( 'RevisedInsertionSort', 2);
define( 'SelectionSOrt', 0);

define('bracket', "\n");

$config = [ 10, 0, 1000 ]; 
$helper = new Helper( ... $config);

$insert_bracket = function () {
	echo constant('bracket');
};

$sort = function ($objs) use ($insert_bracket) {
	foreach ($objs as $obj) {
		echo $obj;
		$insert_bracket();
	}
};

/**  Sort  **/
$sort([ new BasicSort(ArrayConfig::INSERTION, $helper), new BasicSort(1, $helper),]);






