<?php
include_once("config.php");

if(isset($_POST['act_id'])){
    $act_id = $_POST['act_id'];
    $act_title = $_POST['act_title'];
    $act_content = $_POST['act_content'];
    $act_date = $_POST['act_date'];
    $act_deadline = $_POST['act_deadline'];
    $act_announcer = $_POST['announcer'];
    $sql = "INSERT INTO activity(act_id,act_title,act_content,act_date,act_deadline,act_announcer) VALUES('$act_id','$act_title','$act_content','$act_date','$act_deadline','$act_announcer')";
    mysqli_query($mysqli,$sql);
    header('location: activity_management.php');
}
else echo "!!!";
?>