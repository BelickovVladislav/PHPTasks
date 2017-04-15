<?php
/*
 * Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой делителей.
 */
function getSumDivisions($number)
{
    $sum = 0;
    for ($i = 1; $i < (int)($number / 2) + 1; $i++) {
        if ($number % $i == 0)
            $sum += $i;
    }
    return $sum;
}

$max = 100;
for ($i = 100; $i < 20000; $i += 10) {
    if (getSumDivisions($max) < getSumDivisions($i))
        $max = $i;
}
echo $max;