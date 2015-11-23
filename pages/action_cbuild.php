<?php

require("connect.php");

$sql = "INSERT INTO 
            building (building_code, building_desc)
        values
            ('$_POST[bcode]','$_POST[bdesc]')";



if($conn->query($sql) == TRUE) {
	echo '<script language="javascript">alert("New Record Created Successfully!")</script>';
	echo "<script>window.location.href='cbuild.php';</script>";	
} else {
	echo '<script language="javascript">alert("Dupilcate Entry!")</script>';
	echo "<script>window.location.href='cbuild.php';</script>";
}

// $newID = mysql_insert_id();

// echo $newID;
// die();



mysqli_close($conn);
?>