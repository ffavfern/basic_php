<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างตัวแปร </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>

<body>
    <h3>Array</h3>
    <?php
    
    echo "------------------------------------<br>";
    $name = ['ใบเฟิร์น','ปงลังก๋า','จุฑามาศ','นาคตระกูล','ธีรารัตน์จิราพร'];
    $age = ['21','21','20','20','42'];
    echo ("ชื่อ ".$name[0].' '."อายุ ".$age[0]."<br>");
    echo ("ชื่อ ".$name[1].' '."อายุ ".$age[1]."<br>");
    echo ("ชื่อ ".$name[2].' '."อายุ ".$age[2]."<br>");
    echo ("ชื่อ ".$name[3].' '."อายุ ".$age[3]."<br>");
    echo ("ชื่อ ".$name[4].' '."อายุ ".$age[4]."<br>");    ?>
</body>

</html>