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