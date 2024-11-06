<?php
session_start();
// include("session.php");
// echo $_SESSION["hello"];

$_SESSION["variable"] = "Dummy Value!";

function AssignVariable() {
    $variable = $_SESSION["variable"];
    return $variable;
}

echo AssignVariable();
echo "<hr>";
echo "شما هم اکنون در مسیر " . __FILE__ . " قرار دارید.";
// نتیجه:
// شما هم اکنون در مسیر C:\xampp\htdocs\phpexpert\index.php قرار دارید.


