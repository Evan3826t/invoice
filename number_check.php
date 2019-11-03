<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>發票兌獎</title>
    <style>
    .main{
        width: 400px;
        height: 700px;
        margin: auto;
        box-shadow: 5px 5px 5px black;
        border: 2px solid gray;
    }
    .top{
        background-color: rgb(61, 61, 61);

    color: white;

    }
    .overflow{
        overflow: auto;
        height: 575px;
    }
    </style>
</head>
<body>
    <?php
        include_once "base.php";
        $num = countIN("deposited", $_POST['period']);

    ?>
    <div class="main">
        <div class="top">
            <div>年分：</div>
            <div>期別：</div>
            <div>發票總數：<?=$num['num']?></div>
            <h2>兌獎結果</h2>
        </div>
        <div class="content">
            <tr class="overflow">
            <table>
                <tr>
                    <td>中獎發票</td>
                    <td>中獎金額</td>
                </tr>
                <?php
                $row = selectFA("deposited", $_POST['period']);
                foreach( $row as $value){


                    if($value['num'] == $_POST['sp1']){
                        echo "<tr><td>發票號碼：".$value['Enum']."-".$value['num'] ."</td><td>1000萬</td></tr>";
                    }
                    if($value['num'] == $_POST['sp2']){
                        echo "<tr><td>發票號碼：".$value['Enum']."-".$value['num'] ."</td><td>200萬</td></tr>";
                    }
                    jackpot($value['num'], $_POST['jackpot1'], $value['Enum'], $value['num']);
                    jackpot($value['num'], $_POST['jackpot2'], $value['Enum'], $value['num']);
                    jackpot($value['num'], $_POST['jackpot3'], $value['Enum'], $value['num']);
                    sixAward($value['num'], $_POST['six1'], $value['Enum'], $value['num']);
                    sixAward($value['num'], $_POST['six2'], $value['Enum'], $value['num']);
                    sixAward($value['num'], $_POST['six3'], $value['Enum'], $value['num']);
                

                }

                ?>
            </table>
        </div>
    </div>
</body>
</html>