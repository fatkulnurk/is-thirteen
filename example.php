<?php
include "vendor/autoload.php";

use Fatkulnurk\IsThirteen\Is;
echo "Create with new : <br>";
var_dump((new Is(13))->thirteen());
echo "\r\n";
var_dump((new Is(12.8))->roughly()->thirteen());
echo "\r\n";
var_dump((new Is(6))->within(10)->of()->thirteen());
echo "\r\n";
var_dump((new Is(2007))->yearOfBirth());
echo "\r\n";
echo "Math";
echo "\r\n";
var_dump((new Is(4))->plus(5)->thirteen());
echo "\r\n";
var_dump((new Is(12))->plus(1)->thirteen());
echo "\r\n";
var_dump((new Is(4))->minus(12)->thirteen());
echo "\r\n";
var_dump((new Is(14))->minus(1)->thirteen());
echo "\r\n";
var_dump((new Is(1))->times(8)->thirteen());
echo "\r\n";
var_dump((new Is(26))->divideby(2)->thirteen());
echo "\r\n";
echo "Create from is Function: <br>";
var_dump((is(13))->thirteen());
echo "\r\n";
var_dump((is(12.8))->roughly()->thirteen());
echo "\r\n";
var_dump((is(6))->within(10)->of()->thirteen());
echo "\r\n";
var_dump((is(2007))->yearOfBirth());
echo "\r\n";
echo "Math";
echo "\r\n";
var_dump((is(4))->plus(5)->thirteen());
echo "\r\n";
var_dump((is(12))->plus(1)->thirteen());
echo "\r\n";
var_dump((is(4))->minus(12)->thirteen());
echo "\r\n";
var_dump((is(14))->minus(1)->thirteen());
echo "\r\n";
var_dump((is(1))->times(8)->thirteen());
echo "\r\n";
var_dump((is(26))->divideby(2)->thirteen());
echo "\r\n";