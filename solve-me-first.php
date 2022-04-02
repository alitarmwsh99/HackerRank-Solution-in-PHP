<?php
/*
 * Problem Link   : https://www.hackerrank.com/challenges/solve-me-first/problem
 * Problem Name   : Solve Me First
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */

function solveMeFirst($a, $b)
{
  return $a + $b;
}

$handle = fopen("php://stdin", "r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a, (int)$_b);
print($sum);
fclose($handle);
