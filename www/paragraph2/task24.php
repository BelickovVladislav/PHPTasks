<?php
/*
 * Из  всех  участков массива А(N), сплошь состоящих из нулей,
 *  выбрать самый длинный и отметить индексы его начала и конца.
 */
function maxLength(array $array, &$startIndex)
{
    $countMax = 0;
    for ($i = 0; $i < count($array); $i++) {
        $count = 0;
        while ($array[$i] == $array[($i + $count) % count($array)] && $array[$i] == 0 && $i + $count < count($array)) $count++;
        if ($count > $countMax) {
            $countMax = $count;
            $startIndex = $i;
        }
    }
    return $countMax;
}

$array = array(0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1);
$startIndex = 0;
$length = maxLength($array, $startIndex);
echo $startIndex . " " . ($startIndex + $length);
?>