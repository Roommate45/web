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
    <div style="text-align:left;">
    </div>


<?php

$score=0;

//ประมวลข้อ1
echo "ข้อ 1 ข้อใดเขียนคำว่า เทคโนโลยีสารสนเทศ ได้ถูกต้อง<br>";
echo $_POST["book1"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book1"]=="Information Technology")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ2
echo "ข้อ 2 ข้อใดคือคำที่ประกอบกันแล้วมีความหมายเหมือนกับคำว่า IT<br>";
echo $_POST["book2"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book2"]=="เทคโนโลยี สารสนเทศ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ3
echo "ข้อ 3 ข้อใดเป็นความหมายของเทคโนโลยีสารสนเทศที่ถูกต้องมากที่สุด<br>";
echo $_POST["book3"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book3"]=="การนำความรู้ทางด้านวิทยาศาสตร์มาประยุกต์ใช้เพื่อสร้างหรือจัดการกับสารสนเทศอย่างเป็นระบบ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ4
echo "ข้อ 4 ใครใดคือ พลเมืองดิจิทัล<br>";
echo $_POST["book4"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book4"]=="ซีมีความสามารถในการใช้เทคโนโลยี และสื่อดิจิทัลเป็นประจำได้อย่างปลอดภัย")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ5
echo "ข้อ 5 เมื่อนักเรียนได้รับข้อความต่อไปนี้ในช่องทางแชท Facebook และ Line นักเรียนคิดว่าควรปฏิบัติตนอย่างไร <br>
'เดือนนี้ เป็นเดือนพิเศษ มี 5 ศุกร์ 5 เสาร์ 5 อาทิตย์ 888 ปีจะมีครั้ง เรียกว่าถุงเงิน ตามตำราฮวงจุ้ยส่งต่อ 5 คน จะโชคดี'<br>";
echo $_POST["book5"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book5"]=="ควรปรึกษาครูหรือผู้ปกครอง")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ6
echo "ข้อ 6 พลเมืองดิจิทัลจะต้องมีความรับผิดชอบด้านใดบ้าง<br>";
echo $_POST["book6"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book6"]=="ถูกทุกข้อ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ7
echo "ข้อ 7 ต้นกล้าปิดเครื่องคอมพิวเตอร์และถอดปลั๊กเมื่อใช้งานเสร็จในห้องสมุด ต้นกล้ามีความรับผิดชอบด้านใด<br>";
echo $_POST["book7"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book7"]=="ความรับผิดชอบต่อชุมชน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ8
echo "ข้อ 8 นักเรียนได้รับประโยชน์จากเทคโนโลยีสารสนเทศด้านใดมากที่สุด<br>";
echo $_POST["book8"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book8"]=="ค้นคว้าหาความรู้ได้สะดวกยิ่งขึ้น")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ9
echo "ข้อ 9 ข้อใดไม่ใช่การประมวลผลข้อมูล<br>";
echo $_POST["book9"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book9"]=="ปูสัมภาษณ์เพื่อน ๆ เรื่องการเดินทางมาโรงเรียน")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

//ประมวลข้อ10
echo "ข้อ 10 ข้อใดแสดงความสัมพันธ์ระหว่างข้อมูลและสารสนเทศได้ถูกต้อง<br>";
echo $_POST["book10"]."<br>";
//ตรวจสอบให้คะแนน
if ($_POST["book10"]=="ข้อมูล ->การประมวลผล ->สารสนเทศ")
{echo "<font color=green>ถูกต้อง</font>"."<br>";$score++;}
else
{echo "<font color=red>ไม่ถูกต้อง</font>"."<br>";}

echo "<font color=blue><center>คะแนนรวม : </font>"."<font color=blue>$score</font>"."</center><br>";
?>

</body>
<div class="container">
        <div class="btn-group">
            <button onclick="window.location.href='project1.5.html'">กลับ</button>
            <button onclick="window.location.href='ตอนที่2.html'">บทที่ 2</button>
        </div>
    </div>
</html>