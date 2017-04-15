<?php
/*
 * Среди      заданной      последовательности      натуральных      чисел    n0 ,n1,...,nm
 * найти  сумму  и  количество  тех  чисел,  которые  равны  сумме  факториалов своих цифр.
 */
function factorial($n)
{
    $fact = 1;
    for ($i = 1; $i <= $n; $i++)
        $fact *= $i;
    return $fact;
}

function sumFactorial($n)
{
    $sum = 0;
    while ($n != 0) {
        $sum += factorial($n % 10);
        $n = (int)($n / 10);
    }
    return $sum;
}

function isEqual($n)
{
    return $n == sumFactorial($n);
}

$sum = 0;
$count = 0;
for ($i = 100; $i < 20000; $i++) {
    if (isEqual($i)) {
        $sum += $i;
        $count++;
    }
}
echo "Sum: $sum<br>Count:$count";
?>