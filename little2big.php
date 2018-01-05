<?php

//input data (little endian) hex
$data = "FFFFFFFFFFFFFFFFFF477A252F1AC154 009323BE15326248ED8CB8806106C193";

//strip space
$data = preg_replace('/\s+/', '', $data);

//split to array 32bits
$array = str_split($data, 32);

echo "Little Input: \n". $data;
echo "\nHex Output: \n";
foreach($array as $line) 
	echo littleToBigEndian($line);
	
//convert from little to big endian hex
function littleToBigEndian($little) {
	$bytes = str_split($little,8);
	
	$result="";
	foreach($bytes as $byte) {
		$result.= implode('',array_reverse(str_split($byte,2)));
	}
	return $result;
}
?>
