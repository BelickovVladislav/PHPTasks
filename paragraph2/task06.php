<?php
/*
 * В  массиве  А(N)  максимальные  элементы,  являющиеся  четными  числами, заменить значениями их индексов.
 */
$array = array(4, 92, 4, 8, 23, 13, 81, -4, 31, 292, -15, 54, 91);
$max = $array[0];
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $max && $array[$i] % 2 == 0)
        $max = $array[$i];
}
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $max)
        $array[$i] = $i;
}
echo join(" ", $array);