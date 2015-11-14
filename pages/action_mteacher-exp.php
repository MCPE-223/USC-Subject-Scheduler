<?php

require("connect.php");

$query = "SELECT teacher_id, subject_id
		FROM expertise
		WHERE teacher_id = (SELECT teacher_id FROM teacher WHERE employee_id='$_POST[enumber]')	
";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		  
		if(($row['employee_id'] == $_POST['enumber']) AND ($row['subject_code'] == $_POST['expertise']))
		{
			$sql1 = "UPDATE expertise
					SET no_of_years='$_POST[years]'
					WHERE teacher_id=(SELECT teacher_id FROM teacher WHERE employee_id='$_POST[enumber]')
			";
			if((($conn->query($sql1) == TRUE))){
				echo '<script language="javascript">';
				echo 'alert("Record Successfully Updated!")';
				echo '</script>';	
				echo "<script>window.location.href='mteacher-exp.php';</script>";
			}else
			{
				echo '<script language="javascript">';
				echo 'alert("Error updating record!")';
				echo '</script>';	
				echo "<script>window.location.href='mteacher-exp.php';</script>";
			}
		}
		// echo "Error deleting record: " . $conn->error;
	}
}
else
{
	$sql = "INSERT INTO expertise(teacher_id, subject_id, subject_code, employee_id, no_of_years)
	SELECT teacher_id, subject_id, '$_POST[expertise]', '$_POST[enumber]', '$_POST[years]'
	FROM teacher, subject
	WHERE employee_id='$_POST[enumber]' AND subject_code='$_POST[expertise]'
	";
	if(($conn->query($sql) == TRUE)) {	
		echo '<script language="javascript">';
		echo 'alert("Subject added to expertise!")';
		echo '</script>';	
		echo "<script>window.location.href='mteacher-exp.php';</script>";
	} else {
    echo "Error deleting record: " . $conn->error;
		// echo '<script language="javascript">';
		// echo 'alert("Duplicate Entry!")';
		// echo '</script>';	
		// echo "<script>window.location.href='mteacher-exp.php';</script>";
	} 
} 
    



$conn->close();
?>