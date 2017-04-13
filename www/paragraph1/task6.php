<?php
/*
 * Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.
 */
function contains($number)
{
    $containsNumber = 2037;
    while ($containsNumber != 0) {
        $temp = $number;
        $flag = false;
        while ($temp != 0) {

            if ($temp % 10 == $containsNumber % 10) {
                $flag = true;
                break;
            }
            $temp = (int)($temp / 10);

        }
        if (!$flag)
            return false;
        $containsNumber = (int)($containsNumber / 10);
    }
    return true;

}

for ($i = 1000; $i < 10000; $i++) {
    if (contains($i)) {

        echo "$i<br/>";
    }
}