<?php

use Algorithm\BST\Node as Node;

/*
| ------------------------
|     Helper Functions
| ------------------------
*/

function writeln ( String $string )
{
	echo $string . PHP_EOL;	
}

function insert_blanklines( Int $lines = 1 )
{
    while ( $line >= 0) {
        echo PHP_EOL;
        $line --;
    }
} 

function display ( Array $objects )
{
	foreach ($objects as $key => $object) {
		echo $object;
		insert_blanklines();
	}
}

function set_color( String $str, String $fore_clr, String $bg_clr = null )
{
    if ( ! isset( $foreground[$fore_clr] ) ) {
        $fore_clr = 'cyan';
    }

    if ( ! isset( $background[$bg_clr] ) ) {
        $bg_clr = 'light_grey';
    } 

    $foreground = [
            'black'         => '0;30',
            'dark_gray'     => '1;30',
            'blue'          => '0;34',
            'light_blue'    => '1;34',
            'green'         => '0;32',
            'light_green'   => '1;32',
            'cyan'          => '0;36',
            'light_cyan'    => '1;36',
            'red'           => '0;31',
            'light_red'     => '1;31',
            'purple'        => '0;35',
            'light_purple'  => '1;35',
            'brown'         => '0;33',
            'yellow'        => '1;33',
            'light_gray'    => '0;37',
            'white'         => '1;37',
        ]; 

    $background = [
            'black'         => '40',
            'red'           => '41',
            'green'         => '42',
            'yellow'        => '43',
            'blue'          => '44',
            'magenta'       => '45',
            'cyan'          => '46',
            'light_gray'    => '47',
    ];

    $template = "\033[" . $foreground[$fore_clr] . "m";

    return $template . $str . "\033[0m";
}

function print_array ( Array $a , $prefix = '', $hl1 = -1, $hl2 = -1, $hl3 = -1 )
{
    $str = set_color( $prefix, 'blue' ) . '[';
    foreach ( $a as $index => $v ) {
        // left
        if ( $hl1 == $index ) {
            //$v = "<<$v>>";
            $v = set_color( $v, 'cyan' ); 
        }
        //right
        if ( $hl2 == $index ) {
            //$v = "**$v**";
            $v = set_color( $v, 'yellow' ); 
        }
        // mid
        if ( $hl3 == $index ) {
            //$v = "--$v--";
            $v = set_color( $v, 'red' ); 
        }

        $str .= " $v," ;
    }
    $str .= ' ]';

    return $str;
}

function rand_array ( $n, $range = 100 ) 
{
    $m =[]; 
    for( $i = 0; $i < $n; $i++ ){ 
        $m[] = mt_rand( 0, $range );
    } 
    
    return $m;
}


function array_swap ( &$array, $key1, $key2 )
{
    $tmp          = $array[$key1];
    $array[$key1] = $array[$key2];
    $array[$key2] = $tmp;
}

/*
| ------------------------
|       Quick Sort
| ------------------------
*/
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
            echo print_array( $a, 'r : ', $left, $right ) . PHP_EOL;
        }


        while ( $left < $right && $a[$left] <= $pivot ) {
            $left++;
            echo print_array( $a, 'l : ', $left, $right ) . PHP_EOL;
        }

        array_swap( $a, $left, $right );
        $left++;
        $right--;
        echo print_array( $a, 's : ', $left, $right ) . PHP_EOL;
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
    echo print_array( $a, '0 : ', $left, $right ) . PHP_EOL;
    while ( $right > $left ) {
        while ( $right > $left && $a[$right] > $pivot ) {
            $right--;
            echo print_array( $a, 'r : ', $left, $right ) . PHP_EOL;
        }


        while ( $left < $right && $a[$left] <= $pivot ) {
            $left++;
            echo print_array( $a, 'l : ', $left, $right ) . PHP_EOL;
        }

        if ( $right > $left ) {
            array_swap( $a, $left, $right );
            $left++;
            $right--;
            echo print_array( $a, 's : ', $left, $right ) . PHP_EOL;
        }
    }

//    while ( $right >= 0 && $a[ $right ] > $pivot ) {
//        $right--;
//    }

    return $right ;
}



echo PHP_EOL;

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

    echo  print_array( $t, 'final   : ', $pivot ) . PHP_EOL . PHP_EOL . PHP_EOL ;
}

/*
| ------------------------
|      Binary Search
| ------------------------
 */

function binary_search ( Array $a, Int $target )
{
    $size = sizeof( $a );
    $left = 0;
    $right = $size - 1;

    while( $left <= $right ) {

        $mid = (int)($left + ( $right - $left ) / 2);

        echo print_array( $a, 'begi: ', $left, $right, $mid ) . PHP_EOL;

        if ( $target > $a[$mid] ) {
            $left = $mid + 1;
        } elseif( $target < $a[$mid] ) {
            $right = $mid - 1;
        } else {
            echo print_array( $a, 'find: ', $left, $right, $mid ) . PHP_EOL;
            return $mid;
        }
       
    }
    echo print_array( $a, 'fail: ', $left, $right, $mid ) . PHP_EOL;

    return -1;
}

function binary_ceil ( Array $a, Int $target )
{

}

function binary_floor ( Array $a, Int $target )
{

}

function test_binary( Array $a, Int $target , $mode = 'search' )
{
    sort( $a );
    $function = 'binary_' . $mode;
    echo 'target: ' . $target . PHP_EOL;
    $output = $function( $a, $target );
    echo 'output: ' . $output . PHP_EOL . PHP_EOL . PHP_EOL;
}

/*
| ------------------------
|        Tree Traverse
|   dfs: in order, pre order, post order
|   bfs: with Stack
| ------------------------
 */
function deal_node( Node $node )
{
    return $node->val;
}

function in_order ( Node $node )
{
    if ( $node == null ) {
        return ;
    }

    deal_node( $node );
    in_order( $node->left );
    in_order( $node->right );
}

function pre_order ( Node $node )
{
    if ( $node == null ) {
        return ;
    } 

    pre_order( $node->left );
    deal_node( $node );
    pre_order( $node->right ); 
}

function post_order ( Node $node )
{
    if ( $node == null ) {
        return ;
    } 

    post_order( $node->right );
    post_order( $node->left );
    deal_node( $node );
}

function bfs ( Node $root )
{
    $stack = [];
    array_push( $stack, $root );

    while ( !empty( $stack )) {
        $node = array_pop( $stack );

        if ( !is_null( $node->left )) {
            array_push( $stack, $node->left );
        }
        if ( !is_null( $node->right )) {
            array_push( $stack, $node->right );
        }

        deal_node( $node );
    }
}