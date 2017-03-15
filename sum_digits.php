<?php
//Count sum of all digits
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
