<?php

use Hypatia\Angle\Deg;


test('Call to_turn as constant should success', function(){
    $this->assertTrue(is_callable(Deg\to_turn));
});
test('Call to_gon as constant should success', function(){
    $this->assertTrue(is_callable(Deg\to_gon));
});
test('Call to_rad as constant should success', function(){
    $this->assertTrue(is_callable(Deg\to_rad));
});
test('Call to_dms as constant should success', function(){
    $this->assertTrue(is_callable(Deg\to_dms));
});

test('Call is_right as constant should success')->skip('to do');
test('Call is_straight as constant should success')->skip('to do');
test('Call is_perigon as constant should success')->skip('to do');

test('Call are_complementary as constant should success')->skip('to do');
test('Call are_suplementary as constant should success')->skip('to do');

test('Convert deg to float gon should success', function($deg, $gon) {
    expect(Deg\to_gon($deg))->toBe($gon);
})->with([
    [180,   200.0],
    [0,     0.0],
    [360,   400.0],
    [90,    100.0],
    [270,   300.0],
    [-90,   -100.0],
    ]);

test('Convert deg to float rad should success', function($deg, $rad){    
    expect(Deg\to_rad($deg))->toBe($rad);
})->with([
    [180,   pi()],
    [0,     0.0],
    [360,   2 * pi()],
    [90,    pi() / 2],
    [270,   3 * pi() / 2],
    [-90,   -pi() / 2]
]);

test('Convert deg to turn should success', function($deg, $turn){
    expect(Deg\to_turn($deg))->toBe($turn);
})->with([
    [180,   0.5],
    [0,     0.0],
    [360,   1.0],
    [90,    0.25],
    [270,   0.75],
    [-90,   -0.25]
]);

test('Convert deg to dms should success')->skip('to do');
test('Tests if deg is straight should success')->skip('to do');
test('Tests if deg is perigon should success')->skip('to do');