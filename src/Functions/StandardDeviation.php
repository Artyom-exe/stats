<?php

namespace Artyom\Stats\Functions;

class StandardDeviation
{
    public static function calculate_standardDeviation(array $numbers): float
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

        $result = sqrt($sumOfSquares / count($numbers));
        return round($result, 2);
    }
}
