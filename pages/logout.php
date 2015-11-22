<?php 
session_start();
session_destroy();
session_commit();
echo '<script language="javascript">';
echo 'alert("Logout Successfully!")';
echo '</script>';       
echo "<script>window.location.href='login.html';</script>";
exit();
?>
