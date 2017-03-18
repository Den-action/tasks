<?php
for ($i = 1; $i < 10; $i++){
    $str = '';
    for ($j = 1; $j < 10; $j++) {
        echo $str = str_pad($i * $j, 2, ' ', STR-PAD-LEFT) . '|';
    }
    echo "\n";
    for ($k = 1; $k < 28; $k++){
        echo 0 == $k % 3 ? '+' : '-';
    }
    echo "\n";
}

?>
