<html>
<head>

<title>แบบทดสอบ</title>

</head>
<body>
<style>   
    body {
        background-color: #a9b8e0;        
    }
    .container {
            text-align: center;
            margin-top: 50px;
        }
        .btn-group button {
            margin: 0 10px;
        }    
</style>      
<h1>วิชาการใช้เทคโนโลยีดิจิทัลเพื่อการศึกษา</h1> 
<?php

$score=0;

//ประมวลข้อ1
echo "ข้อ 1 น้ำหวานจะเคยช่วยเหลือเพื่อนและให้คำปรึกษาเพื่อนตลอดในยามที่เพื่อนมีปัญหาน้ำหวานมีความรับผิดชอบในด้านใด<br>";
echo $_POST["book1"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book1"]=="ความรับผิดชอบต่อครอบครัวและเพื่อน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ2
echo "ข้อ 2 อีเมลคืออะไร<br>";
echo $_POST["book2"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book2"]=="ส่งข้อความ แนบไฟล์ ภาพ ภาพเคลื่อนไหว")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ3
echo "ข้อ 3 บล็อกย่อมาจากอะไร<br>";
echo $_POST["book3"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book3"]=="ถูกทั้ง ก. และ ข.")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ4
echo "ข้อ 4 ผลของเทคโนโลยีสารสนเทศ ข้อใดมีผลต่อตัวนักเรียน<br>";
echo $_POST["book4"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book4"]=="ข้อ ก. และ ข. ถูกต้อง")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ5
echo "ข้อ 5 ข้อใดคือ การบริการไปรษณีย์อิเล็กทรอนิกส์<br>";
echo $_POST["book5"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book5"]=="อีเมล")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ6
echo "ข้อ 6 จากผลการสำรวจการใช้งานข้อมูลอินเทอร์เน็ตมีการใช้งานจากกสถานที่ใดมากที่สุด<br>";
echo $_POST["book6"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book6"]=="ที่บ้าน/ที่พักอาศัย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ7
echo "ข้อ 7 เราสามารถดาวน์โหลดแอพพลิเคชั่นต่าง ๆ บนระบบปฏิบัติการ Android ได้จากที่ใด<br>";
echo $_POST["book7"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book7"]=="Google Play Store")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ8
echo "ข้อ 8 ข้อใดหมายถึงเทคโนโลยีสื่อประสม<br>";
echo $_POST["book8"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book8"]=="การนำเสนอข้อมูลหลายรูปแบบพร้อมกัน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ9
echo "ข้อ 9 ไวรัสคอมพิวเตอร์ส่งผลกระทบอย่างไรต่อสังคม<br>";
echo $_POST["book9"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book9"]=="เกิดความเสียหายแก่ข้อมูล")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ10
echo "ข้อ 10 การศึกษาทางไกลผ่านดาวเทียมใช้ประโยชน์จากเทคโนโลยีสารสนเทศใดมากที่สุด<br>";
echo $_POST["book10"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book10"]=="การสื่อสารและเครือข่าย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

echo "<font color=blue><center>คะแนนรวม : </font>"."<font color=blue>$score</font>"."</center><br>";
?>

</body>
<div class="container">
        <div class="btn-group">
            <button onclick="window.location.href='project1.5.html'">กลับ</button>
            <button onclick="window.location.href='ตอนที่3.html'">บทที่3</button>
        </div>
    </div>
</html>