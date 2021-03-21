<?php

use Hypatia\Angle\Deg\Converter;

test('Call to_gon as constant should success', function () {
    $this->assertTrue(is_callable(Converter\to_gon));
});

test('Convert deg to float gon should success', function ($deg, $gon) {
    expect(Converter\to_gon($deg))->toBe($gon);
})->with([
    [180,   200.0],
    [0,     0.0],
    [360,   400.0],
    [90,    100.0],
    [270,   300.0],
    [-90,   -100.0],
]);
