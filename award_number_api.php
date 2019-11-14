<?php
include_once "base.php";
$data['year'] = $_POST['year'];
$data['period'] = $_POST['period'];
$data['sp1'] = $_POST['sp1'];
$data['sp2'] = $_POST['sp2'];
$data['jackpot1'] = $_POST['jackpot1'];
$data['jackpot2'] = $_POST['jackpot2'];
$data['jackpot3'] = $_POST['jackpot3'];
$data['six1'] = $_POST['six1'];
$data['six2'] = $_POST['six2'];
if(!empty($_POST['six3'])){
        $data['six3'] = $_POST['six3'];
}

if(insert( "award", $data)){
        header("location:award_number.php?status=1");
}else{
        header("location:award_number.php?status=2");    
}



?>