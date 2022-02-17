<?php
require('tool.php');

$XM = file_get_contents("php://input");
$XM = json_decode($XM,true)['id'];
$row = findAll($tablename,$XM);
$user = findAll($usertable,$XM);
$timec = strtotime($row['QJJSRQ']) - strtotime($row['QJKSRQ']);
$result = array(
    "code" =>"0",
    "message" =>"SUCCESS",
    "datas" => array(
        "condition" => array(
            "allowWithdraw" =>1,
            "reportTutorialUrl" =>"http://catqa.cpdaily.com/2018/10/24/如何销假?/",
            "reportTutorialTitle" =>"如何销假？",
            "shutDown" =>false
        ),
        "isReport" =>"0",    // 去销假按钮 0 没有  1 有
        "isExtend" =>"1",
        "isAllowedExtend" =>true,       //  底部修改
        "isPress" =>null,
        "nextApproveInfo" =>null,
        "leaveType" => array(
            "id" =>"2642",
            "code" =>2,
            "name" =>"病假",
            "mustOut" =>0,
            "reportApply" =>0
        ),
        "currApprover" =>null,
        "detail" => array(
            "id" =>"xxxx",
            "userId" =>"2xxxx",
            "userWid" =>null,
            "userName" =>"xx",
            "dormitoryInfo" =>"-",
            "gender" =>"1",
            "leaveType" =>$row['QJLX'],               // 顶部请假类型
            "startTime" =>date("Y-m-d H:i",strtotime($row['QJKSRQ'])),   // 开始时间  
            "endTime" =>date("Y-m-d H:i",strtotime($row['QJJSRQ'])),     //  结束时间
            "startDate" =>"2021-12-03 14:00",
            "endDate" =>"2021-12-03 15:30",
            "outStatus" =>false,    // 是否需要离校  false否  true离校
            "pressStatus" =>false,
            "urgencyMobile" =>"",
            "studentMobile" =>"1xxxx353",
            "approverName" =>"许xxx",
            "approverId" =>"202xxx4",
            "approverWid" =>"91xxx31",
            "leaveReason" =>$row['SQLY'],     //  请假理由
            "status" =>"2",
            "approverOpinion" =>"",
            "applyAttach" =>array(),        // 证明材料
            "reportAttach" =>array(),
            "reportLocation" =>null,
            "reportLongitude" =>null,
            "reportLatitude" =>null,
            "reportStatus" =>null,
            "reportLogs" =>array(),
            "createTime" =>"2021-12-03 08:14",
            "isResumptionSelf" =>null,
            "reportComment" =>null,
            "isOverdue" =>false,
            "lastOut" =>null,
            "dstStatus" =>"4",
            "leaveName" =>"病假",
            "mustOut" =>0,
            "sex" =>"男",
            "totalDays" =>round($timec / 3600 / 24) ."天" . round($timec %86400/3600) ."小时",   // 总计时间改写
            "ljDays" =>null,
            "leaveHour" =>"90",
            "logInfos" =>array(
                array(
                    "status" =>"1",
                    "createTime" =>"2021-12-03 08:14:12",
                    "delayStatus" =>null,
                    "nodeType" =>null,
                    "nodeName" =>null,
                    "approverWid" =>null,
                    "approverName" =>null,
                    "approveOption" =>null,
                    "leaveId" =>"exxxxx",
                    "extendId" =>null
                ),
                array(
                    "status" =>"3",
                    "createTime" =>"2021-12-03 09:50:10",
                    "delayStatus" =>null,
                    "nodeType" =>null,
                    "nodeName" =>null,
                    "approverWid" =>null,
                    "approverName" =>null,
                    "approveOption" =>null,
                    "leaveId" =>"efxxxxxxxxxxx",
                    "extendId" =>null
                )
            ),
            "approvers" =>array(
                array(
                    "level" =>null,
                    "status" =>"1",
                    "handled" =>true,
                    "createTime" =>$row['QJFQRQ'],    // 底部审核 （发起请假时间）
                    "delayStatus" =>null,
                    "approveOption" =>null,
                    "approveType" =>null,
                    "approver" => array(
                        "userWid" =>"1029671303",
                        "userId" =>"2xxxxx",
                        "userName" =>$row['XM'],            // 底部审核 （发起请假人姓名）
                    ),
                    "approveNode" =>array(
                        array(
                            "flowWid" =>null,
                            "nodeWid" =>null,
                            "nodeType" =>null,
                            "nodeName" =>null,
                            "approveWid" =>null,
                            "approveType" =>null,
                            "nodeIndex" =>null,
                            "nextNodeIndex" =>null,
                            "nextApproverIndex" =>null,
                            "approverName" =>null,
                            "approverId" =>null,
                            "approverWid" =>null,
                            "status" =>"1",
                            "approveOption" =>null,
                            "delayStatus" =>null,
                            "createTime" =>"2021-12-03 08:14:12",
                            "approvers" =>array()
                        )
                    )
                ),
                array(
                    "level" =>"1",
                    "status" =>"3",
                    "handled" =>true,
                    "createTime" =>$row['SHRQ'],       // 底部审核 （审批时间）
                    "delayStatus" =>false,
                    "approveOption" =>$row['SHYJ'],         // 审核意见
                    "approveType" =>null,
                    "approver" => array(
                        "userWid" =>"91864331",
                        "userId" =>"20xxxxxx",
                        "userName" =>$row['SHR']       // 底部审核 （审批姓名）
                    ),
                    "approveNode" =>array(              //  审批流程修改参数
                        array(
                            "flowWid" =>null,
                            "nodeWid" =>"1004",
                            "nodeType" =>"1",
                            "nodeName" =>"班任",
                            "approveWid" =>null,
                            "approveType" =>null,
                            "nodeIndex" =>"0",
                            "nextNodeIndex" =>null,
                            "nextApproverIndex" =>null,
                            "approverName" =>null,
                            "approverId" =>null,
                            "approverWid" =>"null",
                            "status" =>null,
                            "approveOption" =>null,
                            "delayStatus" =>false,
                            "createTime" =>"2021-12-03 08:14:12",
                            "approvers" =>array()
                        ),
                        array(
                            "flowWid" =>null,
                            "nodeWid" =>"1003",
                            "nodeType" =>"1",
                            "nodeName" =>"辅导员",
                            "approveWid" =>null,
                            "approveType" =>null,
                            "nodeIndex" =>"0",
                            "nextNodeIndex" =>null,
                            "nextApproverIndex" =>null,
                            "approverName" =>"许xxx",
                            "approverId" =>"20xx4",
                            "approverWid" =>"91xx31",
                            "status" =>"3",
                            "approveOption" =>"",
                            "delayStatus" =>false,
                            "createTime" =>"2021-12-03 09:50:10",
                            "approvers" =>array(
                                array(
                                    "userWid" =>"91864331",
                                    "userId" =>"20xx4",
                                    "userName" =>"许xx"
                                )
                            )
                        )
                    )
                )
            ),
            "leaveCreateTime" =>"2021-12-03 08:14",
            "locationType" =>0,
            "applyLocation" => array(
                "locationType" =>0,
                "address" =>$row['QJWZ'],      //  发起位置
                "longitude" =>"117.24063214538654",             // 直接百度经纬坐标即可
                "latitude" =>"31.767014803177048"
            ),
            "ccInfo" =>null,
            "actEndTime" =>"2021-12-03 16:30",     //  顶部结束时间
            "actEndTimeDesc" =>"1小时30分钟",      // 顶部时间总计
            "actStatus" =>"6",                      // 是否销假  8 已销假 6 正在休假
            "isEarlyEnd" =>"0",
            "disclaimers" =>"本人承诺填写的信息真实有效，并对本次提交请假申请的信息真实性负责。",
            "destination" =>""
        ),
        "leaveExtends" =>array(),
        "reportPlaces" =>array(
        ),
        "termination" => array(
            "allowTerminate" =>1,    //  提前结束按钮  0 无  1 有 未知但需要修改
            "terminated" =>0,
            "terminationObjectName" =>null,
            "terminationReason" =>null,
            "terminationDate" =>null
        ),
        "notOutReport" => array(
            "setedNotOutReport" =>1,
            "rule" =>0,
            "operatorWid" =>"92041511",
            "operatorId" =>"2xxx27",
            "operatorName" =>"xx",         //  顶部销假规则（操作人）
            "operatorDate" =>"2021-09-26 09:16:10"   //  顶部销假规则（开启时间）
        ),
        "studentInfo" => array(
            "userId" =>$user['XH'],          //  顶部个人信息修改（学号）
            "userWid" =>"1029671303",       
            "userName" =>$user['XM'],            //  顶部个人信息修改（姓名）
            "gender" =>1,
            "grade" =>$user['NJ'],               //  顶部个人信息修改（年级）
            "dept" =>$user['XY'],        //  顶部个人信息修改（学院）
            "major" =>$user['ZY'],       //  顶部个人信息修改（专业）
            "cls" =>$user['BJ'],       //  顶部个人信息修改（班级）
            "photo" =>null,
            "dorm" =>""
        ),
        "recordStatus" =>"6",       // 是否销假  8 已销假 6 正在休假
        "nowTime" =>date("Y-m-d H:i:s")   // 需要获取当前时间
    )
);

echo json_encode($result,JSON_UNESCAPED_UNICODE);
?>