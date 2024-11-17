<?php

// echo rand();
echo rand(10 , 20); // Alias of mt_rand since PHP 7.1

echo "<hr>";

//echo mt_rand();
echo mt_rand(100 , 1000);

echo "<hr>";

// srand(time()); 
// echo(rand()); 
// From PHP 4.2.0, the random number generator is seeded automatically 
// and there is no need to use this function.

//echo random_int(100 , 1000);

// Notice: returns a string
$random_encrypted_string = random_bytes(10);

echo $random_encrypted_string;

echo "<hr>";

echo bin2hex($random_encrypted_string);

echo "<hr>";

// echo openssl_random_pseudo_bytes(5 , true); // Not recommended for PHP up to 7.1 (has some dependencies)

// echo "<hr>";

require_once('../helpers/randomization.php');

echo generateRandomString(5);