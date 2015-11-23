<?php

require("connect.php");

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
}
else
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

// $conn->close();
?>