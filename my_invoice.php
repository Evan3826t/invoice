<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的發票</title>
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
            text-align: center;
            box-sizing: border-box;
            padding: 20px;
        }
        .right{
            width: 600px;
            height: 100%;
            background-color: rgb(128, 114, 131);
            position: absolute;
            left: 200px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        include_once ("base.php");
    ?>
    <div class="main"> 
        <div class="left">
            <div><a href="my_invoice.php?period=1">1,2月</a></div>
            <div><a href="my_invoice.php?period=2">3,4月</a></div>
            <div><a href="my_invoice.php?period=3">5,6月</a></div>
            <div><a href="my_invoice.php?period=4">7,8月</a></div>
            <div><a href="my_invoice.php?period=5">9,10月</a></div>
            <div><a href="my_invoice.php?period=6">11,12月</a></div>
            <div><a href="index.html">回首頁</a></div>
        </div>
        <div class="right"> 
            <div>我的發票</div>
            <div style="overflow: auto; height: 550px;">
                <table>
                    <tr>
                        <td>號碼</td>
                        <td>金額</td>
                    </tr>
                <?php
                    if(!empty($_GET['period'])){
                        $row=selectFA("deposited", $_GET['period']);
                        foreach($row as $invoice){
                            ?>
                            <tr>
                                <td><?=$invoice['Enum']?>-<?=$invoice['num']?></td>
                                <td><?=$invoice['expend']?></td>
                            </tr>
                            <?php
                        }
                    }
                ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>