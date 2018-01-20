<?php

function array_swap ( &$array, $key1, $key2 )
{
	$tmp          = $array[$key1];
	$array[$key1] = $array[$key2];
	$array[$key2] = $tmp;
}

function writeln ( String $string )
{
	echo $string . "\n";	
}

function insert_blankline()
{
	echo PHP_EOL;
} 

function display ( Array $objects )
{
	foreach ($objects as $key => $object) {
		echo $object;
		insert_blankline();
	}
}
/*
|
| Partition Helper
|
|
|*/
function quick_sort ( Array $array )
{
    
}

function partition1 ( Array &$array )
{
    $length = sizeof( $array );
    $pivot = $array[0];
    $i = -1; // the index of the last element < pivot
    $j =  $length; // the index of the first element > pivot
    // [ $i + 1, $cursor - 1] for elemnts = pivot
    $cursor = 1;
    echo 'pivot: ' . $pivot . ' ';
    while ( $cursor < $j )
    {
        if ( $array[$cursor] < $pivot ) {
        // current cursor element < pivot
            $i++;
            array_swap ( $array, $i, $cursor );
            $cursor ++;
        } else if ( $array[$cursor] == $pivot ) {
        //
            $cursor ++;
        } else {
        // 
            $j--;
           array_swap ( $array, $cursor, $j ); 
        }
    }

    return $j - 1;
}

function partition2 ( Array &$a )
{
    $size = sizeof( $a );
    $left  = 0;
    $right = sizeof( $a ) - 1;
    $mid   = $left + ( $right - $left ) / 2;
    $pivot = $a[(int)$mid];

    echo 'pivot: ' . $pivot . ' ' . PHP_EOL;
    while ( $right > $left ) {
        while ( $right > $left && $a[$right] >= $pivot ) {
            $right--;
        }
        echo print_array( $a, 'r r: ', $left, $right ) . PHP_EOL;


        while ( $left < $right && $a[$left] <= $pivot ) {
            $left++;
        }
        echo print_array( $a, 'r l: ', $left, $right ) . PHP_EOL;

        array_swap( $a, $left, $right );
        $left++;
        $right--;
        echo print_array( $a, 'r s: ', $left, $right ) . PHP_EOL;
    }

    return $left;
}

function partition3 ( Array &$a )
{
    $size = sizeof( $a );
    $left  = 0;
    $right = sizeof( $a ) - 1;
    $mid   = $left + ( $right - $left ) / 2;
    $pivot = $a[(int)$mid];

    echo 'pivot: ' . $pivot . ' ' . PHP_EOL;
    while ( $right > $left ) {
        while ( $right > $left && $a[$right] > $pivot ) {
            $right--;
        }
        echo print_array( $a, 'r r: ', $left, $right ) . PHP_EOL;


        while ( $left < $right && $a[$left] <= $pivot ) {
            $left++;
        }
        echo print_array( $a, 'r l: ', $left, $right ) . PHP_EOL;

        if ( $right > $left ) {
            array_swap( $a, $left, $right );
            $left++;
            $right--;
            echo print_array( $a, 'r s: ', $left, $right ) . PHP_EOL;
        }
    }

//    while ( $right >= 0 && $a[ $right ] > $pivot ) {
//        $right--;
//    }
    return $right ;
}

function rand_array ($n, $range = 100) { $m =[]; for($i=0;$i<$n;$i++){ $m[]=mt_rand(0, $range);} return $m;}

echo PHP_EOL;

$t1 = rand_array(10, 10);
$t2 = rand_array(14, 5);
$t2Obj = new ArrayObject( $t2 );
$t3 = $t2Obj->getArrayCopy();

//test_partition( $t1 , 1);
//test_partition( $t2 , 2);
test_partition( $t3 , 3);

function test_partition( Array $t, $mode ) 
{
    echo "/*" . PHP_EOL;
    echo "| -----------------------------------------------" . PHP_EOL;
    echo "|          Mode$mode   \$right                  " . PHP_EOL;
    echo "| -----------------------------------------------" . PHP_EOL;
    echo "*/ " . PHP_EOL;

    $mid = (int)( ( count($t) - 1 ) / 2 );
    echo print_array( $t, 'original: ', $mid ) . PHP_EOL;

    $partition = 'partition' . $mode;
//    $pivot = $mode == 1 ? {$partition1}( $t ) : partition2( $t );
    $pivot = $partition( $t );
    echo 'pivot_index: ' . $pivot . PHP_EOL;

    echo  print_array( $t, 'after   : ', $pivot ) . PHP_EOL . PHP_EOL . PHP_EOL ;
}

function print_array ( Array $a , $prefix = '', $highlight = -1, $hl2 = -1 )
{
    $str = $prefix . '[';
    foreach ( $a as $index => $v ) {
        if ( $highlight == $index ) {
            $v = "<<$v>>";
        }
        if ( $hl2 == $index ) {
            $v = "**$v**";
        }
        $str .= " $v," ;
    }
    $str .= ']';

    return $str;
}