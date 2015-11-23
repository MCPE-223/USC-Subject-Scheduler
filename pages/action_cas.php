<?php
require("connect.php");
$sql = "INSERT INTO 
			acad_sem(acad_sem)
 		values
 			('$_POST[asem]')";

if($conn->query ($sql) == TRUE) {
	echo '<script language="javascript">alert("New Record Created Successfully!")</script>';
	echo "<script>window.location.href='cas.php';</script>";
} else {
	echo '<script language="javascript">alert("Error: Duplicate Entry")</script>';
	echo "<script>window.location.href='cas.php';</script>";
	
}

$conn->close();
?>