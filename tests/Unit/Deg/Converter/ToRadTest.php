<?php

use Hypatia\Angle\Deg\Converter;

test('Call to_rad as constant should success', function(){
    $this->assertTrue(is_callable(Converter\to_rad));
});


test('Convert deg to float rad should success', function($deg, $rad){    
    expect(Converter\to_rad($deg))->toBe($rad);
})->with([
    [180,   pi()],
    [0,     0.0],
    [360,   2 * pi()],
    [90,    pi() / 2],
    [270,   3 * pi() / 2],
    [-90,   -pi() / 2]
]);

