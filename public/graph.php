<?php

require __DIR__ . './vendor/autoload.php';

use Algorithm\GraphTheory\SparseGraph;


$n = 20;
$m = 100;

$sg = new SparseGraph( $n, false );
for ($i = 0; $i < $m; $i ++) { 
	$a = rand(0, 100) % $n;
	$b = rand(0, 100) % $n;

	$sg->addEdge( $a, $b );
}
