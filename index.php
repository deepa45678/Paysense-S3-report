<?php

ini_set('max_execution_time', 0);
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'db/db_connection.php';
$db = new db();
$con = $db->connect();
if($con) {
    // echo 'connect';
} else {
    echo 'Not connect';
    exit();
}

// while(mysqli_more_results($con)){mysqli_next_result($con);}
$sql="SELECT * FROM table_1manreport limit 10" ;
$result=$db->select($sql); 
foreach($result as $line){
    print_r($line);
    $Site=$line['Site'];
    $CallID=$line['CallID'];
    $CallType=$line['CallType'];
    $Campaign=$line['Campaign'];
    $Location=$line['Location'];
    $Skill=$line['Skill'];
    $CallDate=$line['CallDate'];
    $StartTime=$line['StartTime'];
    $TimetoAnswer=$line['TimetoAnswer'];
    $EndTime=$line['EndTime'];
    $TalkTime=$line['TalkTime'];
    $HoldTime=$line['HoldTime'];
    $Duration=$line['Duration'];
    $CallFlow=$line['CallFlow'];
    $DialedNumber=$line['DialedNumber'];
    $Agent=$line['Agent'];
    $Disposition=$line['Disposition'];
    $WrapupDuration=$line['wrapupDuration'];
    $HandlingTime=$line['HandlingTime'];
    $Status=$line['Status'];
    $DialStatus=$line['DialStatus'];
    $CustomerDialStatus=$line['CustomerDialStatus'];
    $AgentDialStatus=$line['AgentDialStatus'];
    $HangupBy=$line['HangupBy'];
    $TransferDetails=$line['TransferDetails'];
    $UUI=$line['UUI'];
    $comments=$line['comments'];

    // while(mysqli_more_results($con)){mysqli_next_result($con);}
    $sqli="CALL SP_Insert_table_3('$Site','$CallID', '$CallType', '$Campaign', '$Location', '$CallerNo', '$Skill','$CallDate', '$StartTime', '$TimetoAnswer', '$EndTime', '$TalkTime', '$HoldTime', '$Duration', '$CallFlow', '$DialedNumber', '$Agent', '$Disposition', '$WrapupDuration', '$HandlingTime', '$Status', '$DialStatus', '$CustomerDialStatus', '$AgentDialStatus', '$HangupBy', '$TransferDetails', '$UUI', '$comments')";
    $sql_result=$db->query($sqli);
    // $print_r($resultss)

}

// while(mysqli_more_results($con)){mysqli_next_result($con);}
$sql="SELECT * FROM table_2autoreport limit 5" ;
$result=$db->select($sql);
foreach($result as $line){
    print_r($line);
    $Site=$line['Site'];
    $CallID=$line['CallID'];
    $CallType=$CallType['CallType'];
    $Campaign=$Campaign['Campaign'];
    $Location=$Location['Location'];
    $Skill=$Skill['Skill'];
    $CallDate=$CallDate['CallDate'];
    $StartTime=$StartTime['StartTime'];
    $TimetoAnswer=$TimetoAnswer['TimetoAnswer'];
    $EndTime=$EndTime['EndTime'];
    $TalkTime=$TalkTime['TalkTime'];
    $HoldTime=$HoldTime['HoldTime'];
    $Duration=$Duration['Duration'];
    $CallFlow=$CallFlow['CallFlow'];
    $DialedNumber=$DialedNumber['DialedNumber'];
    $Agent=$Agent['Agent'];
    $Disposition=$Disposition['Disposition'];
    $WrapupDuration=$WrapupDuration['WrapupDuration'];
    $HandlingTime=$HandlingTime['HandlingTime'];
    $Status=$Status['Status'];
    $DialStatus=$DialStatus['DialStatus'];
    $CustomerDialStatus=$CustomerDialStatus['CustomerDialStatus'];
    $AgentDialStatus=$AgentDialStatus['AgentDialStatus'];
    $HangupBy=$HangupBy['HangupBy'];
    $TransferDetails=$TransferDetails['TransferDetails'];
    $UUI=$UUI['UUI'];
    $comments=$comments['comments'];

    // while(mysqli_more_results($con)){mysqli_next_result($con);}

    $sqli="CALL SP_Insert_table_3('$Site','$CallID', '$CallType', '$Campaign', '$Location', '$CallerNo', '$Skill','$CallDate', '$StartTime', '$TimetoAnswer', '$EndTime', '$TalkTime', '$HoldTime', '$Duration', '$CallFlow', '$DialedNumber', '$Agent', '$Disposition', '$WrapupDuration', '$HandlingTime', '$Status', '$DialStatus', '$CustomerDialStatus', '$AgentDialStatus', '$HangupBy', '$TransferDetails', '$UUI', '$comments')";
    $sql_result=$db->query($sqli);
}

?>