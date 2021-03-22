<?php

use Hypatia\Angle\Deg\Unary;

test('Call is_straight as constant should success', function(){
    $this->assertTrue(is_callable(Unary\is_straight));
});

test('Call with value (-)180 should return true', function(){
    expect(Unary\is_straight(180))->toBeTrue();
    expect(Unary\is_straight(-180))->toBeTrue();
});

test('Call with value != 180 should return false', function(){
    expect(Unary\is_straight(0))->toBeFalse();
    expect(Unary\is_straight(90))->toBeFalse();
    expect(Unary\is_straight(42))->toBeFalse();
    expect(Unary\is_straight(-42))->toBeFalse();
});