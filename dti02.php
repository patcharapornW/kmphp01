<?php
//sigle line comment

#sigle line comment

/*
multi line comment
*/

//variables
$data = " Hello PHP "; //string ตัวอักษร 0 ตัวขึ้นไป
$data_char = 'A'; //Character ตัวอักษร 1 ตัว
$dataWow = 1234; //Number ตัวเลข 0-9
$data_eiei = true;
$data_array = [10, 20, 30, 40, 50]; //Array ตัวเลขหลายตัว

//output statement on browser
echo "<h1> Welcome to PHP </h1>";
echo 123456 . "<br>";
echo $data . "<br>";
echo "T" . "<br>";
echo $data_array[1] + $data_array[3] . "<br>";

$fname = "สมชาย";
$lname = "ใจดี";

echo "<hr/>";

echo "สวัสดี $fname $lname <br>";
echo "สวัสดี " . $fname . " " . $lname . "<br>";
?>