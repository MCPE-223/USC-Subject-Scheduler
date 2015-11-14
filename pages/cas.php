<?php

require("connect.php");


$sql = "INSERT INTO 
			acad_sem(acad_sem)
 		values
 			('$_POST[asem]')";

if($conn->query ($sql) == TRUE) {
	echo '<script language="javascript">';
	echo 'alert("New Record Created Successfully!")';
	echo '</script>';	
	echo "<script>window.location.href='cas.html';</script>";
} else {
	echo '<script language="javascript">';
	echo 'alert("Error: Duplicate Entry")';	
	echo '</script>';	
	echo "<script>window.location.href='cas.html';</script>";
	
}

$conn->close();
?>