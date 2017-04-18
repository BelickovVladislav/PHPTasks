<?php
/*
 * Даны  натуральные  числа  N  и  M.
 * Определить,  являются  ли  они  взаимно простыми числами.
 * Взаимно простые числа не имеют общих делителей, кроме единицы.
 */
function isRelativelyPrimeNumbers($n, $m)
{
    if ($m > $n) {
        $m += $n;
        $n = $m - $n;
        $m -= $n;
    }
    for ($i = 2; $i <= $m; $i++) {
        if ($n % $i == 0 && $m % $i == 0)
            return false;
    }
    return true;
}

$n = 14;
$m = 18;
echo "Числа $n и $m " . (isRelativelyPrimeNumbers($n, $m) ? "" : "не ") . "являются взаимнопростыми.";
