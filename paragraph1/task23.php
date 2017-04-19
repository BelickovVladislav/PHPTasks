<?php
/*
 * Дано  целое  число  N.  Преобразовать  число  так, чтобы его цифры следовали в порядке возрастания.
 */
function sortNumber($number, $other = -1)
{
    if ($other == -1)
        $other = 0;
    elseif ($number == 0)
        return $other;
    $temp = $number;
    $num = 10;
    while ($number != 0) {
        if ($number % 10 < $num)
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
//    echo "$other<br>";
    return sortNumber($temp, $other);
}

echo sortNumber(1423251);