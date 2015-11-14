<?php

require("connect.php");


$sql1 = "INSERT INTO teacherstatus(teacher_id, status, rank)
		SELECT teacher_id, '$_POST[status]', '$_POST[rank]'
		FROM teacher
		WHERE employee_id='$_POST[enumber]'
		";

	if((($conn->query($sql1) == TRUE))){	
		echo '<script language="javascript">';
		echo 'alert("Record Successfully Updated!")';
		echo '</script>';	
		echo "<script>window.location.href='mteacher.php';</script>";
	}
	else
	{
		$sql1 = "UPDATE teacherstatus
				SET status='$_POST[status]', rank='$_POST[rank]'
				WHERE teacher_id=(SELECT teacher_id FROM teacher WHERE employee_id='$_POST[enumber]')
		";
		if((($conn->query($sql1) == TRUE))){
			echo '<script language="javascript">';
			echo 'alert("Record Successfully Updated!")';
			echo '</script>';	
			echo "<script>window.location.href='mteacher.php';</script>";
		}else
		{
			echo '<script language="javascript">';
			echo 'alert("Error updating record!")';
			echo '</script>';	
			echo "<script>window.location.href='mteacher.php';</script>";
		}
	}


$conn->close();
?>