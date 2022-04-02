<?php

/*
 * Problem Link   : https://www.hackerrank.com/challenges/a-very-big-sum/problem
 * Problem Name   : A Very Big Sum
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */

function aVeryBigSum($ar)
{
    // Write your code here
    $sum = 0;
    for ($i = 0; $i < count($ar); $i++) {
        $sum += $ar[$i];
    }
    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
