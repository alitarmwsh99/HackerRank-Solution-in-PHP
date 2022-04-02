<?php
/*
 * Problem Link   : https://www.hackerrank.com/challenges/electronics-shop/problem
 * Problem Name   : Electronics Shop
 * Language:      : PHP 8.1.3 
 * Programmer     : Ali Ahmed Tarmoush 
 * Status         : Accepted
 */

function getMoneySpent($keyboards, $drives, $b)
{
    $counter = -1;
    for ($i = 0; $i < count($keyboards); $i++) {
        for ($j = 0; $j < count($drives); $j++) {
            $sum = $keyboards[$i] + $drives[$j];
            if ($sum <= $b) {
                if ($counter == -1 || $sum > $counter)
                    $counter = $sum;
            }
        }
    }
    return $counter;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $bnm_temp);
$bnm = explode(' ', $bnm_temp);

$b = intval($bnm[0]);

$n = intval($bnm[1]);

$m = intval($bnm[2]);

fscanf($stdin, "%[^\n]", $keyboards_temp);

$keyboards = array_map('intval', preg_split('/ /', $keyboards_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $drives_temp);

$drives = array_map('intval', preg_split('/ /', $drives_temp, -1, PREG_SPLIT_NO_EMPTY));

/*
 * The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
 */

$moneySpent = getMoneySpent($keyboards, $drives, $b);

fwrite($fptr, $moneySpent . "\n");

fclose($stdin);
fclose($fptr);
