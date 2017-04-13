<?php
/*
 * Получить  все  четырехзначные  числа,  сумма  цифр  которых  равна заданному числу  n.
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

$n = 30;
for ($i = 1000; $i < 10000; $i++) {
    if ($n == getSum($i))
        echo "$i<br/>";
}
?>