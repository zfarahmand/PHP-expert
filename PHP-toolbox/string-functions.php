<?php
//////////////////////// is_string() ///////////////////////
$variable1 = "Zahra Farahmand";

$variable2 = 32;

echo is_string($variable1) ? "True" : "False";
// True
echo "<br>";

echo is_string($variable2) ? "True" : "False";
// False

echo "<hr>";

//////////////////////// strlen() ///////////////////////

echo strlen($variable1);
// 15

echo "<hr>";

//////////////////////// lcfirst() ///////////////////////

echo lcfirst($variable1);

// Lowercase first letter: 
// zahra Farahmand

echo "<hr>";

//////////////////////// ucfirst() ///////////////////////

echo ucfirst($variable1);

// Uppercase first letter: 
// Zahra Farahmand

echo "<hr>";

//////////////////////// ucwords() ///////////////////////

$variable3 = "zahra farahmand";

echo ucwords($variable1);

// Uppercase first letter of the words: 
// Zahra Farahmand

echo "<hr>";

//////////////////////// strtoupper() ///////////////////////

echo strtoupper($variable1);

// ZAHRA FARAHMAND

echo "<hr>";

//////////////////////// strtolower() ///////////////////////

echo strtolower($variable1);

// zahra farahmand

echo "<hr>";

//////////////////////// ltrim() ///////////////////////
// Notice: trim functions without second argument just remove whitespaces from the string
echo ltrim($variable1 , "Zahra ");

// Farahmand

echo "<hr>";

//////////////////////// rtrim() ///////////////////////

echo rtrim($variable1 , "Farahmand");

// Zahra

echo "<hr>";

//////////////////////// trim() ///////////////////////
$variable3 = " Zahra Farahmand ";

echo trim($variable3);

// Zahra Farahmand

echo "<hr>";

echo trim(trim($variable3) , "Znd");

// ahra Farahma

echo "<hr>";

//////////////////////// nl2br() ///////////////////////

$variable3 = " Zahra \nFarahmand ";

echo nl2br($variable3);

// Zahra
// Farahmand

echo "<hr>";

//////////////////////// number_format() ///////////////////////

$variable3 = "100000000";

echo number_format($variable3 , 2);

// 100,000,000.00

echo "<hr>";