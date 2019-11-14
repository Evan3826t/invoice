<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        td{
            padding-top: 10px;
        }
        td:nth-child(1){
            width: 100px;
        }
        td:nth-child(2){
            width: 450px;
        }
        td:nth-child(3){
            width: 250px;
        }
        
    </style>
</head>
<body>
    <?php
    if(!empty( $_GET['status'])){
        if( $_GET['status'] == 1){
            echo "<script>alert('新增成功')</script>";
        }
        if( $_GET['status'] == 2){
            echo "<script>alert('新增失敗')</script>";
        }

    }
    ?>
    <div class="main">
        <div class="left">
            <h2><i class="fas fa-keyboard"></i> 輸入獎號</h2>
            <a class="back" href="index.html"><i class="fas fa-angle-double-left"></i>回首頁</a>
        </div>
        <div class="right">
            <form action="award_number_api.php" method="POST">
                <table>
                    <tr>
                        <td>年度</td>
                        <td><input type="text" id="year" name="year" maxlength="4"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>月份</td>
                        <td>
                            <select name="period" id="period">
                                    <option value="1">1,2月</option>
                                    <option value="2">3,4月</option>
                                    <option value="3">5,6月</option>
                                    <option value="4">7,8月</option>
                                    <option value="5">9,10月</option>
                                    <option value="6">11,12月</optio>
                            </select>
                        </td>
                        <td>獎金</td>
                    </tr>
                    <tr>
                        <td>特別獎</td>
                        <td><input type="text" id="sp1" name="sp1" maxlength="8"></td>
                        <td>1000萬元</td>
                    </tr>
                    <tr>
                        <td>特獎</td>
                        <td><input type="text" id="sp3" name="sp2" maxlength="8"></td>
                        <td>200萬元</td>
                    </tr>
                    <tr>
                        <td>頭獎</td>
                        <td><input type="text" id="jackpot1" name="jackpot1" maxlength="8"><br>
                            <input type="text" id="jackpot2" name="jackpot2" maxlength="8"><br>
                            <input type="text" id="jackpot3" name="jackpot3" maxlength="8">
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
                        <td><input type="text" id="six1" name="six1" maxlength="3"><br>
                            <input type="text" name="six2" id="six2" maxlength="3"><br>
                            <input type="text" id="six3" name="six3" maxlength="3">
                        </td>
                        <td>2百元</td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="送出"> </td>
                    </tr>
                </table>
                
            </form>
        
    </div>
</body>
</html>