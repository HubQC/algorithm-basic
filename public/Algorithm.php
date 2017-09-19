<?php

require __DIR__ . './../vendor/autoload.php';

use Algorithm\Sort\BasicSort;
use Algorithm\Sort\AdvancedSort;

define('bracket', '<br>---------------------------------------------------<br>');

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
$sort([ new BasicSort(2), new AdvancedSort(0),]);





