<?php
/*
 * Разделить заданный массив А(N) на два массива:
 *       а) массив положительных и отрицательных элементов;
 *       б) массив четных и нечетных элементов.
 */
$array = array(4, 92, 4, 8, 23, 13, 81, -15, 31, 292, -4, 54, 91);
$negative = array();
$positive = array();
$even = array();
$odd = array();
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > 0) {
        $positive[] = $array[$i];
    } elseif ($array[$i] < 0) {
        $negative[] = $array[$i];
    }
    if ($array[$i] % 2 == 0) {
        $even[] = $array[$i];
    } else {
        $odd[] = $array[$i];
    }
}
echo "Array: ".join(" ",$array)."<br>";
echo "Negative: ".join(" ",$negative)."<br>";
echo "Positive: ".join(" ",$positive)."<br>";
echo "Even: ".join(" ",$even)."<br>";
echo "Odd: ".join(" ",$odd)."<br>";
?>