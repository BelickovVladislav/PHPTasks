<?php
/*
 * В  массиве  А(N)  найти  номер  элемента,  сумма  которого  со  следующим за ним элементом максимальна,
 * и номер элемента, сумма которого с предыдущим элементом минимальна.
 */

$array = array(4, 92, 4, 8, 23, 13, 81, -4, 31, 292, -15, 54, 91);
$indexMin = 1;
$indexMax = 0;
for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$indexMax] + $array[$indexMax + 1] < $array[$i] + $array[$i + 1])
        $indexMax = $i;
    if ($array[$indexMin] + $array[$indexMin - 1] > $array[$i + 1] + $array[$i])
        $indexMin = $i + 1;
}
echo "Min: $indexMin<br> Max: $indexMax";