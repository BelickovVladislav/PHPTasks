<?php
/*
 * Выяснить, образуют ли цифры данного натурального числа N возрастающую последовательность.
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

echo "Последовательность " . (isIncration(1234) ? "" : "не ") . " возрастающая.";

?>