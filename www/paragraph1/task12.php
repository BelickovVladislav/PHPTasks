<?php
/*
 * ����������, �������� �� �������� ����� ����� N �������.
 */
function isSimple($number)
{
    for ($i = 2; $i <= (int)($number / 2) + 1; $i++) {
        if ($number % $i == 0)
            return false;
    }
    return true;
}

$number = 12;
echo "����� $number " . (isSimple($number) ? "" : "�� ") . "�������� ������� ������.";
?>