<?php
//Array
//Index Array
//0  1  2   3    4
$dataA = [10,20,30,40,50];
$dataB = array(60,70,80,90,100);
$dataC = array("aa","bb","cc","dd","ee");

echo $dataA[3] . "&nbsp; &nbsp; ";
echo $dataB[1] . "  ";
echo $dataC[4] ;

//Associative Array
$faculty = ["as" => "Asts Sci", "en" => "Engineer", "bu" => "Business"];
$suject = ["th" => "Thai", "en" => "English", "jp" => "Japan"];
   
echo "<br/>" . $faculty["en"]; 
echo "<br/>" . $faculty["bu"]; 
echo "<br/>" . $faculty["jp"]; 
