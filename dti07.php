<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>All Form with PHP 2026 (POST)</title>
    <style>
        body { padding: 50px; font-family: Arial; }
        .form-group { margin-bottom: 12px; }
        input, select, textarea {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<h1 style="text-align:center;">All Form with PHP 2026 (POST)</h1>
<hr>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <div class="form-group">
        <label>ชื่อ-สกุล</label>
        <input type="text" name="fname">
    </div>

    <div class="form-group">
        <label>รหัสผ่าน</label>
        <input type="password" name="pword">
    </div>

    <div class="form-group">
        <label>อายุ</label>
        <input type="number" name="age">
    </div>

    <div class="form-group">
        <label>เพศ</label><br>
        <input type="radio" name="gender" value="ชาย" checked> ชาย
        <input type="radio" name="gender" value="หญิง"> หญิง
        <input type="radio" name="gender" value="LGBTQ+"> LGBTQ+
    </div>

    <div class="form-group">
        <label>ภาษาโปรแกรมที่ชอบ</label><br>
        <input type="checkbox" name="plang[]" value="C"> C
        <input type="checkbox" name="plang[]" value="JAVA"> JAVA
        <input type="checkbox" name="plang[]" value="Python"> Python
        <input type="checkbox" name="plang[]" value="PHP"> PHP
    </div>

    <div class="form-group">
        <label>อาหารที่ชอบ</label><br>
        <input type="checkbox" name="food[]" value="KFC"> KFC
        <input type="checkbox" name="food[]" value="Pizza"> Pizza
        <input type="checkbox" name="food[]" value="Donut"> Donut
        <input type="checkbox" name="food[]" value="Burger"> Burger
    </div>

    <div class="form-group">
        <label>ประเทศที่ชอบ</label>
        <select name="country">
            <option value="Japan">Japan</option>
            <option value="America">America</option>
            <option value="Canada">Canada</option>
            <option value="Korea">Korea</option>
            <option value="Thailand">Thailand</option>
        </select>
    </div>

    <div class="form-group">
        <label>วันเกิด</label>
        <input type="date" name="bdate">
    </div>

    <div class="form-group">
        <label>ระดับความชอบ</label><br>
        0 <input type="range" name="likelevel" min="0" max="100"> 100
    </div>

    <div class="form-group">
        <label>ความคิดเห็น</label>
        <textarea name="comment" rows="5"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="ตกลง">
        <input type="reset" value="ยกเลิก">
    </div>

</form>

<hr>

<?php
// ✅ รับค่าแบบ POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>ข้อมูลที่ส่งมา</h3>";
    echo "ชื่อ: " . ($_POST['fname'] ?? '') . "<br>";
    echo "อายุ: " . ($_POST['age'] ?? '') . "<br>";
    echo "เพศ: " . ($_POST['gender'] ?? '') . "<br>";

    if (!empty($_POST['plang'])) {
        echo "ภาษาโปรแกรมที่ชอบ: " . implode(", ", $_POST['plang']) . "<br>";
    }

    if (!empty($_POST['food'])) {
        echo "อาหารที่ชอบ: " . implode(", ", $_POST['food']) . "<br>";
    }

    echo "ประเทศ: " . ($_POST['country'] ?? '') . "<br>";
    echo "วันเกิด: " . ($_POST['bdate'] ?? '') . "<br>";
    echo "ความคิดเห็น: " . ($_POST['comment'] ?? '') . "<br>";
}
?>

</body>
</html>
