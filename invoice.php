<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once("base.php");
$data['year'] = $_POST['year'];
$data['period'] = $_POST['period'];
$data['Enum'] = $_POST['Enum'];
$data['num'] = $_POST['num'];
$data['expend'] = $_POST['expend'];
insert( "deposited", $data);
header("location:index.html");

?>
</body>
</html>