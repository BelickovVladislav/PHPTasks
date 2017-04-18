<?php
/*
 * Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.
 */
function getCountNumber($number)
{
    $count = 0;
    while ($number != 0) {
        if ($number % 10 < 5)
            $count++;
        $number = (int)($number / 10);
    }
    return $count;
}

echo getCountNumber(13781);
?>