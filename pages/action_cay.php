<?php
require("connect.php");
$sql = "INSERT INTO 
			acad_year(acad_year)
 		values
 			('$_POST[ayear]')";

if($conn->query ($sql) == TRUE) {
	echo '<script language="javascript">alert("New Record Created Successfully!")</script>';
	echo "<script>window.location.href='cay.php';</script>";
} else {
	echo '<script language="javascript">alert("Error: Duplicate Entry")</script>';
	echo "<script>window.location.href='cay.php';</script>";
	
}

$conn->close();
?>