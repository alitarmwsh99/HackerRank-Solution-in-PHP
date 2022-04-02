<?php

/*
 * Problem Link   : https://www.hackerrank.com/challenges/diagonal-difference/problem
 * Problem Name   : Diagonal Difference
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */

function diagonalDifference($arr)
{
    $primary = $secondary = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($i == $j) {
                $primary += $arr[$i][$j];
            }
            if (($i + $j) == (count($arr) - 1))
                $secondary += $arr[$i][$j];
        }
    }
    return abs($primary - $secondary);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
