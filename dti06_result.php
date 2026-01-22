<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
        body {
            padding: 50px;
            font-family: Arial, sans-serif;
        }
    </style>
<body>
    <h1 style="text-align: center;">Result Data Form with PHP 2026</h1>
    <hr>
    <?php
    //ตรวจสอบว่ามีการร้องขอข้อมูลมาหรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ?>
        <div>
            <strong>ชื่อ-สกุล:  </strong>
            <?php echo empty($_GET['fname']) ? " - " : ($_GET['fname']); ?>
        </div>

        <div>
            <strong>รหัสผ่าน: </strong>
            <?php echo empty($_GET['pword']) ? " - " : ($_GET['pword']); ?>
        </div>

         <div>
            <strong>อายุ: </strong>
            <?php echo empty($_GET['age']) ? " - " : ($_GET['age']); ?>
            <strong> ปี </strong>
        </div>

         <div>
            <strong>เพศ: </strong>
            <?php echo ($_GET['gender']); ?>
        </div>

         <div>
            <strong>ภาษาโปรแกรมที่ชอบ: </strong>
            <?php echo implode(", ", $_GET['plang']) ?: " - "; ?>
        </div>

        <div>
            <strong>อาหารที่ชอบ: </strong>
            <?php 
            if (!isset($_GET['food1']) && !isset($_GET['food2']) && !isset($_GET['food3']) && !isset($_GET['food4'])) {
                echo " - ";
            } 
                echo isset($_GET['food1']) ? $_GET['food1'] : " ";
                echo isset($_GET['food2']) ? $_GET['food2'] : " ";
                echo isset($_GET['food3']) ? $_GET['food3'] : " ";
                echo isset($_GET['food4']) ? $_GET['food4'] : " ";
            ?>
        </div>

        <div>
            <strong>ประเทศที่ชอบ: </strong>
            <?php echo empty($_GET['country']) ? " - " : ($_GET['country']); ?>
        </div>

        <div>
            <strong>จังหวัดที่ชอบ: </strong>
            <?php echo empty($_GET['province']) ? " - " : ($_GET['province']); ?>
        </div>

        <div>
            <strong>วัน เดือน ปีเกิด: </strong>
            <?php echo empty($_GET['bdate']) ? " - " : ($_GET['bdate']); ?>
        </div>

        <div>
            <strong>ความคิดเห็น: </strong>
            <?php echo empty($_GET['comment']) ? " - " : ($_GET['comment']); ?>
        </div>

        <div>
            <strong>Message: </strong>
            <?php echo $_GET['message']; ?>
        </div>


    <?php
    }else{
        echo "ไม่มีข้อมูลส่งมา";
    }   
    ?>
</body>
</html>