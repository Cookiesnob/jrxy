<?php
$servername = "localhost";   // ip
$username = "username";      // mysql账号
$password = "password";      // mysql密码
$dbname = "dbname";            // 库名
$tablename = "tablename";     // 请求数据表名
$usertable = "usertable";      // 个人信息表名

$con = mysqli_connect($servername,$username,$password,$dbname) or die("数据库链接错误");

function findAll($table,$user){
    global $tablename,$con;
    $sql = "SELECT * FROM `$table` WHERE `XM` LIKE '$user'";
    $result=mysqli_query($con,$sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return end($row);   
    } else {
        echo '{"code":0,"msg":"暂无数据"}';
        exit;
    }
    
    mysqli_close($con);
}

function find($table,$user){
    global $tablename,$con;
    $sql = "SELECT * FROM `$table` WHERE `XM` LIKE '$user'";
    $result=mysqli_query($con,$sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $row;   
    } else {
        echo '{"code":0,"msg":"暂无数据"}';
        exit;
    }
    
    mysqli_close($con);
}



?>