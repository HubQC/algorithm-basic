<?php

function array_swap ( &$array, $key1, $key2 )
{
	$tmp          = $array[$key1];
	$array[$key1] = $array[$key2];
	$array[$key2] = $array[$key1];
}