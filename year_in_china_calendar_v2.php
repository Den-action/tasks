<?php
//Составить программу, которая бы по заданному числу
// выводила его название по китайском календаре. Заданное
// число не может быть меньше 1924.
$year = $argv[1];
if (!is_numeric($year) || $year < 1924)
    die('Incorrect input. Input digit more, than 1924');
$yearInChina = $year % 12;
$arr = array('Monkey', 'Cock', 'Dog', 'Pig', 'Rat', 'Bull', 'Tiger', 'Rabbit', 'Dragon', 'Snake', 'Horse', 'Goat');
echo $arr[$yearInChina];
?>
