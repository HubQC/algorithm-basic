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
