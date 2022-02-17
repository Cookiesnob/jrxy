<?php
require('tool.php');

$XM = $_POST['user'];
$Piece = find($tablename,$XM);
$result = array();
foreach ($Piece as $row){
    $timec = strtotime($row['QJJSRQ']) - strtotime($row['QJKSRQ']);
    $resulte = 
    array(
        "id" =>$row['XM'],
        "userId"=>$row['XM'],
        "leaveType" =>"病假",
        "createTime" =>$row['QJFQRQ'],
        "startTime" =>$row['QJKSRQ'],
        "endTime" =>$row['QJJSRQ'],
        "totalDay" =>1,
        "status" =>"6",      //  6正在休假  2审批通过  1 待审批
        "expireDay" =>null,
        "isExtend" =>"0",
        "applyTime" =>"2021-12-03 08:14",
        "out" =>"0",
        "leaveTime" =>round($timec / 3600 / 24) ."天" . round($timec %86400/3600) ."小时" ,
        "startTimePC" =>"2021-12-03 14:00",
        "endTimePC" =>"2021-12-03 15:30",
        "leaveReason" =>"0",
        "shutDown" =>false,
        "actEndTime" =>"2021-12-03 15:30",
        "actEndTimeDesc" =>"1小时30分钟",
        "actStatus" =>"4",
        "isEarlyEnd" =>"0"
    );
    array_push($result,$resulte);    
        
    
    
};

$outcome = array(
    "code" =>1,
    "msg" =>"",
);
$outcome['msg'] = $result;
echo json_encode($outcome,JSON_UNESCAPED_UNICODE);


?>