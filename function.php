<?php
function sumArray(array $array): int|string
{
    if (count($array) == 1 || empty($array) || count($array) == '') {
        return "Not enough elements in the array";
    }

    $count = 0;

    for ($i = 0; $i < count($array); $i++) {
        $count += $array[$i];
    }

    return "The result is" . "<span style='color: blue'>" . $count - max($array) - min($array) . "</span>";
}

