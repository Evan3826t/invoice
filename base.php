<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=invoice";
$pdo = new PDO($dsn, 'root', '');

function selectAll( $table){
    global $pdo;
    $sql = "select * from $table ";
    return $pdo->query($sql)->fetchAll(); 
}

function selectP( $table,$period){
    global $pdo;
    $sql = "select * from $table where `period`=$period";
    return $pdo->query($sql)->fetch(); 
}
// $row = "`" . implode(",", array_keys( $table)) . "`";
// $value = "'" . implode(",", $data) . "'";

?>