<?php
require_once './vendor/autoload.php';
use App\Wcs\Hello;

$me = new Hello();
echo $me->talk();