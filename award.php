
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>發票兌獎</title>
    <style>
        .main{
            width: 800px;
            height: 600px;
            background-color: aquamarine;
            margin: auto;
            position: relative;
        }
        .left{
            width: 200px;
            height: 100%;
            background-color: blanchedalmond;
            position: absolute;
        }
        .right{
            width: 600px;
            height: 100%;
            background-color: rgb(128, 114, 131);
            position: absolute;
            left: 200px;
            padding: 50px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <?php
        include("base.php");
    ?>
    <div class="main">
        <div class="left">
            <h2>兌獎區</h2>
            <div><a href="award.php?period=1">1,2月</a></div>
            <div><a href="award.php?period=2">3,4月</a></div>
            <div><a href="award.php?period=3">5,6月</a></div>
            <div><a href="award.php?period=4">7,8月</a></div>
            <div><a href="award.php?period=5">9,10月</a></div>
            <div><a href="award.php?period=6">11,12月</a></div>
            <div><a href="index.html">回首頁</a></div>
        </div>
        <div class="right">
            
        </div>
    </div>
</body>
</html>