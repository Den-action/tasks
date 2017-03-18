<?php
//Вам нужно разработать программу, которая проверяла
// бы введенное пользователем число (год). Число может
// быть в диапазоне от 1 до 9999.
$year = $argv[1];
if (!is_numeric($year) || $year < 1 || $year > 9999)
    die('Incorrect input');
if (0 == $year % 4)
    echo 'Leap year';
else
    echo 'Normal year';

?>
