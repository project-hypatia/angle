<?php

use Hypatia\Angle\Deg\Converter;


test('Call to_dms as constant should success', function(){
    $this->assertTrue(is_callable(Converter\to_dms));
});



test('Convert deg to dms should success')->skip('to do');