<?php

require("connect.php");

$sql = "INSERT INTO 
			teacher (employee_id, lastname, firstname)
 		values
 			('$_POST[enum]','$_POST[lname]','$_POST[fname]')";



if($conn->query($sql) == TRUE) {	
	echo '<script language="javascript">';
	echo 'alert("New Record Created Successfully!")';
	echo '</script>';	
	echo "<script>window.location.href='cteacher.php';</script>";	
} else {
	echo '<script language="javascript">';
	echo 'alert("Duplicate Entry!")';
	echo '</script>';	
	echo "<script>window.location.href='cteacher.php';</script>";
}

// $newID = mysql_insert_id();

// echo $newID;
// die();



mysqli_close($conn);
?>