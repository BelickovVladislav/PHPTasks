<?php
/*
 * Напечатать  натуральное  число  N :
 * а) в  двоичной  системе  счисления;
 * б) в шестнадцатеричной системе счисления.
 */
function reverse($str)
{
    $strReverse = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--)
        $strReverse .= $str[$i];
    return $strReverse;

}

function toBinary($n)
{
    $binReverse = "";
    while ($n != 0) {
        $binReverse .= $n % 2;
        $n = (int)($n / 2);
    }
    return reverse($binReverse);
}


function toHex($n)
{
    $hexReverse = "";
    while ($n != 0) {
        if ($n % 16 > 9)
            $hexReverse .= chr($n % 16 + 55);
        else
            $hexReverse .= $n % 16;
        $n = (int)($n / 16);
    }
    return reverse($hexReverse);

}

$n = 2899;
echo "Dec: $n<br>";
echo "Binary: " . toBinary($n);
echo "<br>";
echo "Hex: " . toHex($n);