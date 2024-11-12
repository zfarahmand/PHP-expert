<?php

$data = ['23' , 'admin' , 'zahra123' , 'admin@sample.com'];


// Used to check all characters of given string/text are alphanumeric or not.
// If all characters are alphanumeric then return TRUE, otherwise return FALSE
foreach($data as $value) {
    if(ctype_alnum($value)) {
        echo "Alphanumeric value<br>";
    }
    else {
        echo "Not alphanumeric value<br>";
    }
}

/*
    Alphanumeric value
    Alphanumeric value
    Alphanumeric value
    Not alphanumeric value
*/

echo "<hr>";

foreach($data as $value) {
    if(ctype_alpha($value)) {
        echo "Alphabetic value<br>";
    }
    else {
        echo "Not alphabetic value<br>";
    }
}

/*
    Not alphabetic value
    Alphabetic value
    Not alphabetic value
    Not alphabetic value
*/

echo "<hr>";

// Used to check if all the characters of a given string are control characters or not
$control_characters_array = array("\n\t" , '\n\t' , "hello\t" , "hello");
// Notice: Control characters are only valid in double qouted strings!

foreach($control_characters_array as $value) {
    if(ctype_cntrl($value)) {
        echo "All control characters<br>";
    }
    else {
        echo "Not all control characters<br>";
    }
}

/*
    All control characters
    Not all control characters
    Not all control characters
    Not all control characters
*/

echo "<hr>";

// Check each and every character of text are numeric or not
$digit_characters_array = array("999" , "99.2" , 99.23);
// Notice: Just string arguments are accepted!

foreach($digit_characters_array as $value) {
    if(ctype_digit($value)) {
        echo "All digit characters<br>";
    }
    else {
        echo "Not all digit characters<br>";
    }
}

/*
    All digit characters
    Not all digit characters
    Not all digit characters
*/

echo "<hr>";

// It return true if every character in the given string is printable, otherwise return false. 
$graph_characters_array = array("\n\t" , '\n\t' , "hello\t" , "hello" , "hello hello");
// Notice: space character is not acceptable

foreach($graph_characters_array as $value) {
    if(ctype_graph($value)) {
        echo "All printable characters<br>";
    }
    else {
        echo "Not all printable characters<br>";
    }
}

/*
    Not all printable characters
    All printable characters
    Not all printable characters
    All printable characters
    Not all printable characters
*/

echo "<hr>";

// It return true if every character in the given string is printable, otherwise return false. 
$graph_characters_array = array("\n\t" , '\n\t' , "hello\t" , "hello" , "hello hello");
// Notice: space character is acceptable!

foreach($graph_characters_array as $value) {
    if(ctype_print($value)) {
        echo "All printable characters<br>";
    }
    else {
        echo "Not all printable characters<br>";
    }
}

/*
    Not all printable characters
    All printable characters
    Not all printable characters
    All printable characters
    All printable characters
*/

echo "<hr>";

$lower_upper_characters_array = array("Hello" , "hello" , "hEllo" , "HELLO" , " " , "");

// Notice: Just alphabetic characters are accepted.
foreach($lower_upper_characters_array as $value) {
    if(ctype_lower($value)) {
        echo "All lower characters<br>";
    }
    else {
        echo "Not all lower characters<br>";
    }
}

/*
    Not all lower characters
    All lower characters
    Not all lower characters
    Not all lower characters
    Not all lower characters
    Not all lower characters
*/

echo "<hr>";

// Notice: Just alphabetic characters are accepted.
foreach($lower_upper_characters_array as $value) {
    if(ctype_upper($value)) {
        echo "All upper characters<br>";
    }
    else {
        echo "Not all upper characters<br>";
    }
}

/*
    Not all upper characters
    Not all upper characters
    Not all upper characters
    All upper characters
    Not all upper characters
    Not all upper characters
*/

echo "<hr>";

$punctuation_characters_array = array("He!llo" , "123hello" , "!123hEllo" , "!" , " " , "" , "!#$%" , "!#$ %");

foreach($punctuation_characters_array as $value) {
    if(ctype_punct($value)) {
        echo "All punctuation characters<br>";
    }
    else {
        echo "Not all punctuation characters<br>";
    }
}

/*
    Not all punctuation characters
    Not all punctuation characters
    Not all punctuation characters
    All punctuation characters
    Not all punctuation characters
    Not all punctuation characters
    All punctuation characters
    Not all punctuation characters
*/

echo "<hr>";

$space_characters_array = array("!123hEllo" , "!123 hEllo" , " " , "" , "\n" ,
 "\t" , "\n\t" , "\n \t" , "   ");

foreach($space_characters_array as $value) {
    if(ctype_space($value)) {
        echo "All space characters<br>";
    }
    else {
        echo "Not all space characters<br>";
    }
}

/*
    Not all space characters
    Not all space characters
    All space characters
    Not all space characters
    All space characters
    All space characters
    All space characters
    All space characters
    All space characters
*/

echo "<hr>";

// Check each and every character of string/text are hexadecimal digit or not
$space_characters_array = array("hello" , "GFG2018" , "ABCDEF0123" , "ABc" , "000000" , "fff");

foreach($space_characters_array as $value) {
    if(ctype_xdigit($value)) {
        echo "All hexadecimal characters<br>";
    }
    else {
        echo "Not all hexadecimal characters<br>";
    }
}

/*
    Not all hexadecimal characters
    Not all hexadecimal characters
    All hexadecimal characters
    All hexadecimal characters
    All hexadecimal characters
    All hexadecimal characters
*/

echo "<hr>";