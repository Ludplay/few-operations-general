<?php

function smallestCommonDivisible($number = 1) {    
    $found = false;

    if($number % 10 == 0) {
        if($number % 3 == 0) {
            if($number % 2 == 0) {
                $found = true;
            } 
        } 
    }

    if($found) {
        echo $number;
    } else {
        $number++;
        smallestCommonDivisible($number);
    }     
}

smallestCommonDivisible();

?>