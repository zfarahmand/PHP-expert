<?php

$string_variable = "Zahra";

echo is_array($string_variable) ? "true" : "false";

// false

echo "<hr>";

$null_variable = null;

echo is_bool($null_variable) ? "true" : "false";

// false

echo "<hr>";

echo is_null($null_variable) ? "true" : "false";

// true

echo "<hr>";


// Aliases of is_integer:

// is_integer($value);
// is_int($value);
// is_long($value);


// is_string($value);
// is_resource($value);
// is_object($value);
// is_scalar($value);
// is_real($value);

$if_iterable = 'Atyieh';
$if_iterable2 = array();

echo is_iterable($if_iterable) ? "Iterable" : "Not iterable";
// Not iterable

echo "<br>";

echo is_iterable($if_iterable2) ? "Iterable" : "Not iterable";
// Iterable

echo "<hr>";


// Tells whether a file exists and is readable:
// is_readable($file);

$url = "site.com/single.php?id=12";
$page_id = intval($url); // Get the integer value of a variable. 0 if not castable to integer
// Useful to prevent url attacks
echo $page_id; // 0
echo "<br>";
echo intval("45"); // 45
echo "<br>";
echo intval("45.523"); // 45

echo "<hr>";

$animals = ["Cat" , "Duck" , "Pigeon" , "Dove"];

// To serialize data means to convert a value to a sequence of bits,
// so that it can be stored in a file, a memory buffer, or transmitted across a network.
echo $serialized_animals = serialize($animals);
// a:4:{i:0;s:3:"Cat";i:1;s:4:"Duck";i:2;s:6:"Pigeon";i:3;s:4:"Dove";}

echo "<br>";

var_dump(unserialize($serialized_animals));

// array(4) { [0]=> string(3) "Cat" [1]=> string(4) "Duck" 
// [2]=> string(6) "Pigeon" [3]=> string(4) "Dove" }