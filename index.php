<?php

$_name = 'Friosn'; //This is a variable which value can be reasign (var or let in JS)

echo "Hello {$_name} !!";

$_name = 'FRIOSN';
echo 'Hello ' . $_name . ', I said!!';

//Constants are like this; is like a function where you put the name of the constant and the value
//define('name', 'value');
define('name', 'Fraaan');
echo name . '<br/>';

echo defined('name') . '<br/>'; //this will return either if is true (1) or false (nothing)

//Other way to define CONSTANTS is with const (same as JS)
//the diference is related with the functionality and such, we'll enter on that later on
//this is more for completly STATIC data
const nickName = 'Franz';

echo nickName . '<br/>';

//we can also do the following
$paid = 'PAID';
define('STATUS_' . $paid, "  It's paid duh!!") . '<br/>';

echo STATUS_PAID . '<br/>';

echo 'PHP VERSION ➡️' . PHP_VERSION . '<br/>';
echo 'This line is the:  ' . __LINE__ . '<br/>';


//Variable variable
$fuck = 'Never';

$$fuck='Always';

echo $fuck . $$fuck . '<br/>';

//TODO ------------------------------ DATA-TYPES------------------
/* 
4 Scalar Types----
    - boolean ->  true-false
    - int  ->      numeric without decimal
    - float  ->    numeric with decimal
    - string  ->  "BLABLA"

4 Compound Types ----
    - array  -> To print it you need to write print_r($theVar), then you get the full array printed showing positions and values
                with echo you would just get the word Array
    - object  not yet
    - callable  not yet
    - iterable  not yet

2 Special types ----
    - resource  not yet
    - null  -> just null


With echo gettype() you will get the type of the data
Other way of getting the type AND also the data is with --> var_dump()
*/


//FUNCTIONS
 //same as JS; we can also specify the type of data of the variables or parameters in a similar way than typescript
function sum($a, $b) {
    return $a + $b;
}

function sub(int $a, int $b) {
    return $a - $b;
}

echo 'SUM:  ' . sum('5', 4) . '<br/>';
echo 'SUBSTRACT:   ' . sub(2, 2) . '<br/>';

//if we specify a type of data but we change it, the program will try to adapt it (redondea, pasa a numero etc.), but we can change it after that specifiyin other thing

//but we can restrict the data types with  -> declare(strict_types=1)

//CONDITIONAL -> work the same way

/* if (condition) {
    # code...
    echo whatever
} else {
    # code...
    echo whatever error
} */
echo 'PHP_INT_MAX :   ' . PHP_INT_MAX . '<br/>';
echo 'PHP_INT_MIN :   ' . PHP_INT_MIN;

//We can also specify the type of data after declaring a variable, and it will always try to convert it to the data type










//  If the entire code is php, we don't need to close the tag ? > (together without space in the middle)

