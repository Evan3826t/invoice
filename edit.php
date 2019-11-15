<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>編輯</title>
    <style>
    .title{
    text-decoration: none;
    font-size: 24px;
    color: white;
    }
    .Enum{
        width: 50px;
    }
    .num{
        width: 150px;
    }
    td:not(:first-child){
        padding-left: 50px;
    }
    </style>
</head>
<body>
<div class="main">
            <div class="left">
                <div class="title"><i class="far fa-edit"></i> 編輯發票</div>
                <div class="back"><a href="my_invoice.php"><i class="fas fa-angle-double-left"></i>回上頁</a></div>

            </div>
            <div class="right">
                <table>
                    
                    <?php
                    include_once("base.php");
                    if(!empty($_GET['id'])){
                        $invoice = selectId( "deposited", $_GET['id']);
                    }
                    ?>
                    <form action="edit.php?period=<?=$_GET['period']?>" method="POST">
                    <tr>
                        <tr>
                            <td>年分</td>
                            <td><input type="text" value="<?=$invoice['year']?>" name='year' maxlength="4"></td>
                        </tr>
                        <tr>
                            <td>月份</td>
                            <td>
                                <select name="editPeriod">
                                <?php
                                if($_GET['period'] == 1){
                                    echo '<option value="1" SELECTED>1,2月</option>';
                                }else{
                                    echo '<option value="1">1,2月</option>';
                                }
                                if($_GET['period'] == 2){
                                    echo '<option value="2" SELECTED>3,4月</option>';
                                }else{
                                    echo '<option value="2">3,4月</option>';
                                }
                                if($_GET['period'] == 3){
                                    echo '<option value="3" SELECTED>5,6月</option>';
                                }else{
                                    echo '<option value="3">5,6月</option>';
                                }
                                if($_GET['period'] == 4){
                                    echo '<option value="4" SELECTED>7,8月</option>';
                                }else{
                                    echo '<option value="4">7,8月</option>';
                                }
                                if($_GET['period'] == 5){
                                    echo '<option value="5" SELECTED>9,10月</option>';
                                }else{
                                    echo '<option value="5">9,10月</option>';
                                }
                                if($_GET['period'] == 6){
                                    echo '<option value="6" SELECTED>11,12月</option>';
                                }else{
                                    echo '<option value="6">11,12月</option>';
                                }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>發票號碼</td>
                            <td><input class="Enum" type="text" value="<?=$invoice['Enum']?>" name="editEnum" maxlength="2" style="width:30px">-<input style="width:130px" class="num" type="text" value="<?=$invoice['num']?>" name="editNum" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td>花費</td>
                            <td><input type="text" value="<?=$invoice['expend']?>" name="editExpend"></td>
                        </tr>
                        <input type="hidden" value="<?=$_GET['id']?>" name="id">    
                        <tr>
                            <td><input type="submit" value="修改" class="sub"></td>
                        </tr>                           
                    </tr>                          
                    </form>
                    <?php
                    if(!empty( $_POST['editEnum'])){
                        update( "deposited", $_POST['id'], $_POST['year'], $_POST['editPeriod'], $_POST['editEnum'], $_POST['editNum'], $_POST['editExpend'], );
                        header("location:my_invoice.php");
                    }
                    ?>
                </table>
                
            </div>
        </div>
   
</body>
</html>
