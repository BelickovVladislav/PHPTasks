<?php
/*
 *Найти все меньшие N числа-палиндромы, которые при возведении в квадрат дают палиндром.
 * Число называется палиндромом, если его запись читается одинаково с начала и с конца.
 */
function reverse($number)
{
    $m = 0;
    while ($number != 0) {
        $m *= 10;
        $m += $number % 10;
        $number = (int)($number / 10);
    }
    return $m;
}

$n = 300;
for ($i = 0; $i < $n; $i++)
    if (reverse($i * $i) == $i * $i)
        echo "$i<br/>";
?>