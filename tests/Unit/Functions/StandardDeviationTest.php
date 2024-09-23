<?php

use Artyom\Stats\Functions\StandardDeviation;

test("Calcul l'écart-type", function () {
    $list = [0, 2, 4, 6, 8, 10];

    $result = StandardDeviation::calculate_standardDeviation($list);

    expect($result)->toBe(3.42);
});
