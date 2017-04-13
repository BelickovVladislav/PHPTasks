<?php
/*
 * Выяснить, есть ли в записи натурального числа N две одинаковые цифры.
 */
function isRepeat($number)
{
    while ($number != 0) {
        $temp = $number;
        $count = 0;
        while ($temp != 0) {
            if ($temp % 10 == $number % 10)
                $count++;
            $temp = (int)($temp/10);
        }
        if($count >= 2)
            return true;
        $number = (int)($number / 10);
    }
    return false;
}
$n = 4813;
echo "В записи натурального числа $n ".(isRepeat($n)?"присуствуют":"отсуствуют")." две одинаковые цифры.";