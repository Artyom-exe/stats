<?php

namespace Artyom\Stats\Functions;

use InvalidArgumentException;

class Average
{
    public static function calculate(array $numbers): float
    {
        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                throw new InvalidArgumentException("Tous les éléments doivent être numériques.");
            }
        }

        $sum = array_sum($numbers);
        $count = count($numbers);

        if ($count === 0) {
            throw new InvalidArgumentException("Le tableau doit contenir au moins un élément.");
        }

        return $sum / $count;
    }
}
