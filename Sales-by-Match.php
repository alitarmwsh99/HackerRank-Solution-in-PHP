<?php
/*
 * Problem Link   : https://www.hackerrank.com/challenges/sock-merchant/problem
 * Problem Name   : Sales by Match
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */

function sockMerchant($n, $ar)
{
    sort($ar);
    $counter = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($ar[$i] == $ar[$i - 1]) {
            $counter++;
            $i++;
        }
    }
    return  $counter;
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
