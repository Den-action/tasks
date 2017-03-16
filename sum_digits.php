<?php
//Вам нужно разработать программу, которая считала 
//бы сумму цифр числа введенного пользователем. 
//Например: есть число 123, то программа должна 
//вычислить сумму цифр 1, 2, 3, т. е. 6.
$digit = $argv[1];
$sumDigit = 0;
if (!is_numeric($digit))
    die('Not a numeric NaN');
$arr = str_split($digit);
$digitLength = count($arr);
for ($i=0; $i < $digitLength; $i++) {
    $sumDigit += $arr[$i];
}
var_dump($sumDigit);

?>
