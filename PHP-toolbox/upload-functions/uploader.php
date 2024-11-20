<?php
session_start();

$message = null;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["uploadBtn"]) && $_POST["uploadBtn"] == "upload") {
        if(isset($_POST["uploadedFile"]) && !empty($_POST["uploadedFile"])) {
            $message = "Ok";
        }
        else {
            $message = "Please choose a file to get uploaded!";
        }
    }
    $_SESSION["message"] = $message;
}

header("location:index.php");