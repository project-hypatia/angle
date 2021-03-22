<?php

use Hypatia\Angle\Deg\Unary;

test('Call is_perigon as constant should success', function(){
    $this->assertTrue(is_callable(Unary\is_perigon));
});

test('Call with value (-)360 should return true', function(){
    expect(Unary\is_perigon(360))->toBeTrue();
    expect(Unary\is_perigon(-360))->toBeTrue();
});

test('Call with value (-)720 should return true', function(){
    expect(Unary\is_perigon(720))->toBeTrue();
    expect(Unary\is_perigon(-720))->toBeTrue();
});

test('Call with value (-)56 should return false', function(){
    expect(Unary\is_perigon(56))->toBeFalse();
    expect(Unary\is_perigon(-56))->toBeFalse();
});