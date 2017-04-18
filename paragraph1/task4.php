<?php
/*
 * Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.
 */
function isIncration($number)
{
    $prev = 10;
    while ($number != 0) {
        if ($prev <= $number % 10) {
            return false;
        }
        $prev = $number % 10;
        $number = (int)($number / 10);
    }
    return true;

}

function isDecration($number)
{
    $prev = -1;
    while ($number != 0) {
        if ($prev >= $number % 10) {
            return false;
        }
        $prev = $number % 10;
        $number = (int)($number / 10);
    }
    return true;
}

for ($i = 1000; $i < 10000; $i++) {
    if ($i % 2 == 0) {
        if (isDecration($i) || isIncration($i)) {
            echo "$i<br/>";
        }
    }
}
?>