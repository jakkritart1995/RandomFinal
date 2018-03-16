
<?php
include ("Functiontimetable.php");
$conn = Connect();

$timeprim = 6;
$timesec = 4;
Findwar($conn, $maxlno, $maxlnoprim, $maxsnoprim, $maxlnosec);
CreateLevel($level,$conn);
$levelnum = CreateLevelnum($conn);
$subj = CreateSubject($maxlno,$conn, $Nsubj);
FindNsubj($maxlnoprim, $Nsubj, $maxsnoprim, $maxlnosec, $MaxNsubjprim, $MaxNsubjsec);
$educyear = 0;
$sem= 0;
calNDay($MaxNsubjprim,$MaxNsubjsec,$conn,$nDayprim,$nDaysec,$timeprim,$timesec,$educyear,$sem,$timetno);
$NewSubj_prim = array();
$NewSubj_sec = array();
SwitchSubj($maxlnoprim,$maxlnosec,$Nsubj,$subj,$NewSubj_prim,$NewSubj_sec);
$itable_prim = array();
$stable_prim = array();
$itable_sec = array();
$stable_sec = array();

Stable($maxlnoprim,$maxlnosec,$level,$nDayprim,$nDaysec,$conn,$timeprim,$timesec,$itable_prim,$stable_prim,$itable_sec,$stable_sec,$nroomprim,$nroomsec);
AssignType0_prim($maxlnoprim,$nDayprim,$levelnum,$timeprim,$level,$stable_prim,$NewSubj_prim,$Nsubj);
AssignType2_prim($maxlnoprim,$nDayprim,$timeprim,$level,$stable_prim,$NewSubj_prim,$Nsubj);
AssignType1_prim($maxlnoprim,$nDayprim,$levelnum,$timeprim,$level,$stable_prim,$NewSubj_prim,$Nsubj);
AssignType0_sec($maxlnoprim,$maxlnosec,$nDaysec,$levelnum,$timesec,$level,$stable_sec,$NewSubj_sec,$Nsubj);
AssignType2_sec($maxlnoprim,$maxlnosec,$nDaysec,$timesec,$levelnum,$level,$stable_sec,$NewSubj_sec,$Nsubj);
AssignType1_sec($maxlnoprim,$maxlnosec,$nDaysec,$levelnum,$timesec,$level,$stable_sec,$NewSubj_sec,$Nsubj);
SaveTable_prim($educyear,$sem,$nDayprim,$timeprim,$nroomprim,$stable_prim,$timetno,$conn);
SaveTable_sec($educyear,$sem,$nDaysec,$timesec,$nroomsec,$stable_sec,$timetno,$conn,$levelnum);
ShowTable($conn,$levelnum);





?>


