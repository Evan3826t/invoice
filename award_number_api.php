<?php
include_once "base.php";
$year = $_POST['year'];
$period = $_POST['period'];
$sp1 = $_POST['sp1'];
$sp2 = $_POST['sp2'];
$jackpot1 = $_POST['jackpot1'];
$jackpot2 = $_POST['jackpot2'];
$jackpot3 = $_POST['jackpot3'];
$six1 = $_POST['six1'];
$six2 = $_POST['six2'];
$six3 = $_POST['six3'];

$sql = "insert into `award`( `year`, `period`, `sp1`, `sp2`, `jackpot1`, `jackpot2`, `jackpot3`, `six1`, `six2`, `six3`) 
        VALUES ('$year', '$period', '$sp1', '$sp2', '$jackpot1', '$jackpot2', '$jackpot3', '$six1', '$six2', '$six3') ";
$pdo->query($sql);
header("location:award.php");

?>