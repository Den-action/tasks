<?php
//Count num of digit in bigDigit
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
