<?php
include_once("base.php");
function letter( $repeat = ""){
    $letter = chr(rand(65,90));
    while( $letter == $repeat){
        $letter = chr(rand(65,90));
    };
    return($letter);
}

for( $i = 0; $i < 5000; $i++){
    $firstLetter = letter();
    $secondLetter = letter( $firstLetter);

    $num = rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) .rand(0,9) .rand(0,9) .rand(0,9);
    $data['year'] = 2019;
    $data['period'] = rand( 1, 6);
    $data['Enum'] = $firstLetter . $secondLetter;
    $data['num'] = $num;
    $data['expend'] = rand( 5, 2000);
    insert( "deposited", $data);
}

?>