<?php

/*
 * Problem Link   : https://www.hackerrank.com/challenges/compare-the-triplets/problem
 * Problem Name   : Compare the Triplets
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */

function compareTriplets($a, $b)
{
    $alice = $bob = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] > $b[$i])
            $alice++;
        elseif ($a[$i] < $b[$i])
            $bob++;
    }
    $x = [];
    $x[0] = $alice;
    $x[1] = $bob;
    return $x;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
