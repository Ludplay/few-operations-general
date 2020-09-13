<?php

$number = 1;
$total = 0;
while ($number < 1000) {
    if($number % 3 == 0 || $number % 5 == 0) {
        $total += $number;
    }

    $number++;
}

echo $total;

?>