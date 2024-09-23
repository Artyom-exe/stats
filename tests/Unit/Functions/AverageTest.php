<?php

use Artyom\Stats\Functions\Average;

test("Calcul la moyenne d'une liste", function () {
    $list = [0, 2, 4, 6, 8, 10];

    $result = Average::calculate($list);

    expect($result)->toBe(5.0);
});

test('lève une exception pour des valeurs non numériques', function () {
    $list = [1, "a", 3, 4.5, -6];

    Average::calculate($list);
})->throws(InvalidArgumentException::class, 'Tous les éléments doivent être numériques.');


test('lève une exception pour un tableau vide', function () {
    $list = [];

    Average::calculate($list);
})->throws(InvalidArgumentException::class, 'Le tableau doit contenir au moins un élément.');
