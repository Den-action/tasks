<?php
//Create an array, fill it by rand(1, 100), calculate multiply of digits
//with pair indexes, then show elements who has no pair indexes
$multiplyDigits = 1;
for ($j = 0; $j < 10; $j++) {
    $arr[] = rand(1, 100);
}
for ($i = 0; $i < 10; $i++) {
    if (0 == $i%2.0) {
        $multiplyDigits *= $arr[$i];
    }
    else {
        $arrNoPairIndexes[] = $arr[$i];
    }
}
print_r($arr);
print_r('Multiply elements with pair indexes: ' . $multiplyDigits . "\n");
print_r("Array with no pair indexes \n");
print_r($arrNoPairIndexes);
?>
