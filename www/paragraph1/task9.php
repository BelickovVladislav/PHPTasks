<?php
/*
 * Дано  натуральное  число  N.  Определить,  является  ли  оно  автоморфным.
 * Автоморфное число  равно последним разрядам квадрата этого числа.
 * Например,  5 и 25,  6 и 36,  25 и 625.
 */
function getBitNumber($number)
{
    $bit = 1;
    while ($number != 0) {
        $bit *= 10;
        $number = (int)($number / 10);
    }
    return $bit;
}

function isAutomorphicNumber($number)
{
    return ($number * $number) % getBitNumber($number) == $number;
}

$number = 10;
echo "Число $number " . (isAutomorphicNumber($number) ? "" : "не ") . "является автоморфным.";
?>