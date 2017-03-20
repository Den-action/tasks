<?php
$file = __DIR__ . DIRECTORY_SEPARATOR . 'table.txt';
for ($i = 1; $i < 10; $i++){
    $str = '';
    for ($j = 1; $j < 10; $j++) {
        echo $str = str_pad($i * $j, 3, ' ', STR-PAD-LEFT);
        if (1 == $j) {
            echo '|';
            $str .= '|';
        }
        $res = file_put_contents($file, $str, FILE_APPEND);
        if (!$res)
            echo 'Cannot write to ' . $file;
    }
    echo "\n";
    file_put_contents($file, "\r\n", FILE_APPEND);
    for ($k = 1; $k < 29; $k++) {
        if (1 == $i) {
            echo $borderStr = (4 == $k) ? '+' : '-';
        }
        else {
            $borderStr = '';
        }
        file_put_contents($file, $borderStr, FILE_APPEND);
    }
    echo "\n";
    file_put_contents($file, "\r\n", FILE_APPEND);
}
?>
