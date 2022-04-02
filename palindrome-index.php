<?php

/*
 * Problem Link   : https://www.hackerrank.com/challenges/palindrome-index/problem
 * Problem Name   : Palindrome Index
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */

function palindromeIndex($s)
{
    $sizeString = strlen($s);
    $x = 0;
    $y = $sizeString - 1;
    while ($x < $sizeString) {
        if ($s[$x] != $s[$y])
            break;
        $x += 1;
        $y -= 1;
    }
    if ($x > $y) {
        return -1;
    }
    $n = $x + 1;
    $m = $y;
    while ($n < $y and $m > $x + 1) {
        if ($s[$n] != $s[$m]) {
            return $y;
        }
        $n += 1;
        $m -= 1;
    }
    return $x;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = rtrim(fgets(STDIN), "\r\n");

    $result = palindromeIndex($s);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
