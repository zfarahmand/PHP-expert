<?php

$file_to_open = "dir/log.txt";

echo filesize($file_to_open); // by bit

echo "<hr>";

echo filetype($file_to_open); // file/dir

echo "<hr>";

chown($file_to_open , "root");

chgrp($file_to_open , "root");

chmod($file_to_open , 0777);

/*
    The mode parameter consists of four numbers:

    The first number is always zero
    The second number specifies permissions for the owner
    The third number specifies permissions for the owner's user group
    The fourth number specifies permissions for everybody else
    Possible values (to set multiple permissions, add up the following numbers):

    1 = execute permissions
    2 = write permissions
    4 = read permissions

    7 = 4 + 2 + 1 = all permissions
*/

$list = glob("j*");
var_dump($list);

echo "<br>";

$list = glob("*.php");
print_r($list);

echo "<br>";

$list = glob("*/*.txt");
print_r($list);

echo "<br>";

$list = glob("*/*/i?*.html"); // ?: at least 2 characters
print_r($list);

echo "<br>";