<?php
//Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). 
//Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные 
//индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
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
