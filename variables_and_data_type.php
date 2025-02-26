<?php

// variables in php area containers for storing data .
// they al start with a $ symbol 
// php is loosely typed, meaning variables can hold different types of data 
// type is determine the value assigned

// 1. strings - text enclose in quote 
$name = "John doe ";// double quote allow variables interploation
$name ='John does'; // singles qoutes treat everything a lateral text

//  2.  integer = whole number
$age=25; // number with decimal places

// 3. floats = numbers with decimal point
$height= 1.85; // uses dot demal points

// 4. boolean - true and false 
$is_student = true;

// null - represent a variable with no value 
$empty_variable = null;

// array-orderd collection of values
$fruits = ["apple", "banana" , "orange"];

// check  the variable  types 
// var_dump () - output type  and value 
// gettype () -output just the type
echo var_dump ($empty_variable) . "<br>";
echo gettype($empty_variable) . "<br>";
echo gettype($name) ."<br>";
echo gettype($age) . "<br>";
echo gettype($height) . "<br>";
echo gettype($is_student) . "<br>";
echo gettype($fruits) . "<br>";

// type casting - converting  between two types
$string_number = "42"; 
$actual_number = (int)$string_number;

echo gettype($string_number) . "<br>";
echo gettype($string_number) . "<br>";

// constants - values that cannot be changed
define("MAX_USERS", 100); // using define() function
const MIN_AGE = 18; // using const keyword (PHP 5.3)

echo MAX_USERS . "<br>";
echo MIN_AGE . "<br>";

// variable in stirings interpolation in strings
$name = "Mrodhiambo";
echo "my name is $name". "<br>"; //works withe double quotes
echo 'my name is' . $name; // strings concatenation with the dot operator

// Next -> php operators (operators.php)

?>