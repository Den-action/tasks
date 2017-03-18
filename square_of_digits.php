<?php
//Дано натуральное число n. Вычислить: 
//11 + 22 + .. + nn. Вывести на экран 
//квадраты этих чисел, а также сумму квадратов этих чисел.
$digit = $argv[1];
if (!is_numeric($digit) || $digit < 1)
    die('Incorrect input. Input digit from 1');
for ($i = 1, $res = 0, $str ='0'; $i < $digit + 1; $i++) {
    $squareDigit = $i * $i;
    $str .= ' + ' . $squareDigit;
    $res += $squareDigit;
}
echo $str . ' = ' . $res;
?>
