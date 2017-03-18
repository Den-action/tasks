<?php
//Составить программу, которая бы по заданному числу
// выводила его название по китайском календаре. Заданное
// число не может быть меньше 1924.
$year = $argv[1];
if (!is_numeric($year) || $year < 1924)
    die('Incorrect input. Input digit more, than 1924');
$yearInChina = $year % 12;
switch($yearInChina) {
    case 0 :
        echo 'Monkey';
        break;
    case 1 :
        echo 'Cock';
        break;
    case 2 :
        echo 'Dog';
        break;
    case 3:
        echo 'Pig';
        break;
    case 4:
        echo 'Rat';
        break;
    case 5:
        echo 'Bull';
        break;
    case 6:
        echo 'Tiger';
        break;
    case 7:
        echo 'Rabbit';
        break;
    case 8:
        echo 'Dragon';
        break;
    case 9:
        echo 'Snake';
        break;
    case 10:
        echo 'Horse';
        break;
    case 11:
        echo 'Goat';
        break;
}
?>
