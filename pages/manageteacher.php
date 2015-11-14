<?php

require("connect.php");


$sql = "INSERT INTO teacherstatus(tid,employmentstatus,rank)
 values('nonpermanent','assistant instructor')";
if($cnn->query ($sql) == TRUE) {	
	echo "New Record Created Successfully!";
    header("location: cteacher.html");	
} else {
	echo "Error: " . $sql . "<br>" . $cnn->error;
} 

$sql = "INSERT INTO expertise(employeeid,lastname,firstname,email,birthdate,
gender,mobilenumber)
 values('$_POST[enum]','$_POST[lname]','$_POST[fname]', ' $_POST[email]', 
 '$bdate', '$_POST[gender]', '$_POST[phone]')";

if($cnn->query ($sql) == TRUE) {
	
	echo "New Record Created Successfully!";
    header("location: cteacher.html");	
	
} else {
	echo "Error: " . $sql . "<br>" . $cnn->error;
	
}



$cnn->close();
?>