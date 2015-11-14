<?php

require("connect.php");


$sql = "INSERT INTO 
			acad_year(acad_year)
 		values
 			('$_POST[ayear]')";

if($conn->query ($sql) == TRUE) {
	echo '<script language="javascript">';
	echo 'alert("New Record Created Successfully!")';
	echo '</script>';	
	echo "<script>window.location.href='cay.html';</script>";
} else {
	echo '<script language="javascript">';
	echo 'alert("Error: Duplicate Entry")';	
	echo '</script>';	
	echo "<script>window.location.href='cay.html';</script>";
	
}

$conn->close();
?>