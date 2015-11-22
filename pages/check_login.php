<?php

require("connect.php");

$myusername=$_POST['uname'];
$mypassword=$_POST['upassword'];
$mypassword=md5($mypassword);
// Mysql_num_row is counting table row
$sql ="SELECT * FROM user WHERE username = '$myusername' AND password = '$mypassword' ";
	$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
    	session_start();
    	$_SESSION['user'] = $myusername;
    	$_SESSION['pass'] = $mypassword;
    	$_SESSION['user_login_status'] = 1;

        echo "<script>window.location.href='overview.php';</script>";
		// echo $myusername;
    } else {
        echo '<script language="javascript">';
        echo 'alert("Wrong Credentials!")';
        echo '</script>';       
        echo "<script>window.location.href='login.html';</script>";
    }

$conn->close();
?>