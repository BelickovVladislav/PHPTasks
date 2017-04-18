<?php
/*
 * Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой простых делителей.
 */
function isSimple($number)
{
    for ($i = 2; $i < (int)($number / 2) + 1; $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}

function getSumSimpleDivisions($number)
{
    $sum = 0;
    for ($i = 1; $i < (int)($number / 2) + 1; $i++) {
        if ($number % $i == 0 && isSimple($i))
            $sum += $i;
    }
    return $sum;
}

$max = 100;
for ($i = 100; $i < 20000; $i += 10) {
    if (getSumSimpleDivisions($max) < getSumSimpleDivisions($i))
        $max = $i;
}
echo $max;