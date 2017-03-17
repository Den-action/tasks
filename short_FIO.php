<?php
//Ваши задание будет создание создание сокращенного варианта ФИО, т. е.
//вводим: Иванов Иван Петрович и нам выводит: Иванов И. П.
$fio = $argv[1];
if (!preg_match('/[a-zA-Z]/', $fio))
    die('Wrong input');
$arr = explode(' ', $fio);
$length = count($arr);
for($i=1; $i < $length; $i++) {
    $arr[$i] = ' ' . $arr[$i][0] . '.';
}
$str = implode($arr);
var_dump($str);
?>
