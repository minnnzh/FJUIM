<?php

include("config.php");


$id = $_GET['id'];
$tb = $_GET['tb'];
$back = $_GET['back'];
$col = $_GET['col'];
$sql =  "DELETE FROM $tb WHERE $col='$id'";
echo $sql;
$result = mysqli_query($mysqli, $sql);

header("Location: $back.php");
?>

