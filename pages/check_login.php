<?php

require("connect.php");

$myusername=$_POST['uname'];
$mypassword=$_POST['upassword'];
$mypassword=md5($mypassword);
// Mysql_num_row is counting table row
$sql ="SELECT * FROM user WHERE username = '$myusername' AND password = '$mypassword' ";
	$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
    	session_start();
    	$_SESSION['user_login_status'] = 1;
        $_SESSION['name'] = $row['name'];

        echo "<script>window.location.href='overview.php';</script>";
		// echo $myusername;
        }
    } else {
        echo '<script language="javascript">';
        echo 'alert("Wrong Credentials!")';
        echo '</script>';       
        echo "<script>window.location.href='login.html';</script>";
    }

$conn->close();
?>