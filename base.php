<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo = new PDO($dsn, 'root', '');

function selectAll( $table){
    global $pdo;
    $sql = "select * from $table ";
    return $pdo->query($sql)->fetchAll(); 
}

function selectFA( $table,$period){
    global $pdo;
    $sql = "select * from $table where `period`=$period";
    return $pdo->query($sql)->fetchAll(); 
}
function selectF( $table,$period){
    global $pdo;
    $sql = "select * from $table where `period`=$period";
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC); 
}
// $row = "`" . implode(",", array_keys( $table)) . "`";
// $value = "'" . implode(",", $data) . "'";

function countIN($table, $period){
    global $pdo;
    $sql = "select count(*) as num from $table where `period`=$period ";
    return $pdo->query($sql)->fetch();
}

function jackpot($value, $award, $Enum, $num){
    for($i= 0; $i< 6; $i++){
        if(substr($value, $i,8-$i) == substr($award, $i,8-$i)){
            switch($i){
                case 0:
                    $str ="20萬";
                    break;
                case 1:
                    $str = "4萬";
                    break;
                case 2:
                    $str = "1萬";
                    break;
                case 3:
                    $str = "4千";
                    break;
                case 4:
                    $str = "1千";
                    break;
                case 5:
                    $str = "2百";
                    break;
            }
            echo "<tr><td>發票號碼：".$Enum."-".$num ."</td><td>".$str."</td></tr>";
            break;
        }
    }
}

function sixAward($value, $award, $Enum, $num){
    if(substr($value, 5, 3) == $award){        
        echo "<tr><td>發票號碼：".$Enum."-".$num ."</td><td>2百</td></tr>";
    }
}
?>