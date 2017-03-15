<?php
//Count num of digit in bigDigit with integrated functoins
$digit = $argv[1];
$bigDigit = $argv[2];
if (!is_numeric($digit) || !is_numeric($bigDigit))
    die;
$num = substr_count($bigDigit, $digit);
var_dump($num);

?>
