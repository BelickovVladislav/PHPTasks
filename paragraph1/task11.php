<?php
/*
 * Напечатать   те   элементы   последовательности   натуральных   чисел n0 ,n1,...,nm ,
 *  которые делятся на сумму своих цифр.
 */
function getSum($number)
{
    $sum = 0;
    while ($number != 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);

    }
    return $sum;
}

$n = 300;
for ($i = 1; $i < $n; $i++)
    if ($i % getSum($i) == 0)
        echo "$i<br/>";
?>