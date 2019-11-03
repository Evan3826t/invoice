
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>發票兌獎</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    
    
   
</head>
<body>
    <?php
        include_once "base.php";
    ?>
    <div class="main">
        <div class="left">
            <h2>兌獎區</h2>
            <?php
            if(empty($_GET['period'])){
                $_GET['period'] ='';
            }
            if($_GET['period'] == 1){
                echo"<div class='btnA'><a href='award.php?period=1'>1,2月</a></div>";
            }else{
                echo"<div class='btn'><a href='award.php?period=1'>1,2月</a></div>";
            }
            if($_GET['period'] == 2){
                echo"<div class='btnA'><a href='award.php?period=2'>3,4月</a></div>";
            }else{
                echo"<div class='btn'><a href='award.php?period=2'>3,4月</a></div>";
            }
            if($_GET['period'] == 3){
                echo"<div class='btnA'><a href='award.php?period=3'>5,6月</a></div>";
            }else{
                echo"<div class='btn'><a href='award.php?period=3'>5,6月</a></div>";
            }
            if($_GET['period'] == 4){
                echo"<div class='btnA'><a href='award.php?period=4'>7,8月</a></div>";
            }else{
                echo"<div class='btn'><a href='award.php?period=4'>7,8月</a></div>";
            }
            if($_GET['period'] == 5){
                echo"<div class='btnA2'><a href='award.php?period=5'>9,10月</a></div>";
            }else{
                echo"<div class='btn'><a href='award.php?period=5'>9,10月</a></div>";
            }
            if($_GET['period'] == 6){
                echo"<div class='btnA3'><a href='award.php?period=6'>11,12月</a></div>";
            }else{
                echo"<div class='btn'><a href='award.php?period=6'>11,12月</a></div>";
            }
            ?>
            <div><a class="back" href="index.html"><i class="fas fa-angle-double-left"></i>回首頁</a></div>

        </div>
        <div class="right">
            <form action="number_check.php" method="POST">
                <table>
                <?php
                    if(!empty($_GET['period'])){
                        $row=selectF("award", $_GET['period']);
                        ?> 
                        <tr>
                        <td>年度</td>
                        <td><?=$row["year"]?></td>
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
                <input type="hidden" id='period' name='period' value="<?=$_GET['period']?>">
                <input type="hidden" id='sp1' name='sp1' value="<?=$row['sp1']?>">
                <input type="hidden" id='sp2' name='sp2' value="<?=$row['sp2']?>">
                <input type="hidden" id='jackpot1' name='jackpot1' value="<?=$row['jackpot1']?>">
                <input type="hidden" id='jackpot2' name='jackpot2' value="<?=$row['jackpot2']?>">
                <input type="hidden" id='jackpot3' name='jackpot3' value="<?=$row['jackpot3']?>">
                <input type="hidden" id='six1' name='six1' value="<?=$row['six1']?>">
                <input type="hidden" id='six2' name='six2' value="<?=$row['six2']?>">
                <input type="hidden" id='six3' name='six3' value="<?=$row['six3']?>">
                <?php
                    if(!empty($_GET['period'])){
                        if(empty($row['six3'])){
                            echo "<span class='notYet'>未開獎</span>";
                        }else{
                            echo "<input type='submit' value='開獎'>";
                        }
                    }
                ?>          
            </form>
        </div>
    </div>
</body>
</html>