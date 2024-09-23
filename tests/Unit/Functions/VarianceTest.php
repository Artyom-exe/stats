<?php

use Artyom\Stats\Functions\Variance;

test("Calcul la variance", function () {
    $list = [0, 2, 4, 6, 8, 10];

    $result = Variance::calculateVariance($list);

    expect($result)->toBe(11.67);
});
