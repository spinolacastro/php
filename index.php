<?php
// This is only an example, the numbers below will
// differ depending on your system

for ($i=1; $i<1000; $i++) {
	//echo "used memory is " . memory_get_usage() . "<br/>";
	$a = loadmem($i); 
	//echo "used memory after allocating ".$i."m is " . memory_get_usage() . "<br/>"; // 57960
	//echo "used memory after unsetting allocated memory is " . memory_get_usage() . "<br/>"; // 36744
	echo "You have allocated ". $i . "M (". memory_get_usage() . ") memory in this php script" . "<br />";
	unset($a);
}

function loadmem($howmuchmeg) {
	$a = str_repeat("0", $howmuchmeg * 1024 * 1024); // alocating 10 chars times million chars	
	return $a;
}

?> 
