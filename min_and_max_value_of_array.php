<?php
//Find min and max values of array and swap them
for ($i=0; $i < 10; $i++) {
    $arr[] = rand(0, 9);
}
if ($m > $arr[i])
    $max = $m;
for ($min = 0, $max = 0, $i=1; $i < 10; $i++) {
    $min = $arr[$min] > $arr[$i] ? $i : $min;
    $max = $arr[$max] > $arr[$i] ? $max : $i;
}
echo 'Before swap: ' . print_r($arr);
$temp = $arr[$min];
$arr[$min] = $arr[$max];
$arr[$max] = $temp;
echo 'After swap: ' . print_r($arr);
?>
