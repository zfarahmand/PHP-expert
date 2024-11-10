<?php

include_once('../jdf.php');

function dateToJalali(string $date) {
    // Course way:
    // Notice: List function: Assign variables as if they were an array
    // $date = "2024-11-10 16:23:00"; // Standard database timespace
    // $datetime = explode(' ' , $date);

    // list($year , $month , $day) = explode('-' , $datetime[0]);
    // list($hour , $minute , $second) = explode(':' , $datetime[1]);
    
    // // $timestamp = mktime((int)$month , (int)$day , (int)$year);
    // $timestamp = mktime($hour , $minute , $second , $month , $day , $year);

    // return jdate('Y-n-j H:i:s' , $timestamp , '' , 'Asia/Tehran' , 'fa');

    return jdate('Y-n-j H:i:s' , strtotime($date));
}