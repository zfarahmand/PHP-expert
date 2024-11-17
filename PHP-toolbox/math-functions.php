<?php

echo round(3.4) . "<br>"; // 3
echo round(3.5) . "<br>"; // 4
echo round(3.6); // 4

echo "<hr>";

echo ceil(3.1); // 4

echo "<hr>";

echo floor(3.9); // 3

echo "<hr>";

echo sqrt(3.6); // 1.897366596101

echo "<hr>";

echo abs(-15.1); // 15.1

echo "<hr>";

$numbers = [-1 , 2 , -54.3 , 18 , -3 , 9.1 , 100];

echo  min($numbers); // -54.3

echo "<hr>";

echo  max($numbers); // 100

echo "<hr>";

echo pi(); // 3.1415926535898

echo "<hr>";

echo is_finite(20) . "<br>"; // 1
echo is_finite(log(0)); // 

echo "<hr>";

echo is_infinite(pi()); // 






