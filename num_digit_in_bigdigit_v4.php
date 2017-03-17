<?php
//Count num of digit in bigDigit with integrated functions
$digit = $argv[1];
$bigDigit = $argv[2];
if (!is_numeric($digit) || !is_numeric($bigDigit))
    die;
//$num = 1;
$num = strlen($bigDigit) - strlen(str_replace($digit, '', $bigDigit));
var_dump($num);

?>
