<?php
/*
 * Из  массива  А(N)  удалить  все  элементы,  стоящие  между  первым  минимальным и последним максимальным элементами.
 */
$array = array(4, 292, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91, 5, 5, 5, 5, 5, 5, 5);
$indexMax = 0;
$indexMin = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] >= $array[$indexMax])
        $indexMax = $i;
    if ($array[$i] < $array[$indexMin])
        $indexMin = $i;
}
if ($indexMax < $indexMin) {
    $indexMax += $indexMin;
    $indexMin = $indexMax - $indexMin;
    $indexMax -= $indexMin;
}
for ($i = $indexMin + 1; $i < $indexMax; $i++)
    $array[$i] = 0;
echo join(" ", $array);