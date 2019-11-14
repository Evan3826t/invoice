<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo = new PDO($dsn, 'root', '123');

function selectAll( $table){
    global $pdo;
    $sql = "select * from $table ";
    return $pdo->query($sql)->fetchAll(); 
}

function selectFA( $table,$period){
    global $pdo;
    $sql = "select * from $table where period=$period";
    return $pdo->query($sql)->fetchAll(); 
}
function selectF( $table, $period){
    global $pdo;
    $sql = "select * from $table where `period`=$period";
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC); 
}
// $row = "`" . implode(",", array_keys( $table)) . "`";
// $value = "'" . implode(",", $data) . "'";

function selectId( $table, $id){
    global $pdo;
    $sql = "select * from $table where `id`=$id";
    echo $sql;
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC); 
}

function countIN($table, $period){
    global $pdo;
    $sql = "select count(*) as num from $table where `period`=$period ";
    return $pdo->query($sql)->fetch();
}

function insert( $table, $data){
    global $pdo;
    $row = "`" . implode("`,`", array_keys( $data)) . "`";
    $value = "'" . implode("','", $data) . "'";
    $sql = "insert into $table( $row) value ($value)";
    return $pdo->exec($sql);
}

function del( $table, $id){
    global $pdo;
    $sql = "delete from $table where `id`=$id";
    $pdo->exec($sql);
}

function update( $table, $id, $year, $period, $Enum, $num, $expend){
    global $pdo;
    $sql = "update $table set year=$year, period=$period, Enum='$Enum', num=$num, expend=$expend where id=$id";
    $pdo->exec( $sql);
}

function jackpot( $value, $award, $Enum, $num){
    $total= 0;
    for( $i= 0; $i< 6; $i++){
        if(substr( $value, $i,8-$i) == substr($award, $i,8-$i)){
            switch($i){
                case 0:
                    $reward = 200000;
                    $total+= 200000;
                    break;
                case 1:
                    $reward = 40000;
                    $total+= 40000;
                    break;
                case 2:
                    $reward = 10000;
                    $total+= 10000;
                    break;
                case 3:
                    $reward = 4000;
                    $total+= 4000;
                    break;
                case 4:
                    $reward = 1000;
                    $total+= 1000;
                    break;
                case 5:
                    $reward = 200;
                    $total+= 200;
                    break;
            }
            echo "<tr><td>發票號碼：".$Enum."-".$num ."</td><td>".$reward."</td></tr>";
            break;
        }
    }
    return $total;
}

function sixAward($value, $award, $Enum, $num){
    if(substr($value, 5, 3) == $award){        
        echo "<tr><td>發票號碼：".$Enum."-".$num ."</td><td>200</td></tr>";
    }
}
?>