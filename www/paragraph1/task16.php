<?php
/*
 * Натуральное число называют совершенным, если оно равно сумме всех своих делителей, не считая его самого.
 * Например, 6=1+2+3.  Найти  все совершенные числа в диапазоне от N до M.
 */
function isPerfectNumber($number)
{
    $sum = 0;
    for ($i = 1; $i < (int)($number / 2) + 1; $i++)
        if ($number % $i == 0)
            $sum += $i;
    return $sum == $number;
}

$n = 6;
$m = 20;
for ($i = $n; $i < $m; $i++) {
    if (isPerfectNumber($i))
        echo "$i<br/>";
}
?>