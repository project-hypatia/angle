<?php

use Hypatia\Angle\Deg\Unary;

test('Call is_right as constant should success', function(){
    $this->assertTrue(is_callable(Unary\is_right));
});