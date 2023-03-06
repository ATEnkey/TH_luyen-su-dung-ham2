<?php
function findsecondMax($arr)
{
    $max = $arr[0];
    $secondMax = $arr[1];
    foreach ($arr as $num) {
        if ($num > $max) {
            $secondMax = $max;
            $max = $num;
        } else if ($num > $secondMax && $num != $max) {
            $secondMax = $num;
        }
    }
    return $secondMax;
}
$arr = [2, 4, 6, 5, 8, 10];
echo findsecondMax($arr);
