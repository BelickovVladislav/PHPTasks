<?php
/*
 * Определить, является ли заданное целое число N простым.
 */
function isSimple($number)
{
    for ($i = 2; $i <= (int)($number / 2) + 1; $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}

$number = 12;
echo "Число $number " . (isSimple($number) ? "" : "не ") . "является простым числом.";
?>