
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
        include_once "base.php";
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
            <table>
            <?php
                if(!empty($_GET['period'])){
                    $row=selectP("award", $_GET['period']);
                    ?> 
                    <tr>
                    <td>年度</td>
                    <td><?=$row["1"]?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>月份</td>
                    <td><?=$row['period']?></td>
                    <td>獎金</td>
                </tr>
                <tr>
                    <td>特別獎</td>
                    <td><?=$row['sp1']?></td>
                    <td>1000萬元</td>
                </tr>
                <tr>
                    <td>特獎</td>
                    <td><?=$row['sp2']?></td>
                    <td>200萬元</td>
                </tr>
                <tr>
                    <td>頭獎</td>
                    <td><?=$row['jackpot1']?><br>
                        <?=$row['jackpot2']?><br>
                        <?=$row['jackpot3']?></td>
                    </td>
                    <td>20萬元</td>
                </tr>
                <tr>
                    <td>二獎</td>
                    <td>末 7 位數號碼與頭獎中獎號碼末 7 位相同者</td>
                    <td>4萬元</td>
                </tr>
                <tr>
                    <td>三獎</td>
                    <td>末 6 位數號碼與頭獎中獎號碼末 6 位相同者</td>
                    <td>1萬元</td>
                </tr>
                <tr>
                    <td>四獎</td>
                    <td>末 5 位數號碼與頭獎中獎號碼末 5 位相同者</td>
                    <td>4千元</td>
                </tr>
                <tr>
                    <td>五獎</td>
                    <td>末 4 位數號碼與頭獎中獎號碼末 4 位相同者</td>
                    <td>1千元</td>
                </tr>
                <tr>
                    <td>六獎</td>
                    <td>末 3 位數號碼與頭獎中獎號碼末 3 位相同者</td>
                    <td>2百元</td>
                </tr>
                <tr>
                    <td>增開六獎</td>
                    <td><?=$row['six1']?><br>
                        <?=$row['six2']?><br>
                        <?=$row['six3']?></td>
                    </td>
                    <td>2百元</td>
                </tr>
                    <?php
                }
            ?>
            </table>
        </div>
    </div>
</body>
</html>