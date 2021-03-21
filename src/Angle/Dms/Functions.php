<?php

namespace Hypatia\Angle\Dms;

use Hypatia\Angle\Dms as CDms;





function to_string(CDms $dms, int $precision = 0): string
{
    $s = round($dms->s, $precision);



    list($s, $m) = _safe_round($s, $dms->m);
    list($m, $d) = _safe_round($m, $dms->d);


    return sprintf(
        '%d°%d′%.'.$precision.'f″',
        $d,
        $m,
        $s
    );
}

function to_latitude(string $dms): string
{
    return to_geo($dms, 'lat');
}

function to_longitude(string $dms): string
{
    return to_geo($dms, 'lng');
}


function letter_geo(string $dms, string $type): string
{
    return [
        'lat' => ['S', 'N'],
        'lng' => ['W', 'E']
    ][$type][(int)($dms[0] != '-')];
}

function to_geo(string $dms, string $type): string
{
    return sprintf('%s%s', ltrim($dms, '-'), letter_geo($dms, $type));
}




function compute_from_rest(float $rest): array 
{
    return (function ($i) use ($rest) {
        return [$i, ($rest - $i) * 60];
    })(floor($rest));
};

function _safe_round($n, $np1): array
{
    if ($n == 60) {
        return [0, $np1 + 1];
    }
        
    return [$n, $np1];
}
