# Is Thirteen
An PHP package to check if a number is equal to 13. Ispirate by jezen/is-thirteen library.

### Installation
````
composer require fatkulnurk/is-thirteen
````

### Usage
In use, we provide several options. first option using objects from class Is and the second option using the is () function which can be called globally.

````
<?php
use Fatkulnurk\IsThirteen\Is;

// now with elegant syntax.
echo (new Is(13))->thirteen(); //true
echo (new Is(12.8))->roughly()->thirteen(); // true
echo (new Is(6))->within(10)->of()->thirteen(); // true
echo (new Is(2007))->yearOfBirth(); // true
echo "Math";
echo (new Is(4))->plus(5)->thirteen(); // false
echo (new Is(12))->plus(1)->thirteen();  // true
echo (new Is(4))->minus(12)->thirteen(); // false
echo (new Is(14))->minus(1)->thirteen(); // true
echo (new Is(1))->times(8)->thirteen(); // false
echo (new Is(26))->divideby(2)->thirteen(); // true
````


### Example

is-thirteen with (new) :
````
<?php
include "vendor/autoload.php";

use Fatkulnurk\IsThirteen\Is;

if((new Is(13))->thirteen()) {
    echo "is thirteen";
}
````

is-thirteen with helper function :
````
<?php
include "vendor/autoload.php";

use Fatkulnurk\IsThirteen\Is;

if(is(13))->thirteen()) {
    echo "is thirteen";
}
````

---
Created by fatkulnurk@gmail.com