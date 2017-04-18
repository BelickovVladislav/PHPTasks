<?php
function NOD($n, $m)
{
    if ($m > $n) {
        $m += $n;
        $n = $m - $n;
        $m -= $n;
    }
    $nod = 1;
    for ($i = 1; $i <= $n; $i++)
        if ($n % $i == 0 && $m % $i == 0)
            $nod = $i;
    return $nod;

}

function NOK($n, $m)
{
    return (int)$n * $m / NOD($n, $m);
}

echo NOK(15, 25);
?>

