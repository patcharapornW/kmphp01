<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Form with PHP 2026</title>

    <style>
        body {
            padding: 50px;
            font-family: Arial, sans-serif;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #1663fc;
            color: #ffffff;
            padding: 8px 20px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
        }

        input[type="reset"] {
            background-color: #fc1616;
            color: #ffffff;
            padding: 8px 20px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>

<body>

<h1 style="text-align: center;">All Form with PHP 2026</h1>
<hr>

<!-- method ควรใช้ GET หรือ POST -->
<form action="./dti06_result.php" method="GET" enctype="">

    <div class="form-group">
        <label for="fname">ชื่อ-สกุล</label>
        <input type="text" id="fname" name="fname">
    </div>

    <div class="form-group">
        <label for="pword">รหัสผ่าน</label>
        <input type="password" id="pword" name="pword">
    </div>

    <div class="form-group">
        <label for="age">อายุ</label>
        <input type="number" id="age" name="age">
    </div>

    <div class="form-group">
        <label>เพศ</label><br>
        <input type="radio" name="gender" value="ชาย" checked> ชาย
        <input type="radio" name="gender" value="หญิง"> หญิง
        <input type="radio" name="gender" value="LGBTQ+"> LGBTQ+
    </div>

    <div class="form-group">
        <label>ภาษาโปรแกรมที่ชอบ</label><br>
        <input type="checkbox" name="plang[]" value="C " checked> C
        <input type="checkbox" name="plang[]" value="JAVA "> JAVA
        <input type="checkbox" name="plang[]" value="Python "> Python
        <input type="checkbox" name="plang[]" value="PHP "> PHP
    </div>

    <div class="form-group">
        <label>อาหารที่ชอบ</label><br>
        <input type="checkbox" name="food[]" value="KFC"> KFC
        <input type="checkbox" name="food[]" value="Pizza"> Pizza
        <input type="checkbox" name="food[]" value="Donut"> Donut
        <input type="checkbox" name="food[]" value="Burger"> Burger
    </div>

    <div class="form-group">
        <label for="country">ประเทศที่ชอบ</label>
        <select name="country" id="country">
            <option value="">---กรุณาเลือกประเทศ---</option>
            <option value="Japan">Japan</option>
            <option value="America">America</option>
            <option value="Canada">Canada</option>
            <option value="Korea">Korea</option>
            <option value="Thailand">Thailand</option>
        </select>
    </div>

    <div class="form-group">
        <label for="province">จังหวัดที่ชอบ</label>
        <select name="province" id="province" size="4">
            <option value="เชียงใหม่">เชียงใหม่</option>
            <option value="เชียงราย">เชียงราย</option>
            <option value="น่าน">น่าน</option>
            <option value="พะเยา">พะเยา</option>
            <option value="แพร่">แพร่</option>
            <option value="ลำพูน">ลำพูน</option>
        </select>
    </div>

    <div class="form-group">
        <label for="bdate">วันเกิด</label>
        <input type="date" name="bdate" id="bdate">
    </div>

    <div class="form-group">
        <label for="likelevel">ระดับความชอบ</label><br>
        0 <input type="range" name="likelevel" id="likelevel" min="0" max="100"> 100
    </div>

    <div class="form-group">
        <label for="comment">ความคิดเห็น</label>
        <textarea name="comment" id="comment" rows="5"></textarea>
    </div>

    <input type="hidden" name="message" value="รักนะคร้าฟฟฟ">
    

    <div class="form-group">
        <input type="submit" value="ตกลง">
        <input type="reset" value="ยกเลิก">
    </div>

</form>

</body>
</html>
