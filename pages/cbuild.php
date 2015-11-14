<?php

require("connect.php");

$sql = "INSERT INTO 
            building (building_code, building_desc)
        values
            ('$_POST[bcode]','$_POST[bdesc]')";



if($conn->query($sql) == TRUE) {	
	echo '<script language="javascript">';
	echo 'alert("New Record Created Successfully!")';
	echo '</script>';	
	echo "<script>window.location.href='cbuild.html';</script>";	
} else {
	echo '<script language="javascript">';
	echo 'alert("Dupilcate Entry!")';
	echo '</script>';	
	echo "<script>window.location.href='cbuild.html';</script>";
}

// $newID = mysql_insert_id();

// echo $newID;
// die();



mysqli_close($conn);
?>