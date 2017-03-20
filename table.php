<?php
$file = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'table.txt', a) or die ('Cannot open file');
for ($i = 1; $i < 10; $i++){
    $str = '';
    for ($j = 1; $j < 10; $j++) {
        echo $str = str_pad($i * $j, 3, ' ', STR-PAD-LEFT);
        if (1 == $j) {
            echo '|';
            $str .= '|';
        }
        fwrite($file, $str, FILE_APPEND);
    }
    echo "\n";
    fwrite($file, "\r\n", FILE_APPEND);
    for ($k = 1; $k < 29; $k++) {
        if (1 == $i) {
            echo $borderStr = (4 == $k) ? '+' : '-';
        }
        else {
            $borderStr = '';
        }
        fwrite($file, $borderStr, FILE_APPEND);
    }
    echo "\n";
    fwrite($file, "\r\n", FILE_APPEND);
}
fclose($file);
?>
