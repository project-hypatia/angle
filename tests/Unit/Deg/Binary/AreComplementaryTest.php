<?php

use Hypatia\Angle\Deg\Binary;


test('Call are_complementary with good values should return true', function($a, $b){
    expect(Binary\are_complementary($a, $b))->toBeTrue();
})->with([
    [45, 45],
    [-45, -45],
    [-20, -70],
    [0, 90],
    [0, -90],
]);

test('Call are_complementary with bad values should return false', function($a, $b){
    expect(Binary\are_complementary($a, $b))->toBeFalse();
})->with([
    [45, 46],
    [-45, 45],
    [-20, -71],
    [10, 90],
    [10, -90],
]);

test('Function should be curried', function(){
    $comp = Binary\are_complementary(40);
    $this->assertTrue(is_callable($comp));
    $this->assertTrue($comp(50));
});

test('Are complementary as named constant', function(){
    $this->assertTrue(is_callable(Binary\are_complementary));
});
