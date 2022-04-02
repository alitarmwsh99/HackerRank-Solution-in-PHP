<?php
/*
 * Problem Link   : https://www.hackerrank.com/challenges/strong-password/problem
 * Problem Name   : Strong Password
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */

function minimumNumber($n, $password)
{
    $x = $y = $z = $l = false;
    for ($i = 0; $i < $n; $i++) {
        if ($password[$i] == '!' || $password[$i] == '@' || $password[$i] == '#' || $password[$i] == '$' || $password[$i] == '%' || $password[$i] == '^' || $password[$i] == '&' || $password[$i] == '*' || $password[$i] == '(' || $password[$i] == ')' || $password[$i] == '-' || $password[$i] == '+') {
            $x = true;
            echo "X<br>";
        } elseif (is_numeric($password[$i]) == 1) {
            $y = true;
            echo "Y<br>";
        } elseif (!ctype_upper($password[$i])) {
            $z = true;
            echo "Z<br>";
        } elseif (ctype_upper($password[$i])) {
            $l = true;
            echo "L<br>";
        }
    }
    $counter = 0;
    if (!$x)
        $counter++;
    if (!$y)
        $counter++;
    if (!$z)
        $counter++;
    if (!$l)
        $counter++;
    echo $counter . "<br>";
    return max(6 - $n, $counter);
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$password = rtrim(fgets(STDIN), "\r\n");

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . "\n");

fclose($fptr);
