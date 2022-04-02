<?php
/*
 * Problem Link   : https://www.hackerrank.com/challenges/find-digits/problem
 * Problem Name   : Find Digits
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */
function findDigits($n)
{
    // Write your code here
    $x = $n;
    $counter = 0;
    while ($x > 0) {
        if ($x % 10 == 0) {
            $x /= 10;
            continue;
        }
        if ($n % ($x % 10) == 0)
            $counter++;
        $x = $x / 10;
        $x = (int)$x;
    }
    return $counter;
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = findDigits($n);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
