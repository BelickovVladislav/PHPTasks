<?php
/*
 * В  массиве  А(N)  найти  максимальный  среди  четных  элементов  и  минимальный среди нечетных.
 */
$array = array(4, 92, 4, 8, 23, 13, 81, -4, 31, 292, -15, 54, 91);
$indexMax = 0;
$indexMin = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {
        if ($array[$i] > $array[$indexMax])
            $indexMax = $i;
    } else {
        if ($array[$i] < $array[$indexMin])
            $indexMin = $i;
    }
}
echo "Max: " . $array[$indexMax] . "<br>Min: " . $array[$indexMin];