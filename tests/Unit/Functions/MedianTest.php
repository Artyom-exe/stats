<?php

use Artyom\Stats\Functions\Median;

test("Calcul la medianne d'une liste", function () {
    $list = [0, 2, 4, 6, 8, 10];

    $result = Median::calculateMedian($list);

    expect($result)->toBe(5.0);
});
