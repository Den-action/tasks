<?php
//Count num of digit in bigDigit with integrated functions
$digit = $argv[1];
$bigDigit = $argv[2];
if (!is_numeric($digit) || !is_numeric($bigDigit))
    die;
$num = 0;
foreach (str_split($bigDigit) as $item) {
    if ($digit == $item)
        $num++;
}
var_dump($num);

?>
