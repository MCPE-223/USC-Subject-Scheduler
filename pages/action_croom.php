<?php

require("connect.php");



	$sql = "INSERT INTO 
			room( building_id, building_code, room_no, room_type)
			SELECT building_id, '$_POST[building_code]', '$_POST[rnum]', '$_POST[rtype]' 
			FROM building 
			WHERE building_code='$_POST[building_code]'";


if($conn->query ($sql) == TRUE) {
	echo '<script language="javascript">';
	echo 'alert("New Record Created Successfully!")';
	echo '</script>';	
	echo "<script>window.location.href='croom.php';</script>";
} else {
	echo '<script language="javascript">';
	echo 'alert("Duplicate Entry!")';
	echo '</script>';	
	echo "<script>window.location.href='croom.php';</script>";
}

$conn->close();
?>