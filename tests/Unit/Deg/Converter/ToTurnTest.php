<?php

use Hypatia\Angle\Deg\Converter;

test('Call to_turn as constant should success', function () {
    $this->assertTrue(is_callable(Converter\to_turn));
});

test('Convert deg to turn should success', function ($deg, $turn) {
    expect(Converter\to_turn($deg))->toBe($turn);
})->with([
    [180,   0.5],
    [0,     0.0],
    [360,   1.0],
    [90,    0.25],
    [270,   0.75],
    [-90,   -0.25]
]);
