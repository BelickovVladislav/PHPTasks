<?php
/*
 * В массиве А(N) найти максимальный и минимальный элементы и  переставить их местами.
 */
$array = array(4, 92, 4, 8, 23, 13, 81, -4, 31, 292, -15, 54, 91);
$indexMax = 0;
$indexMin = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $array[$indexMax])
        $indexMax = $i;
    if ($array[$i] < $array[$indexMin])
        $indexMin = $i;
}
$array[$indexMax] += $array[$indexMin];
$array[$indexMin] = $array[$indexMax] - $array[$indexMin];
$array[$indexMax] -= $array[$indexMin];
echo join(" ", $array);