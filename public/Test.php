<?php

require __DIR__ . './../vendor/autoload.php';

/*
| ------------------------
|       Test Area
| ------------------------
 */

/*
 * partition
 */ 
$t1 = rand_array(10, 10);
$t2 = rand_array(14, 5);
$t2Obj = new ArrayObject( $t2 );
$t3 = $t2Obj->getArrayCopy();

//test_partition( $t1 , 1);
//test_partition( $t2 , 2);
// test_partition( $t3 , 3);

/*
 * binary search
 */ 
$a = rand_array( 15, 500 );
$target = $a[2];
test_binary( $a , max($a) );