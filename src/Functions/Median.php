<?php

namespace Artyom\Stats\Functions;

class Median
{
    public static function calculateMedian(array $numbers): float
    {
        sort($numbers);

        $count = count($numbers);

        if ($count % 2 == 1) {

            return $numbers[floor($count / 2)];
        } else {

            $lowMid = $numbers[$count / 2 - 1];
            $highMid = $numbers[$count / 2];
            return ($lowMid + $highMid) / 2;
        }
    }
}
