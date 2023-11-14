<?php
include("config.php");
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$ndate = $_POST['ndate'];
$deadline = $_POST['deadline'];
$announcer = $_POST['announcer'];

$result = mysqli_query($mysqli, "UPDATE activity SET act_title='$title',act_content='$content',act_date='$ndate',act_deadline='$deadline',act_announcer='$announcer' WHERE act_id='$id'");
header("Location: activity_edit.php?id=$id");

?>