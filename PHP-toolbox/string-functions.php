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

//////////////////////// explode() ///////////////////////

$variable3 = "Hi, My name is Zahra, and I am playing with PHP.";

var_dump(explode("," , $variable3));

// array(3) { [0]=> string(2) "Hi" [1]=> string(17) " My name is Zahra" [2]=> string(27) " and I am playing with PHP." }

echo "<hr>";

//////////////////////// implode() ///////////////////////

$variable3 = explode("," , "Hi, My name is Zahra, and I am playing with PHP.");

echo implode(" " , $variable3);
// Hi My name is Zahra and I am playing with PHP.

echo "<hr>";

//////////////////////// substr() ///////////////////////

echo substr($variable1 , 4);
// a Farahmand

echo "<hr>";

//////////////////////// strstr() ///////////////////////

echo strstr($variable1 , "ra");
// ra Farahmand

echo "<hr>";

//////////////////////// str_replace() ///////////////////////

echo str_replace("Zahra" , "Atyieh" , $variable1);
// Atyieh Farahmand

echo "<hr>";

//////////////////////// str_repeat() ///////////////////////

echo str_repeat("Zahra" , 8);
// ZahraZahraZahraZahraZahraZahraZahraZahra

echo "<hr>";

//////////////////////// str_shuffle() ///////////////////////

echo str_shuffle($variable1);
// FZahrmdahaana r

echo "<hr>";

//////////////////////// str_word_count() ///////////////////////

echo str_word_count($variable1);
// 2

echo "<hr>";

//////////////////////// strtok() ///////////////////////

$variable3 = implode(" " , $variable3);
echo strtok($variable3 , " ");
// Hi

echo "<br>";

// After the first call, this function only needs the split argument, as it keeps track of where it is in the current string. To tokenize a new string, call strtok() with the string argument again

$token = strtok($variable3 , " ");

while($token) {
    echo "$token<br />";
    $token = strtok(" ");
}

echo "<hr>";

//////////////////////// printf() ///////////////////////

$fav_masterpiece = "The fallen angel";
$artist = "Alexandre Cabanel";
$year = 1847;

printf("My favorite masterpiece is %s by %s. This is painted in %u." ,
$fav_masterpiece , $artist , $year);
// My favorite masterpiece is The fallen angel by Alexandre Cabanel. This is painted in 1847.

echo "<hr>";

//////////////////////// stripos() ///////////////////////

echo stripos($variable3 , "name");

// 7

// Notice: case insensitive

echo "<hr>";

//////////////////////// strpos() ///////////////////////

echo strpos($variable3 , "name");

// 7

// Notice: case sensitive

echo "<hr>";

//////////////////////// md5() ///////////////////////

echo md5($variable1);

// e8a8d57fa67fa9ca20981890d3f0a662

echo "<hr>";

//////////////////////// htmlentities() ///////////////////////

$entity_string = "<script>alert('hacked!')</script>";

// echo $entity_string; 
// Shows alert!

echo htmlentities($entity_string);

// <script>alert('hacked!')</script>

echo "<hr>";

//////////////////////// html_entity_decode() ///////////////////////

$entity_string = htmlentities($entity_string);


// echo html_entity_decode($entity_string);

// Shows alert!

echo "<hr>";

//////////////////////// htmlspecialchars() ///////////////////////

$special_chars_string = "<script>alert('hacked!')</script>";

// echo $special_chars_string; 
// Shows alert!

echo htmlspecialchars($special_chars_string);

// <script>alert('hacked!')</script>

echo "<hr>";

//////////////////////// htmlspecialchars_decode() ///////////////////////

$special_chars_string = htmlspecialchars($special_chars_string);


// echo htmlspecialchars_decode($special_chars_string);

// Shows alert!

echo "<hr>";

//////////////////////// strip_tags() ///////////////////////

$special_chars_string = "<a href= 'http://site.com'>Malicious link</a>";

echo $special_chars_string."<br>"; 
// Shows The malicious link!

echo strip_tags($special_chars_string);

// Drops anchor tag or any other html tag!

echo "<hr>";