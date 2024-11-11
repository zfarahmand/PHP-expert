<?php

// JSON Object

// {
//     "Employee" : {
//         "name" : "Zahra",
//         "age" : 32,
//         "gender" : "female"
//     }
// }


// JSON encoding of an associative array
$associative_array = array(
    "Zahra" => 32,
    "Arefeh" => 27,
    "Fahimeh" => 21
);
$indexed_array = array("Zahra" , "Arefeh" , "Fahimeh");

/////////////////////// Encode //////////////////////////

echo json_encode($associative_array);

// {"Zahra":32,"Arefeh":27,"Fahimeh":21}

echo "<br>";

// JSON encoding of an indexed array
echo json_encode($indexed_array);

// ["Zahra","Arefeh","Fahimeh"]

echo "<br>";

echo json_encode($indexed_array , JSON_FORCE_OBJECT);

// {"0":"Zahra","1":"Arefeh","2":"Fahimeh"}

echo "<hr>";

/////////////////////// Decode //////////////////////////

$associative_JSON = '{"Zahra":32,"Arefeh":27,"Fahimeh":21}';

echo "<br>";

$associative_JSON_to_std_object = json_decode($associative_JSON);
var_dump($associative_JSON_to_std_object);

// object(stdClass)#1 (3) { ["Zahra"]=> int(32) ["Arefeh"]=> int(27) ["Fahimeh"]=> int(21) }

echo "<br>";

$associative_JSON_to_array = json_decode($associative_JSON , true);
var_dump($associative_JSON_to_array);

// array(3) { ["Zahra"]=> int(32) ["Arefeh"]=> int(27) ["Fahimeh"]=> int(21) }

echo "<br>";

echo($associative_JSON_to_array["Zahra"]);

// 32

echo "<br>";

echo($associative_JSON_to_std_object->Zahra);

// 32

echo "<hr>";

/******* Looping through a PHP object: *********/

foreach($associative_JSON_to_std_object as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

echo "<br>";

foreach($associative_JSON_to_array as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}
