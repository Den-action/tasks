<?php
//$ftable = fopen("table.txt", "w");
$file = __DIR__ . DIRECTORY_SEPARATOR . 'table.txt';
for ($i = 1; $i < 10; $i++){
    $str = '';
    for ($j = 1; $j < 10; $j++) {
        echo $str = str_pad($i * $j, 2, ' ', STR-PAD-LEFT) . '|';
        $res = file_put_contents($file, $str, FILE_APPEND);
        if (!$res)
            echo 'Cannot write to ' . $file;
    }
    echo "\n";
    file_put_contents($file, "\r\n", FILE_APPEND);
    for ($k = 1; $k < 28; $k++){
        echo 0 == $k % 3 ? '+' : '-';
    }
    echo "\n";
}
//fclose($ftable);

?>
