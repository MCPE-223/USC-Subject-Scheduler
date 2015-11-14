<?php

require("connect.php");

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

// $newID = mysql_insert_id();

// echo $newID;
// die();



mysqli_close($conn);
?>