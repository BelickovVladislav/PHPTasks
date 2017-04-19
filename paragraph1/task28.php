<?php
/*
 * Преобразовать  числа  заданной  последовательности  натуральных   чисел  n0 ,n1,...,nm так,
 * чтобы цифры каждого числа образовывали максимально возможные числа.
 */
function sortNumber($number, $sizeNumber, $other = -1)
{
    if ($other == -1)
        $other = 0;
    elseif ($number == 0 && (int)$sizeNumber == (int)getCountNumber($other))
        return $other;
    elseif ($number == 0)
        return sortNumber($number, $sizeNumber, (int)($other * 10));

    $temp = $number;
    $num = -10;
    while ($number != 0) {
        if ($number % 10 > $num)
            $num = $number % 10;
        $number = (int)($number / 10);
    }
    $number = $temp;
    $temp = 0;
    $flag = true;
    while ($number != 0) {
        if ($number % 10 == $num && $flag) {
            $flag = false;
        } else {
            $temp *= 10;
            $temp += $number % 10;
        }
        $number = (int)($number / 10);
    }
    $other *= 10;
    $other += $num;
    return sortNumber($temp, $sizeNumber, $other);
}

function getCountNumber($number)
{
    $count = 0;
    while ($number != 0) {
        $count++;
        $number = (int)($number / 10);
    }
    return $count;
}

for ($i = 1000; $i < 10000; $i += 24)
    echo sortNumber($i, getCountNumber($i)) . "<br>";