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
echo "ข้อ 1 บุคลากรสารสนเทศทางการศึกษากลุ่มใดควรมีความรู้เข้าใจระบบสารสนเทศปฏิบัติการสำนักงาน Office Information System(OIS) มากที่สุด<br>";
echo $_POST["book1"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book1"]=="ครู หรือเจ้าหน้าที่")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ2
echo "ข้อ 2 บทบาทของครูต่อนโยบายด้านเทคโนโลยีสารสนเทศและการสื่อสารเพื่อการศึกษา<br>";
echo $_POST["book2"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book2"]=="พัฒนาบุคลากร")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ3
echo "ข้อ 3 ทำไมต้องนำนวัตกรรมการศึกษามาใช้แทนวิธีการเดิม<br>";
echo $_POST["book3"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book3"]=="เพื่อให้มีประสิทธิภาพมากขึ้น")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ4
echo "ข้อ 4 ผลกระทบทางด้านลบจากการใช้เทคโนโลยีสารสนเทศที่มีต่อสังคมส่งผลเสียอย่างมากในด้านใด<br>";
echo $_POST["book4"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book4"]=="ค่านิยมและวัฒนธรรม")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ5
echo "ข้อ 5 ข้อใดกล่าวถึงการใช้เทคโนโลยีสารสนเทศเพื่อการสื่อสารและเครือข่ายได้ถูกต้อง<br>";
echo $_POST["book5"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book5"]=="เป็นการส่งข้อมูลจากที่หนึ่งไปยังที่หนึ่ง")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ6
echo "ข้อ 6 เทคโนโลยีสารสนเทศส่งผลให้เกิดความเสมอภาคในสังคม    <br>";
echo $_POST["book6"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book6"]=="ช่วยกระจายโอกาส")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ7
echo "ข้อ 7 ระบบอินเทอร์เน็ตพัฒนามาจากหน่วยงานใด <br>";
echo $_POST["book7"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book7"]=="การทหาร")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ8
echo "ข้อ 8 ข้อใดไม่ใช่ระบบปฏิบัติการบนสมาร์ทโฟน<br>";
echo $_POST["book8"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book8"]=="Windows")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ9
echo "ข้อ 9 การสมัคร gmail ใหม่ ต้องคลิกที่ปุ่มใด<br>";
echo $_POST["book9"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book9"]=="สร้างบัญชี")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ10
echo "ข้อ 10 ข้อใดคือผลกระทบทางด้านลบที่เกิดจากการใช้เทคโนโลยีสารสนเทศด้านการเรียนการสอน   <br>";
echo $_POST["book10"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book10"]=="เครื่องมือที่ใช้ต้องมีความทันสมัย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

echo "<font color=blue><center>คะแนนรวม : </font>"."<font color=blue>$score</font>"."<br></center>";
?>

</body>
<div class="container">
        <div class="btn-group">
            <button onclick="window.location.href='project1.5.html'">กลับ</button>
        </div>
    </div>
</html>