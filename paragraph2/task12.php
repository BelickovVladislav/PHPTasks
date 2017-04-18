<?php
/*
 * В массиве А(N) найти наибольший из всех отрицательных элементов и наименьший из всех положительных.
 */
$array = array(4, 92, 4, 8, 23, 13, 81, -4, 31, 292, -15, 54, 91);
$indexPositive = 0;
$indexNegative = 0;
for ($i = 0; $i < count($array); $i++)
    if ($array[$i] < 0) {
        $indexNegative = $i;
        break;
    }
for ($i = 0; $i < count($array); $i++)
    if ($array[$i] > 0) {
        $indexPositive = $i;
        break;
    }
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > 0) {
        if ($array[$i] < $array[$indexPositive])
            $indexPositive = $i;
    } elseif ($array[$i] < 0) {
        if ($array[$i] > $array[$indexNegative])
            $indexNegative = $i;
    }
}
echo "Min Positive Number: " . $array[$indexPositive] . "<br> Max Negative Number: " . $array[$indexNegative];
?>