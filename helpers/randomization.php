<?php

function generateRandomString(int $length) : string {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYZ!@#$%&*_)(}{[].,";
    $chars_length = strlen($chars);
    $random_string = '';

    for($i = 0; $i < $length; $i++) {
        $random_string .= $chars[rand(0 , $chars_length - 1)];
    }

    return $random_string;
}