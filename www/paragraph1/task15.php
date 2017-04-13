<?php
/*
 * Определить количество различных делителей целого числа N.
 */
function getCountDiv($number)
{
    $count = 0;
    for ($i = 1; $i < (int)($number / 2) + 1; $i++)
        if ($number % $i == 0)
            $count++;
    return $count + 1;
}

$number = 10;
echo "Количество делителей числа $number равно " . getCountDiv($number);