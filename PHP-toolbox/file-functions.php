<?php
echo file_exists('math-functions.php') ? "true" : "false"; // true

echo "<hr>";

echo is_file("math-functions.php") ? "true" : "false"; // true

echo "<hr>";

echo is_dir("../helpers") ? "true" : "false"; // true

echo "<hr>";

$dir_path = "dir/newDir";

if(!file_exists($dir_path)) {
    mkdir($dir_path);
}
else {
    echo "dir $dir_path already exists!";
}

echo "<hr>";

$file_path = "dir/newDir/index.html";

@unlink($file_path); 
// Notice: This way to prevent seeing warnings is not recommended due to security reasons

$file_to_open = "dir/log.txt";
$opened_file = fopen($file_to_open , 'a+');

/*
    "r" - Read only. Starts at the beginning of the file
    "r+" - Read/Write. Starts at the beginning of the file
    "w" - Write only. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
    "w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
    "a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist
    "a+" - Read/Write. Preserves file content by writing to the end of the file
    "x" - Write only. Creates a new file. Returns FALSE and an error if file already exists
    "x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists
    "c" - Write only. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
    "c+" - Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
    "e" - Only available in PHP compiled on POSIX.1-2008 conform systems.
*/

//fwrite($opened_file , "my new string\n"); 
// Notice: It creates a file if there isn't any

for($i = 0 ; $i < 10 ; $i++) {
    fwrite($opened_file , "$i- New log =>" . date("Y-m-d H:i:s" , time()) . PHP_EOL );
}

fclose($opened_file);

