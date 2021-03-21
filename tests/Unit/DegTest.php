<?php

use Hypatia\Angle\Deg;

test('Instanciate Deg(30) should success', function () {
    expect(new Deg(30))->toBeInstanceOf(Deg::class);
});

test('Deg(30) should get float value 30.0', function () {
    expect((new Deg(30))->get())->toBe(30.0);
});
