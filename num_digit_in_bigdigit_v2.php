<?php
//Вам нужно разработать программу, которая считала бы 
//количество вхождений какой-нибуть выбранной вами цифры в 
//выбранном вами числе. 
$digit = $argv[1];
$bigDigit = $argv[2];
if (!is_numeric($digit) || !is_numeric($bigDigit))
    die;
$num = substr_count($bigDigit, $digit);
var_dump($num);

?>
