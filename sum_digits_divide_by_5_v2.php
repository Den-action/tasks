<?php
//Count sum of digits between 20 and 45 who divide by 5 with integrated functions
$sum = 0;
for ($i=20; $i < 46; $i++) {
    if (0 == fmod($i % 5))
    $sum += $i;
}
var_dump($sum);

?>
