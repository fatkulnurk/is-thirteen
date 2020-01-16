<?php
use Fatkulnurk\IsThirteen\Is;

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