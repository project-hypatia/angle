<?php

use Hypatia\Angle\Deg\Binary;


test('Call are_suplementary with good values should return true', function($a, $b){
    expect(Binary\are_suplementary($a, $b))->toBeTrue();
})->with([
    [90, 90],
    [-90, -90],
    [-80, -100],
    [0, 180],
    [0, -180]
]);

test('Call are_suplementary with bad values should return false', function($a, $b){
    expect(Binary\are_suplementary($a, $b))->toBeFalse();
})->with([
    [90, 91],
    [-90, -89],
    [-80, -200],
    [0, 181],
    [10, -180]
]);

test('Function should be curried', function(){
    $sup = Binary\are_suplementary(90);
    $this->assertTrue(is_callable($sup));
    $this->assertTrue($sup(90));
});

test('Are suplementary as named constant', function(){
    $this->assertTrue(is_callable(Binary\are_suplementary));
});
