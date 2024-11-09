<?php

function printResults($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre><hr>";
}

////////////////////////////////Basic Array Functions /////////////////////////

$arr = array("Developer" , "Painter" , "Writer");
$arr_associated = array("job1" => "Developer" , "job2" => "Painter" , "job3" => "Writer");

printResults(count($arr));

// 3

printResults(sizeof($arr));

// 3

printResults(array_keys($arr_associated));

/*
Array
(
    [0] => job1
    [1] => job2
    [2] => job3
)
*/

printResults(array_keys($arr_associated , "Painter"));

/*
Array
(
    [0] => job2
)
*/

printResults(array_values($arr_associated));

/*
Array
(
    [0] => Developer
    [1] => Painter
    [2] => Writer
)
*/

if(array_key_exists("job2" , $arr_associated))
    echo "The key exists!<hr>";
else
    echo "The key does not exist!<hr>";

// The key exists!

if(in_array("Teacher" , $arr_associated))
    echo "The value exists!<hr>";
else
    echo "The value does not exist!<hr>";

// The value does not exist!

if(is_array($arr))
    echo "This is an array!<hr>";
else
    echo "This is not an array!<hr>";

// This is an array!


shuffle($arr);
printResults($arr);

/*
Array
(
    [0] => Writer
    [1] => Developer
    [2] => Painter
)
*/

sort($arr); // alphabetic
printResults($arr);

/*
Array
(
    [0] => Developer
    [1] => Painter
    [2] => Writer
)
*/

$arr_nums = [1 , 5 , 88 , 2 , 28];
printResults(max($arr_nums));

// 88

echo max(5 , 10 , 4 , 2) . "<hr>";

// 10

printResults(min($arr_nums));

// 1

printResults(end($arr_nums));

// 28

printResults(array_sum($arr_nums));

// 124

printResults(array_rand($arr_associated));

// random keys

printResults(array_chunk($arr_associated , 2));

/*
    Array
    (
        [0] => Array
            (
                [0] => Developer
                [1] => Painter
            )

        [1] => Array
            (
                [0] => Writer
            )

    )
*/

printResults(array_merge($arr , $arr_associated));

/*
    Array
    (
        [0] => Developer
        [1] => Painter
        [2] => Writer
        [job1] => Developer
        [job2] => Painter
        [job3] => Writer
    )
*/

$arr_duplicated = ["firstName" => "Zahra" , "lastName" => "Farahmand" , 
"nickName" => "Atyieh" , "firstName" => "Ferial"];

printResults(array_unique($arr_duplicated));

/*
    Array
    (
        [firstName] => Ferial
        [lastName] => Farahmand
        [nickName] => Atyieh
    )
*/

printResults(array_reverse($arr));

/*
    Array
    (
        [0] => Writer
        [1] => Painter
        [2] => Developer
    )
*/

printResults(array_search("Painter" , $arr));

// 1

$arr1 = ["apple" , "banana" , "grapefruit" , "tangerine"];
$arr2 = ["orange" , "banana" , "apple" , "grapefruit" , "watermelon"];

printResults(array_diff($arr1 , $arr2));

/*
    Array
    (
        [3] => tangerine
    )
*/
// Returns an array containing the entries from array1 that are not present in any of the other arrays

$arr_associated1 = ["firstName" => "Zahra" , "lastName" => "Farahmand" , 
"nickName" => "Atyieh" , "nickName1" => "Ferial"];
$arr_associated2 = ["firstName" => "Zahra" , "lastName" => "Bandari" , 
"nickName" => "Atyieh" , "birth" => "1992"];

printResults(array_diff_assoc($arr_associated1 , $arr_associated2));

/*
    Array
    (
        [lastName] => Farahmand
        [nickName1] => Ferial
    )
*/

printResults(array_slice($arr , 1));

/*
    Array
    (
        [0] => Painter
        [1] => Writer
    )
*/

// printResults(array_splice($arr , 1 , 2 , $arr1));

/*
    Array
    (
        [0] => Painter
        [1] => Writer
    )
    These are removed elements from $arr.
*/

// printResults($arr);

/*
    Array
    (
        [0] => Developer
        [1] => apple
        [2] => banana
        [3] => grapefruit
        [4] => tangerine
    )
*/

// printResults(array_shift($arr));

// Developer

// Remove the first element from an array, and return the value of the removed element

// printResults($arr);

/*
    Array
    (
        [0] => apple
        [1] => banana
        [2] => grapefruit
        [3] => tangerine
    )
*/

// printResults(array_push($arr , "Watermelon" , "Pomgranate" , "Persimoon"));

// 6

// printResults($arr);

/*
    Array
    (
        [0] => Developer
        [1] => Painter
        [2] => Writer
        [3] => Watermelon
        [4] => Pomgranate
        [5] => Persimoon
    )
*/

// printResults(array_pop($arr));

// Writer

// Remove the last element from an array, and return the value of the removed element

// printResults($arr);

/*
    Array
    (
        [0] => Developer
        [1] => Painter
    )
*/

printResults(array_fill(1 , 5 , "Dreamer"));

/*
    Array
    (
        [1] => Dreamer
        [2] => Dreamer
        [3] => Dreamer
        [4] => Dreamer
        [5] => Dreamer
    )
*/

