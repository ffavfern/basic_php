<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document </title>
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
    <center>
    <?php
    /* ถ้าเงินเดือนตั้งแต่ 10000 ให้ได้รับโบนัส 300%
	ถ้าเงินเดือนตั้งแต่ 50000 ให้ได้รับโบนัส 200%
	ถ้าเงินเดือนตั้งแต่ 100,000 ให้ได้รับโบนัส 100% */

    echo "<center><b> <h1>โปรแกรมเพื่อคำนวณ</h1></b></center><br>";
    $sarary = 50000;
    if($sarary >= 10000){
        $bonus = $sarary*3;
        $money = $sarary+$bonus;
        echo "เงินเดือน : ".$sarary." บาท"."<br> ได้รับโบนัส 300% : ".$bonus." บาท"."<br> เงินเดือนสุทธิ : ".$money;
    }elseif($sarary >= 50000){
        $bonus = $sarary*2;
        $money = $sarary+$bonus;
        echo "เงินเดือน : ".$sarary." บาท"."<br> ได้รับโบนัส 200% : ".$bonus." บาท"."<br> เงินเดือนสุทธิ : ".$money;
    }elseif($sarary >= 100000){
        $bonus = $sarary*1;
        $money = $sarary+$bonus;
        echo "เงินเดือน : ".$sarary." บาท"."<br> ได้รับโบนัส 100% : ".$bonus." บาท"."<br> เงินเดือนสุทธิ : ".$money;
    }else{
        echo "เงินเดือน : ".$sarary." บาท ไม่ได้รับโบนัส".'<br>'." เงินเดือนสุทธิ : ".$sarary;
    }

    
        ?>
        </center>
</body>

</html>