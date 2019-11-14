<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>我的發票</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        td{
            width:200px;
            text-align:center;
        }
        .edit{
            font-size: 18px;
            padding: 2px;
            border: 2px solid black;
            border-radius: 25%;
            background-color: black;
        }
    </style>
</head>
<body>
    <?php
        include_once ("base.php");
    ?>
    <div class="main"> 
        <div class="left">
            <h2><i class="fas fa-piggy-bank"></i> 發票存摺</h2>
            <?php
            if(empty($_GET['period'])){
                $_GET['period'] ='';
            }
            if($_GET['period'] == 1){
                echo"<div class='btnA'><a href='my_invoice.php?period=1'>1,2月</a></div>";
            }else{
                echo"<div class='btn'><a href='my_invoice.php?period=1'>1,2月</a></div>";
            }
            if($_GET['period'] == 2){
                echo"<div class='btnA'><a href='my_invoice.php?period=2'>3,4月</a></div>";
            }else{
                echo"<div class='btn'><a href='my_invoice.php?period=2'>3,4月</a></div>";
            }
            if($_GET['period'] == 3){
                echo"<div class='btnA'><a href='my_invoice.php?period=3'>5,6月</a></div>";
            }else{
                echo"<div class='btn'><a href='my_invoice.php?period=3'>5,6月</a></div>";
            }
            if($_GET['period'] == 4){
                echo"<div class='btnA'><a href='my_invoice.php?period=4'>7,8月</a></div>";
            }else{
                echo"<div class='btn'><a href='my_invoice.php?period=4'>7,8月</a></div>";
            }
            if($_GET['period'] == 5){
                echo"<div class='btnA2'><a href='my_invoice.php?period=5'>9,10月</a></div>";
            }else{
                echo"<div class='btn'><a href='my_invoice.php?period=5'>9,10月</a></div>";
            }
            if($_GET['period'] == 6){
                echo"<div class='btnA3'><a href='my_invoice.php?period=6'>11,12月</a></div>";
            }else{
                echo"<div class='btn'><a href='my_invoice.php?period=6'>11,12月</a></div>";
            }

            // <div class="btn"><a href="my_invoice.php?period=2">3,4月</a></div>
            // <div class="btn"><a href="my_invoice.php?period=3">5,6月</a></div>
            // <div class="btn"><a href="my_invoice.php?period=4">7,8月</a></div>
            // <div class="btn"><a href="my_invoice.php?period=5">9,10月</a></div>
            // <div class="btn"><a href="my_invoice.php?period=6">11,12月</a></div>
             ?>
             <div class="back"><a href="index.html"><i class="fas fa-angle-double-left"></i>回首頁</a></div>
        </div>
        <div class="right"> 
            <div>我的發票</div>
            <div style="overflow: auto; height: 450px;">
                <table>
                    <tr>
                        <td>號碼</td>
                        <td>金額</td>
                        <td>編輯</td>
                    </tr>
                <?php
                    if(!empty($_GET['period'])){
                        $row=selectFA("deposited", $_GET['period']);
                        foreach($row as $invoice){
                            ?>
                            <tr>
                                <td><?=$invoice['Enum']?>-<?=$invoice['num']?></td>
                                <td><?=$invoice['expend']?></td>
                                <td><a class="edit" href="edit.php?period=<?=$_GET['period']?>&id=<?=$invoice['id']?>">修改</a>&nbsp&nbsp&nbsp<a class="edit" href="my_invoice.php?period=<?=$_GET['period']?>&del=<?=$invoice['id']?>">刪除</a></td>
                            </tr>
                            <?php
                            if(!empty($_GET['del'])){
                                del( "deposited", $_GET['del']);
                                // 重整頁面 0.01秒                    
                                header("location:http://localhost/invoice/my_invoice.php?period=" . $_GET['period']);
                            }
                            }
                           
                        }
                    
                ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>