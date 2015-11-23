<?php
require("connect.php");
//checka if subject_group_code is not empty then insert the ff values to schedule 

$sql = "DELETE FROM subject_group WHERE subject_code='$_POST[scode]'";
$conn->query($sql);

$x = $_POST['offerings'];
for($i=65;$i<$x+65;$i++)
{
	$scode_group = $_POST['scode'] . " " . chr($i);
	$sql = "INSERT INTO subject_group (subject_code, subject_code_group) values ('$_POST[scode]', '$scode_group')";
	$conn->query($sql);
}

$sql = "UPDATE subject SET subject_desc='$_POST[sdesc]', units='$_POST[units]', contact_hours='$_POST[chours]', offerings='$_POST[offerings]' WHERE subject_code='$_POST[scode]'"; 
$conn->query ($sql);

echo '<script>alert("Subject Successfully Updated!")</script>';
echo "<script>window.location.href='msubject.php';</script>";	

$conn->close();

?>