<?php

use Hypatia\Angle\Deg\Unary;

test('Call is_right as constant should success', function(){
    $this->assertTrue(is_callable(Unary\is_right));
});

test('Call with value (-)90 should return true', function(){
    expect(Unary\is_right(90))->toBeTrue();
    expect(Unary\is_right(-90))->toBeTrue();
});

test('Call with value (-)270 should return true', function(){
    expect(Unary\is_right(270))->toBeTrue();
    expect(Unary\is_right(-270))->toBeTrue();
});

test('Call with value != (-)270 and != (-)90 should return false', function(){
    expect(Unary\is_right(0))->toBeFalse();
    expect(Unary\is_right(-20))->toBeFalse();
    expect(Unary\is_right(-180))->toBeFalse();
    expect(Unary\is_right(89))->toBeFalse();
});