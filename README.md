# Is Thirteen
An PHP package to check if a number is equal to 13.

### Installation
````
composer require fatkulnurk/is-thirteen
````

### Usage
````
<?php
use Fatkulnurk\IsThirteen\Is;

var_dump((new Is(13))->thirteen()); //true
echo "\r\n";
var_dump((new Is(12.8))->roughly()->thirteen()); // true
echo "\r\n";
var_dump((new Is(6))->within(10)->of()->thirteen()); // true
echo "\r\n";
var_dump((new Is(2007))->yearOfBirth()); // true
echo "\r\n";
echo "Math";
echo "\r\n";
var_dump((new Is(4))->plus(5)->thirteen()); // false
echo "\r\n";
var_dump((new Is(12))->plus(1)->thirteen());  // true
echo "\r\n";
var_dump((new Is(4))->minus(12)->thirteen()); // false
echo "\r\n";
var_dump((new Is(14))->minus(1)->thirteen()); // true
echo "\r\n";
var_dump((new Is(1))->times(8)->thirteen()); // false
echo "\r\n";
var_dump((new Is(26))->divideby(2)->thirteen()); // true
echo "\r\n";
````