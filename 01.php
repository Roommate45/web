<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<style>   
    body {
    background-color: #a9b8e0;        
    }
</style>  

    <div style="text-align: center;">
        <h2>ข้อสอบการใช้เทคโนโลยีดิจิทัลเพื่อการศึกษา</h2>
    <?php 
        echo "คุณ :".$_POST["name"]."<br>";
        echo "Email :".$_POST["Email"]."<br>";
    ?>
        <br>
        <button onclick="goToPage('ตอนที่1.html')">ข้อสอบบทที่ 1</button>
        <button onclick="goToPage('ตอนที่2.html')">ข้อสอบบทที่ 2</button>
        <button onclick="goToPage('ตอนที่3.html')">ข้อสอบบทที่ 3</button>
        <button onclick="goToPage('ตอนที่4.html')">ข้อสอบบทที่ 4</button>
        <button onclick="goToPage('ตอนที่5.html')">ข้อสอบบทที่ 5</button>
    </div>

    <script>
        function goToPage(page) {
            window.location.href = page;
        }

    </script>
</body>
</html>