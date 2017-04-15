<?php
/*
 * Найти наибольший общий делитель (НОД) двух натуральных чисел N и M.
 */
function NOD($n, $m)
{
    if ($m > $n) {
        $m += $n;
        $n = $m - $n;
        $m -= $n;
    }
    $nod = 1;
    for ($i = 1; $i <= $n; $i++)
        if ($n % $i == 0 && $m % $i == 0)
            $nod = $i;
    return $nod;

}
echo NOD(10,250);