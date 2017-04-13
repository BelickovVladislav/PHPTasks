<?php
/*
 * Получить все четырехзначные целые числа, в записи которых нет одинаковых цифр.
 */
function isRepeat($number)
{
    while ($number != 0) {
        $temp = $number;
        $count = 0;
        while ($temp != 0) {
            if ($temp % 10 == $number % 10)
                $count++;
            $temp = (int)($temp / 10);
        }
        if ($count >= 2)
            return true;
        $number = (int)($number / 10);
    }
    return false;
}

for ($i = 1000; $i < 10000; $i++)
    if (!isRepeat($i))
        echo "$i<br/>";
?>