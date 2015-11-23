<?php
require("connect.php");
//checka if subject_group_code is not empty then insert the ff values to schedule 

$sql = "DELETE FROM subject_group WHERE subject_code='$_POST[scode]'";
$conn->query($sql);

$sql = "DELETE FROM subject WHERE subject_code='$_POST[scode]'";
$conn->query($sql);

echo '<script>alert("Subject Successfully Deleted!")</script>';
echo "<script>window.location.href='msubject.php';</script>";	
$conn->close();

?>