<?php
/*
 * Определить, является ли число  2^n + m  симметричным,
 * т. е. запись  числа содержит четное количество цифр и совпадают его левая и правая  половинки.
 */
function getCountBitNumber($number)
{
    $count = 0;
    while ($number != 0) {
        $count++;
        $number = (int)($number / 10);
    }
    return $count;
}

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

function isSymmetric($number)
{
    $countBit = getCountBitNumber($number);
    if ($countBit % 2 == 0) {
        $countBit = (int)($countBit / 2);
        $count = 0;
        $number2 = 0;
        while ($count < $countBit) {
            $number2 *= 10;
            $number2 += $number % 10;
            $number = (int)($number / 10);
            $count++;
        }
        while (getCountBitNumber($number) > getCountBitNumber($number2))
            if ($number % 10 == 0)
                $number = (int)($number / 10);
            else
                break;
        return $number == reverse($number2);
    }
    return false;
}

$n = 12;
$m = -56;
$number = 1;
for ($i = 0; $i < $n; $i++) {
    $number *= 2;
}
$number += $m;
echo "Число $number " . (isSymmetric($number) ? "" : "не ") . "является симметричным.";

?>