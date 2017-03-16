<?php
//Вам нужно разработать программу, которая считала бы 
//количество вхождений какой-нибуть выбранной вами 
//цифры в выбранном вами числе. 
$digit = $argv[1];
$bigDigit = $argv[2];
if (!is_numeric($digit) || !is_numeric($bigDigit))
    die;
$num = 0;
$arr = str_split($bigDigit);
$digitLength = count($arr);
for ($i=0; $i < $digitLength; $i++) {
    if ($digit == $arr[$i])
        $num++;
}
var_dump($num);

?>
