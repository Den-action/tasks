<?php
//Count num of digit in bigDigit with integrated functions
$digit = $argv[1];
$bigDigit = $argv[2];
if (!is_numeric($digit) || !is_numeric($bigDigit))
    die;
$length = strlen($bigDigit);
$num = 0;
for ($i = 0; $i < $length; $i++) {
    if ($digit == $bigDigit[$i])
        $num++;
}
var_dump($num);

?>
