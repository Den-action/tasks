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
switch($value) {
    case 0 :
        echo 'Green';
        break;
    case 1 :
        echo 'Green';
        break;
    case 2 :
        echo 'Green';
        break;
    case 3:
        echo 'Red';
        break;
    case 4:
        echo 'Red';
        break;
}
?>
