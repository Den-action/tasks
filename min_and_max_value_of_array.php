<?php
//Ваше задание — создать массив, наполнить его случайными значениями
//(можно использовать функцию rand), найти максимальное и минимальное значение
// массива и поменять их местами.
for ($i=0; $i < 10; $i++) {
    $arr[] = rand(0, 9);
}
echo 'Before swap: ' . print_r($arr);
$min = min($arr);
$max = max($arr);
$minIndex = array_search($min, $arr);
$maxIndex = array_search($max, $arr);
$temp = $arr[$minIndex];
$arr[$minIndex] = $arr[$maxIndex];
$arr[$maxIndex] = $temp;
echo 'After swap: ' . print_r($arr);
?>
