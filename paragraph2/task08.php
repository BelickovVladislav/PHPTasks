<?php
/*
 * В массиве А(N) поменять местами последний отрицательный элемент с максимальным элементом.
 */
function swap(array &$array, $indexFirst, $indexSecond)
{
    $array[$indexFirst] += $array[$indexSecond];
    $array[$indexSecond] = $array[$indexFirst] - $array[$indexSecond];
    $array[$indexFirst] -= $array[$indexSecond];
}

$array = array(4, 92, 4, 8, 23, 13, 81, -4, 31, 292, -15, 54, 91);
$indexNegative = count($array) - 1;
for ($i = count($array) - 1; $i >= 0 && $array[$indexNegative] >= 0; $i--)
    $indexNegative = $i;
$indexMax = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $array[$indexMax])
        $indexMax = $i;
}
swap($array, $indexMax, $indexNegative);
echo join(" ", $array);
?>