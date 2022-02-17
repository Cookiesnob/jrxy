<?php
require('tool.php');

$XM = $_GET['id'];

if (find($tablename,$XM)){
    echo '{"code":1,"msg":"查询成功"}';
}else {
    echo '{"code":0,"msg":"查询失败"}';
}

?>