<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>

<>

    <h1 style="color: red;">PHP Variable</h1>

    <pre> &lt;?php
    $a = "Hello world."
    echo "$a";
    ?&gt;</pre>

    <h3>Result</h3>

    <?php

    $n = "Hello world.";
    echo "<span style='color: blue;'>$n</span><br>";

    ?>
    <hr>

    <h1>Integer Variable Example.</h1>
    <?php

    $age = 20;
    echo "<span style='color: blue;'>I'm $age years old.</span>";

    ?>
    <hr>

    <h1 style="color: red;">Calulculate with Variables.</h1>

    <?php
    $a = 5;
    $b = 4;
    $c = $a + $b;
    echo "<span style='color: blue;'>The sum 5 and 4 is $c.</span>";
    ?>

    <hr>

    <h1 style="color: red;">คำนวนพื้นที่สามเหลี่ยม</h1>
    <?php
    $x = 5;
    $y = 4;
    $bs = 0.5;
    $sum = $bs * $x * $y;
    echo "<span style='color: blue;'>พื้นที่สามเหลี่ยมคือ $sum ตารางหน่วย</span>";
    ?>

    <hr>

    <h1 style="color: red;">คำนวนอายุจากปีเกิด</h1>
    <?php
    $a = 2025;
    $b = 2004;
    $c = $a - $b;
    echo "<span style='color: blue;'>อายุของคุณคือ $c ปี</span>";
    ?>
    <hr>

    <h1 style="color: red;">If-Else</h1>

    <?php

    $score = 50;
    if($score > 60) {
        echo "ผลลัพธ์ : คุณสอบผ่าน <br>";
    } else {
        echo "ผลลัพธ์ : คุณสอบไม่ผ่าน <br>";
    }
    echo "คุณได้คะแนน $score ";

    ?>

    <hr>

    <h1 style="color: red;">Boolean Variables</h1>

    <?php

        echo "<h3>คุณเป็นนักเรียนใช่หรือไม่</h3> <br>";
        $is_student = true;
        if($is_student) { 
            echo "่ใช่ ";
        } else {
            echo "ไม่ใช่";
        }

    ?>
    <!--=======================loop=====================-->
    <hr>
    <h1 style="color: red;">Loop</h1>
    <h2>======Loop for========</h2>
    <?php

        $sum = 0;
        for($i=5;$i<= 9;$i++){
            $sum += $i; //$sum = $sum + $i;//
            if($i < 9 ){
                echo "$i + ";
            } else {
                echo "$i = $sum";
            }
        }
        echo " <br> ผลบวกของตัวเลข 5 ถึง 9 = $sum";
        ?>
        <hr>

        <h2>============ สูตรคูณแม่ 2 =============</h2>

        <?php 
        $j = 1;
        while ($j <= 12) {
            echo "2 x $j = ".(2 * $j). "<br>";
            $j++;
        }
        ?>
<hr>

<h2 style=  "text-align: center;">============ สูตรคูณแม่ 2 ตาราง =============</h2>

<table class="table table-borderd table-striped w-auto mx-auto text-center">
    <thead class="table-primary">
        <tr>
            <th>ลำดับ</th>
            <th>สูตรคูณ</th>
            <th>ผลลัพธ์</th>
        </tr>
    </thead>

    <tbody>
        <?php
            for($i=1;$i<=12;$i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>2 x $i</td>";
                echo "<td>".(2 * $i)."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<br>

    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
    <h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>
    
    <br>

    <?php
    $fruits = ["Apple", "Banana","Orange"];
    ?>

    <H3>เข้าถึงผลไม้โดยใช้ index </H3>
    <div style="color: blue; background-color: lightgray; padding:10px;">
        <?php
        echo $fruits[0], "<br>";
        echo $fruits[1], "<br>";
        echo $fruits[2], "<br>";
        ?>
    </div>

    <div style="color: red; background-color: lightgray; padding:10px; margin-top: 20px;">
        <h5>รายการผลไม้</h5>
        <?php
        echo "ผลไม้ที่ 1 ",$fruits[0], "<br>";
        echo "ผลไม้ที่ 2 ",$fruits[1], "<br>";
        echo "ผลไม้ที่ 3 ",$fruits[2], "<br>";
        ?>
    </div>

้<hr>

    <h3>นับจำนวนสมาชิกใน Array</h3>
    <div style="color: red; background-color: lightgray; padding:10px; margin-top: 20px;">
        <h5>จำนวนผลไม้</h5>
        <?php
        echo "จำนวนผลไม้".count($fruits)." ชนิด <br> "; 
        ?>
    </div>

    <hr>

    <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
            // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
            echo "รายการผลไม้: " . implode(", ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
            echo "<br>";
        ?>
    </div>
    
<hr>

    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
            foreach ($fruits as $fruit){
                echo "ผลไม้ $fruit <br>";
            }
            echo "<br>";
        ?>
<br>

        <?php
            // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
            foreach ($fruits as $fruit) {
                if($fruit === end($fruits)){
                    echo "$fruit.";
                }else{
                    echo "$fruit, ";
                }
        
    }
            echo "<br>";
        ?>
    </div>

<hr>

    <br>
<h4>แสดงรายการผลไม้ ใช้คำสั่ง key value</h4>
<div style="color:blue; background-color: lightgray; padding: 10px;">
    <?php
    $products = [
        ["name" => "Apple", "price" => 30],
        ["name" => "Banana", "price" => 40],
        ["name" => "Orange", "price" => 50]
    ];

    $total = 0; // ประกาศตัวแปรราคารวม
    foreach ($products as $product){
        echo "สินค้า {$product['name']} ราคา {$product['price']} บาท <br>";
        $total += $product['price']; }
    echo "<br>ราคารวมทั้งหมด: {$total} บาท<";
    ?>
</div>

<a href="index.php">back</a>
</body>

</html>