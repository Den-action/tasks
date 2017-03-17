<?php
//Разработайте программу, которая определяла количество прошедших часов
//по введенным пользователем градусах. Введенное число может быть от 0 до 360.
$gradus = $argv[1];
if (!preg_match('/[0-9]/', $gradus))
    die('Wrong input');
$hours = (int)($gradus * 12 / 360);
$minutes = ($gradus * 12) % 360 / 6;
echo 'Hours left: ' . $hours . ' and ' . $minutes . ' minutes.';
?>
