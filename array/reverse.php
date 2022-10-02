<?php

/**print the reverse of an array
*/
function revArray(array $list){
	$index = sizeof($list)-1;
	while($index>=0){
		print_r($list[$index]);
		$index--;
	}
}
$list = [1,2,3,4];
revArray($list);
?>
