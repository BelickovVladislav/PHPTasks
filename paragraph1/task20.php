<?php
/*
 * Найти целое число в диапазоне от N до M с наибольшей суммой  делителей.
 */
function getCountDiv($number)
{
    $count = 0;
    for ($i = 1; $i < (int)($number / 2) + 1; $i++)
        if ($number % $i == 0)
            $count++;
    return $count + 1;
}

$n = 15;
$m = 250;
$max = $n;
for ($i = $n; $i <= $m; $i++) {
    if (getCountDiv($i) > getCountDiv($max))
        $max = $i;
}
echo $max;