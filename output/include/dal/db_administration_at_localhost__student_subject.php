<?php
$dalTablestudent_subject = array();
$dalTablestudent_subject["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablestudent_subject["student"] = array("type"=>3,"varname"=>"student", "name" => "student", "autoInc" => "0");
$dalTablestudent_subject["subject"] = array("type"=>3,"varname"=>"subject", "name" => "subject", "autoInc" => "0");
$dalTablestudent_subject["id"]["key"]=true;

$dal_info["db_administration_at_localhost__student_subject"] = &$dalTablestudent_subject;
?>