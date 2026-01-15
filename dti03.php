<?php
//function
//no parameter, no return
function showHello() {
    echo "<h1 style=\"color: #0000ff\"> Hellooooooooooooo </h1>";
}

showHello();
showHello();

function showHi($fname, $lname) {
    echo "ยินดีต้อนรับ " . $fname . " " . $lname;
    echo "<br/>";
}

showHi("สมชาย", "ใจดี");
showHi("สมหญิง", "ใจงาม");

function sendBye(){
    echo "Wow eiei";
    return "Bye bye....";
    }

    echo sendBye();
    $data = sendBye();
    echo "<br/>" . $data . "DTI-SAU";

    //have parameter, have return
    function sumNumber($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }

    echo "<br/> <br/> 100 + 200 = " . sumNumber(100, 200);

    //Arrow function (เขียนในรูปแบบที่เรียก Expression Function)
    //Arrow function ของ php จะเป็น auto return
    $woo = fn() => "<br/> wow wow wow ";
    echo $woo();

    $hi = fn($nickname) => "<br/> สวัสดี " . $nickname . " ครับผม ";

    echo $hi("Patcha");