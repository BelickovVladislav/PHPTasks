<?php
/*
 * В  массиве  А(N)  все  четные  элементы  заменить  максимальным  элементом,  а нечетные  минимальным.
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
$min = $array[$indexMin];
$max = $array[$indexMax];
for ($i = 0; $i < count($array); $i++)
    if ($array[$i] % 2 == 0)
        $array[$i] = $max;
    else
        $array[$i] = $min;
echo join(" ", $array);
