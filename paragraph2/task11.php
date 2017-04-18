<?php
/*
 * В массиве А(N) найти первый отрицательный элемент, предшествующий максимальному элементу,
 * и последний положительный элемент,  стоящий за минимальным элементом.
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
$firstNegative = 0;
$lastPositive = 0;
for ($i = 0; $i < $indexMax; $i++)
    if ($array[$i] < 0) {
        $firstNegative = $array[$i];
        break;
    }
for ($i = $indexMin; $i < count($array); $i++)
    if ($array[$i] > 0)
        $lastPositive = $array[$i];
echo "First Negative Number: $firstNegative<br>Last Positive Number: $lastPositive";
?>