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
echo "ข้อ 1 เป็นการเรียนทางไกลที่ผู้เรียนสามารถตอบโต้กับ ผู้สอนได้ โดยอาศัยเครือข่ายอินเตอร์เน็ต ซึ่งช่วยให้เรียนรู้ได้โดยไม่มีข้อจำกัดของเวลา ระยะทางและสถานที่โดยผู้เรียนสามารถที่จะเรียนรู้ได้ตลอดเวลา<br>";
echo $_POST["book1"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book1"]=="E-learning")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ2
echo "ข้อ 2 คุณลักษณะที่สำคัญของยุคเทคโนโลยีสารสนเทศ ข้อใดถูกต้องที่สุด<br>";
echo $_POST["book2"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book2"]=="สื่อสารข้อมูล และกำหนดกฎหรือระเบียบของการสื่อสาร")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ3
echo "ข้อ 3 ความคิดใหม่ เทคนิคใหม่ วิธีการใหม่ หรือสิ่งใหม่ที่สามารถนำมาใช้ให้เกิดประโยชน์ได้<br>";
echo $_POST["book3"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book3"]=="นวัตกรรม")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ4
echo "ข้อ 4 สาระความรู้ ความจริงที่สามารถนำไปใช้ถ่ายทอดสื่อสารนำไปใช้ศึกษา เป็นความหมายของข้อใด<br>";
echo $_POST["book4"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book4"]=="สารสนเทศ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ5
echo "ข้อ 5 การนำนวัตกรรมไปใช้ประกอบการสอนของครูอยู่ในขั้นตอนใดของการพัฒนา<br>";
echo $_POST["book5"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book5"]=="ขั้นดำเนินการ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ6
echo "ข้อ 6 ก่อนเริ่มใช้เทคโนโลยีผู้สอนควรทำสิ่งใดเป็นอันดับแรก<br>";
echo $_POST["book6"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book6"]=="แนะนำให้นักเรียนเข้าใจวิธีเรียน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ7
echo "ข้อ 7 ข้อใดเป็นการหาคุณภาพของเทคโนโลยีเบื้องต้น <br>";
echo $_POST["book7"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book7"]=="ให้ผู้เชี่ยวชาญด้านการเรียนการสอนในวิชานั้น ๆ ตรวจสอบความถูกต้องของเนื้อหาและการสื่อ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ8
echo "ข้อ 8 ไม่ใช่ลักษณะข้อมูลสารสนเทศของสถานศึกษาที่ดี<br>";
echo $_POST["book8"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book8"]=="เก็บในระยะเวลาเหมาะสม")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ9
echo "ข้อ 9 การนำเทคโนโลยีสารสนเทศมาใช้ในการจัดการศึกษา เพื่อเผยแพร่ข่าวสารประชาสัมพันธ์ระหว่างสถานศึกษากับผู้เกี่ยวข้องและบุคคลทั่วไป<br>";
echo $_POST["book9"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book9"]=="อินเตอร์เน็ต")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ10
echo "ข้อ 10 กระทรวงศึกษาธิการมีเป้าหมายการนำคอมพิวเตอร์และอินเตอร์เน็ตมาใช้กับการศึกษาด้านใด<br>";
echo $_POST["book10"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book10"]=="ถูกทุกข้อ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

echo "<font color=blue><center>คะแนนรวม : </font>"."<font color=blue>$score</font>"."<br></center>";
?>

</body>
<div class="container">
        <div class="btn-group">
            <button onclick="window.location.href='project1.5.html'">กลับ</button>
            <button onclick="window.location.href='ตอนที่5.html'">บทที่ 5</button>
        </div>
    </div>
</html>