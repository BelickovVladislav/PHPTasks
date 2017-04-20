<?php
/*
 * Из  массива  А(N)  удалить  элементы,  стоящие  за  первым  максимальным элементом, количество цифр которых равно  k.
 */
$array = array(4, 292, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91, 5, 5, 5, 5, 5, 5, 5);
$indexMax = 0;
for($i = 0; $i < count($array); $i++)
    if($array[$i] > $array[$indexMax])
        $indexMax = $i;
$k = 5;
for($i = $indexMax+1; $i < $indexMax+1+$k && $i<count($array);$i++)
    $array[$i] = 0;
echo join(" ", $array);