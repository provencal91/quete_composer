<?php


require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello as HelloWorld;

$hello = new Hello();
$helloWorld = new HelloWorld();

echo $hello->talk();
echo $helloWorld::world();
