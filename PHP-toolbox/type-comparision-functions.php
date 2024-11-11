<?php

$string_numeric_value = '10';
echo gettype($string_numeric_value);

// string

echo "<hr>";

$float_value = 5.6;

echo gettype($float_value);

// double

echo "<hr>";

$array_value = array();

echo gettype($array_value);

// array

echo "<hr>";

$integer_value = 29;

echo gettype($integer_value);

// integer

echo "<hr>";

$bool_value = false;

echo gettype($bool_value);

// boolean

echo "<hr>";

$null_value = null;

echo gettype($null_value);

// NULL

echo "<hr>";

$empty_value = '';

echo gettype($empty_value);

// string

echo "<hr>";

$object_value = new stdClass;

echo gettype($object_value);

// object

echo "<hr>";

$resource_value = tmpfile();

echo gettype($resource_value);

// resource

echo "<hr>";

////////////////////// Checking if the variable is empty or not ///////////////

if(empty($resource_value)) {
    echo "Empty variable!";
}
else {
    echo "The variable has a value!";
}

// The variable has a value!

echo "<br>";

if(empty($empty_value)) {
    echo "Empty variable!";
}
else {
    echo "The variable has a value!";
}

// Empty variable!

echo "<br>";

if(empty($null_value)) {
    echo "Empty variable!";
}
else {
    echo "The variable has a value!";
}

// Empty variable!

echo "<br>";

if(empty($array_value)) { // empty array
    echo "Empty variable!";
}
else {
    echo "The variable has a value!";
}

// Empty variable!

echo "<hr>";

////////////////////// Checking if the variable is set ///////////////

if(isset($resource_value)) {
    echo "The variable is set.";
}
else {
    echo "The variable is not set.";
}

// The variable is set.

echo "<br>";

if(isset($empty_value)) {
    echo "The variable is set.";
}
else {
    echo "The variable is not set.";
}

// The variable is set.

echo "<br>";

if(isset($null_value)) {
    echo "The variable is set.";
}
else {
    echo "The variable is not set.";
}

// The variable is not set.

echo "<br>";

if(isset($array_value)) { // empty array
    echo "The variable is set.";
}
else {
    echo "The variable is not set.";
}

// The variable is not set.

echo "<br>";