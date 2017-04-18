<?php
/*
 * Натуральное число N разложить на простые множители.
 */
function isSimple($number)
{
    for ($i = 2; $i < (int)($number / 2) + 1; $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}

function toSimpleMul($n)
{
    while ($n != 1) {
        for ($i = 2; $i <= $n; $i++)
            if ($n % $i == 0 && isSimple($i)) {
                $n /= $i;
                echo "$i<br>";
                break;
            }

    }
}

toSimpleMul(5683132);