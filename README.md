# Angle

TODO

```php
var_dump(Dms\to_dms(48.825214));
var_dump(Dms\to_dms(-25.7));

var_dump(Dms\to_string(Dms\to_dms(48.825214)));
var_dump(Dms\to_latitude(Dms\to_string(Dms\to_dms(-25.7))));

$dms = Dms\to_dms(42.67);

echo Dms\to_longitude($dms);
echo PHP_EOL;
var_dump($dms);

$d1 = new Deg(30);
$d2 = new Deg(60);
$d3 = new Deg(123.45);

echo $d1->get();
echo PHP_EOL;
echo $d2->get();
echo PHP_EOL;
echo $d3->get();
echo PHP_EOL;
echo $d3;
echo PHP_EOL;


/*
var_dump(Dms\to_dms(90));
var_dump(Dms\to_dms(180));
var_dump(Dms\to_dms(59.9999999));
var_dump(Dms\to_dms(59.9999999999999999));
var_dump(Dms\to_dms(60));
*/
```