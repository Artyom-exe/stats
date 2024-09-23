<?php

namespace Artyom\Stats\Functions;

class Variance
{
    public static function calculateVariance(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0.0;
        }

        $average = average::calculate($numbers);
        $sumOfSquares = 0.0;

        foreach ($numbers as $number) {
            $gap = $number - $average;
            $sumOfSquares += $gap * $gap;
        }

        $result = $sumOfSquares / count($numbers);
        return round($result, 2);
    }
}
