<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Quản lý thành viên</title>
</head>
<body>

</body>
</html>

<?php

include '../Model/DBConfig.php';
$database = new Database;
$database->connect();

if(isset($_GET['controller'])){
    $controller =  $_GET['controller'];
}else{
    $controller = "";
}


switch($controller){
    case 'thanh-vien':{
        require_once('../Controller/thanhvien/index1.php');
    }
}
?>
