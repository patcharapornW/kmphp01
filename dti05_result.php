<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ผลการคำนวณ</h1>
    <hr>
    <?php
    if (empty($_GET["num1"]) == true || empty($_GET["num2"]) == true ) {
        echo "ไม่สามารถคำนวณได้ ตรวจสอบจำนวนเงินหรือจำนวนคนอีกครั้ง ";
        header("refresh:3;url=dti05.php");
    } else if ( floatval ($_GET["num1"]) == 0 || intval ($_GET["num2"]) == 0 ) {
        echo "ไม่สามารถหารด้วยศูนย์ได้ ตรวจสอบจำนวนเงินหรือจำนวนคนอีกครั้ง จำนวนห้ามเป็น 0";  
        // redirect อัติโนมัติไปที่ dti05.php ใน 3 วินาที
        header("refresh:3;url=dti05.php");
         
    } else {
        $result = $_GET["num1"] / $_GET["num2"];
        echo "เงิน " . $_GET["num1"] . " บาท <br>";
        echo "คน " . $_GET["num2"] . " คน <br>";
        echo "หารคนละ = " . $result;
        }
    ?>
</body>
</html>