<?php
/*
 * По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.
 */
function reverse($number)
{
    $m = 0;
    while ($number != 0) {
        $m *= 10;
        $m += $number % 10;
        $number = (int)($number / 10);
    }
    return $m;
}

echo reverse(108);
?>