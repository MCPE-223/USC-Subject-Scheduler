<?php

require("connect.php");


$x = $_POST['offerings'];
for($i=65;$i<$x+65;$i++)
{
	// $scode_group = $_POST['scode'] . "_" . chr($i).;
	$scode_group = $_POST['scode'] . "_" . chr($i);
	$sql = "INSERT INTO subject_group (subject_code, subject_code_group) values ('$_POST[scode]', '$scode_group')";
	$conn->query($sql);
}

$sql = "INSERT INTO 
            subject (subject_code, subject_desc, units, contact_hours, offerings)
        values
            ('$_POST[scode]','$_POST[sdesc]','$_POST[units]','$_POST[chours]','$_POST[offerings]')";
if($conn->query($sql) == TRUE) {    
    echo '<script language="javascript">';
	echo 'alert("New Record Created Successfully!")';
	echo '</script>';	
	echo "<script>window.location.href='csubject.html';</script>";   
} else {
    echo '<script language="javascript">';
	echo 'alert("Duplicate Entry!")';
	echo '</script>';	
	echo "<script>window.location.href='csubject.html';</script>";
}

mysqli_close($conn);
?>