<?php
/*
 * В  массиве  А(N)  выбрать  все  элементы,  встречающиеся  только  один раз.
 */
function getCountElement($array, $element)
{
    $count = 0;
    for ($i = 0; $i < count($array); $i++)
        if ($array[$i] == $element)
            $count++;
    return $count;
}

$uniq = array();
$array = array(4, 92, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91, 5, 5, 5, 5, 5, 5, 5);
for ($i = 0; $i < count($array); $i++) {
    if (getCountElement($array, $array[$i]) == 1)
        $uniq[] = $array[$i];
}
echo join(" ", $uniq);
?>
