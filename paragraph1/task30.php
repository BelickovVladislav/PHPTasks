<?php
/*
 * Найти среди натуральных чисел n, n+1,...,2n-1 числа-близнецы,
 * т. е. два таких простых числа, разность между которыми равна двум.
 */
function isSimple($number)
{
    for ($i = 2; $i <= (int)($number / 2) + 1; $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}

$n = 50;
$max = (int)(2 * $n - 1);
for ($i = $n; $i < $max - 2; $i++) {
    if (isSimple($i) && isSimple($i + 2))
        echo $i." ".($i + 2)."<br>";
}
