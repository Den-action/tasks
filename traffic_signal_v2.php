<?php
//Работа светофора запрограммирована таким образом: с начала
// каждого часа, в течении трех минут горит зеленый сигнал,
// следующие две минуты горит красный, дальше в течении трех
// минут - зеленый и т. д. Вам нужно разработать программу,
// которая по введенному числу определяла какого цвета сейчас горит сигнал.
$value = $argv[1];
if (!preg_match('/[0-9]/', $value))
    die('Wrong input');
$value = $value % 5;
echo in_array($value, [0, 1, 2]) ? 'Green' : 'Red';
?>
