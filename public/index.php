<?php

require_once '../src/Wcs/Hello.php';
require_once  '../vendor/autoload.php';

$hello = new \HelloWorld\SayHello();
echo $hello->world();
