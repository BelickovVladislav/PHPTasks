<?php
/*
 * Парными  простыми числами называются два простых числа, разность  которых равна двум.
 * Например,  3 и 5; 11 и 13. Найти 10  парных  простых чисел.
 */
function isSimple($number)
{
    for ($i = 2; $i <= (int)($number / 2) + 1; $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}

$count = 0;
for ($i = 1; $count < 10; $i++)
    if (isSimple($i) && isSimple($i + 2)) {
        echo $i . " " . ($i + 2) . "<br/>";
        $count++;
    }
?>