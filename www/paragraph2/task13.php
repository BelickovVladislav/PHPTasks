<?php
/*
 * В  массиве  А(N)  найти  два  наименьших  элемента  и  два  наибольших элемента.
 */
$array = array(4, 92, 4, 8, 23, 13, 81, -15, 31, 292, -4, 54, 91);
$indexFirstMin = 0;
$indexSecondMin = 0;
$indexFirstMax = 0;
$indexSecondMax = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $array[$indexFirstMax]) {
        $indexSecondMax = $indexFirstMax;
        $indexFirstMax = $i;
    } elseif ($array[$i] > $array[$indexSecondMax]) {
        $indexSecondMax = $i;
    }
    if ($array[$i] < $array[$indexFirstMin]) {
        $indexSecondMin = $indexFirstMin;
        $indexFirstMin = $i;
    } elseif ($array[$i] < $array[$indexSecondMin]) {
        $indexSecondMin = $i;
    }
}
echo "Min numbers: " . $array[$indexFirstMin] . " " . $array[$indexSecondMin] .
    "<br>Max numbers: " . $array[$indexFirstMax] . " " . $array[$indexSecondMax];
?>