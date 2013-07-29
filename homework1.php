<?php 
$content = file_get_contents("/home/james/php/homework1.txt");
//var_dump($content);

$array = explode("\n", $content);
//var_dump($array);

for($i = 0; $i < count($array); $i++) {
	$array2 = explode(" ", $array[$i]);
	$key[$i] = $array2[0];
	$value[$i] = $array2[1]; 
}
$kv = array_combine($key, $value);
var_dump($kv);

arsort($kv);
var_dump($kv);

$top10 = array_slice($kv, 0, 10);
var_dump($top10);

$str10 ="";
foreach($top10 as $ip=>$weight) {
	$str10 .= $ip."\t".$weight."\n"; 
}
var_dump($str10);
file_put_contents("/home/james/php/homework1_des.txt", $str10);
?>
