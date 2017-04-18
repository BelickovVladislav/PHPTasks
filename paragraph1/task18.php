<?php
/*
 *Два  натуральных  числа  называют  дружественными,  если  каждое  из них равно сумме всех делителей другого.
 *Найти все пары дружественных чисел, лежащих в диапазоне от N до M.
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

function isFriendlyNumbers($num1, $num2)
{
    return ($num1 == getSumDivisions($num2)) && ($num2 == getSumDivisions($num1) && $num1 < $num2);
}

function friendlyNumber($number)
{
    return getSumDivisions($number);
}

$n = 6;
$m = 5000;
for ($i = $n; $i <= $m; $i++) {
    $friendly = friendlyNumber($i);
    if (isFriendlyNumbers($i, $friendly))
        echo "$i $friendly<br>";
}
