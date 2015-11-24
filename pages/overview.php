<!-- Check if session is not registered, redirect back to login page. -->
<?php
require("connect.php");
session_start();
if(!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1){
    echo '<script language="javascript"> alert("You have to login first!")</script>';   
    echo "<script>window.location.href='login.html';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>USC Automatic Subject Scheduler</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />

    <link href="../css/ctabs.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
      <header class="header">
            <a href="overview.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu" id="just">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" onclick="Just()">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>CPE Admin<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/avatar.png" class="img-circle" alt="User Image" />
                                    <p>
                                        CPE Admin - System Adminstrator
                                        <small>Member since July 2015</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../img/avatar.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, CPE Admin</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="overview.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#" onClick="displayTab(0)">
                                <i class="fa fa-list-alt"></i> <span>Subject</span>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a> 
                            <ul class="treeview-menu">
                              <li><a href="csubject.php"><i class="fa fa-angle-double-right"></i> Create Subject</a></li>
                              <li><a href="msubject.php"><i class="fa fa-angle-double-right"></i> Manage Subject</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" onClick="displayTab(1)">
                                <i class="fa fa-user"></i>
                                <span>Teacher</span>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="cteacher.php"><i class="fa fa-angle-double-right"></i> Create Teacher</a></li>
                                <li><a href="mteacher.php"><i class="fa fa-angle-double-right"></i> Manage Teacher</a></li>
                                <li><a href="mteacher-exp.php"><i class="fa fa-angle-double-right" id="add-pad"></i> Add Expertise</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" onClick="displayTab(2)">
                                <i class="fa fa-th"></i>
                                <span>Schedule</span>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <li><a href="cbuild.php"><i class="fa fa-angle-double-right"></i> Create Building</a></li>
                              <li><a href="croom.php"><i class="fa fa-angle-double-right"></i> Create Room</a></li>
                              <li><a href="cay.php"><i class="fa fa-angle-double-right"></i> Create Acadamic Year</a></li>
                              <li><a href="cas.php"><i class="fa fa-angle-double-right"></i> Create Acadamic Sem</a></li>
                              <!-- <li><a href="index.html"><i class="fa fa-angle-double-right"></i> Customize Day/Period</a></li> -->
                              <li><a href="csched.php"><i class="fa fa-angle-double-right"></i> Create Schedule</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">soon</small>
                            </a>
                        </li>
                        <li>
                            <a href="mailbox.php">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-red">soon</small>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

        </div><!-- ./wrapper -->

        <div>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div id="toprint" >
                    <div align="center">
                        <!-- <form action="" method="post"> -->
                        <label>Year: </label>
                        <select class="select-style search" id="ayear" name="ayear" required="">
                        <option value="">Select Year</option>
                        <?php 
                                $sql = "SELECT * FROM acad_year";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<option>".$row["acad_year"]."</option>";
                                    }
                                } else {
                                    echo "NO RESULT";
                                }
                        ?>
                        </select>

                        <label id="pre-label-term">Term: </label>
                        <select class="select-style search" id="asem" name="asem" required="">
                        <option value="">Select Sem</option>
                        <?php 
                                $sql = "SELECT * FROM acad_sem";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<option>".$row["acad_sem"]."</option>";
                                    }
                                } else {
                                    echo "NO RESULT";
                                }
                        ?>
                        </select>
                        <label>Teacher:</label>
                        <select name="teacher" id="teacher" class="select-style gender"  required="">
                        <option value="">Select Teacher</option>
                        <?php
                            $sql = "SELECT * FROM teacher";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='".$row["teacher_id"]."'>".$row["lastname"]. ', ' .$row["firstname"]."</option>";
                                }
                            } else {
                                echo "NO RESULT";
                            }
                        ?>
                        </select>
                        <button id="go_button" class="btn btn" onClick="getOverview(document.getElementById('ayear').value, document.getElementById('asem').value, document.getElementById('teacher').value)">Go</button>
                        <button id="go_button" class="btn btn-info" onclick="window.print()" type="submit">Print</button>
                        <p></p>
                        <!-- </form> -->
                    </div>  
                    <div class="ttable" id="moverview">
                        <table class="table1">
                        <thead>
                            <tr>
                                <th></th>
                                <th abbr="Mon"><input class="ctime" type="text" value="Monday" name="mon"></th>
                                <th scope="col" abbr="Tue"><input class="ctime" type="text" value="Tuesday" name="tue"></th>
                                <th scope="col" abbr="Wed"><input class="ctime add" type="text" value="Wednesday" name="wed"></th>
                                <th scope="col" abbr="Thu"><input class="ctime" type="text" value="Thursday" name="thu"></th>
                                <th scope="col" abbr="Fri"><input class="ctime" type="text" value="Friday" name="fri"></th>
                                <th scope="col" abbr="Sat"><input class="ctime" type="text" value="Saturday" name="sat"></th>
                                <th scope="col" abbr="Sun"><input class="ctime" type="text" value="Sunday" name="sun"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="07:30 - 08:00 am" name="time_7_30am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" id="mon_7_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_7_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_7_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_7_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_7_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_7_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_7_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_7_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_7_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_7_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_7_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_7_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_7_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_7_30am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="08:00 - 08:30 am" name="time_8_00am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_8_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_8_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_8_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_8_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_8_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_8_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_8_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_8_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_8_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_8_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_8_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_8_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_8_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_8_00am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="08:30 - 09:00 am" name="time_8_30am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_8_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_8_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_8_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_8_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_8_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_8_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_8_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_8_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_8_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_8_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_8_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_8_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_8_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_8_30am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="09:00 - 09:30 am" name="time_9_00am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_9_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_9_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_9_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_9_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_9_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_9_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_9_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_9_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_9_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_9_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_9_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_9_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_9_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_9_00am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="09:30 - 10:00 am" name="time_9_30am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_9_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_9_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_9_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_9_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_9_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_9_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_9_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_9_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_9_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_9_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_9_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_9_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_9_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_9_30am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="10:00 - 10:30 am" name="time_10_00am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_10_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_10_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_10_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_10_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_10_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_10_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_10_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_10_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_10_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_10_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_10_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_10_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_10_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_10_00am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="10:30 - 11:00 am" name="time_10_30am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_10_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_10_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_10_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_10_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_10_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_10_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_10_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_10_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_10_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_10_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_10_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_10_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_10_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_10_30am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="11:00 - 11:30 am" name="time_11_00am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_11_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_11_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_11_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_11_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_11_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_11_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_11_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_11_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_11_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_11_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_11_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_11_00am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_11_00am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_11_00am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="11:30 - 12:00 am" name="time_11_30am"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_11_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_11_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_11_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_11_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_11_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_11_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_11_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_11_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_11_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_11_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_11_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_11_30am_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_11_30am"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_11_30am_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="12:00 - 12:30 pm" name="time_12_00nn"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_12_00nn"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_12_00nn_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_12_00nn"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_12_00nn_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_12_00nn"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_12_00nn_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_12_00nn"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_12_00nn_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_12_00nn"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_12_00nn_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_12_00nn"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_12_00nn_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_12_00nn"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_12_00nn_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="12:30 - 01:00 pm" name="time_12_30pm"> 
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_12_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_12_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_12_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_12_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_12_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_12_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_12_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_12_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_12_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_12_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_12_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_12_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_12_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_12_30pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="01:00 - 01:30 pm" name="time_1_00pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_1_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_1_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_1_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_1_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_1_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_1_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_1_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_1_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_1_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_1_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_1_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_1_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_1_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_1_00pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="01:30 - 02:00 pm" name="time_1_30pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_1_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_1_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_1_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_1_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_1_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_1_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_1_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_1_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_1_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_1_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_1_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_1_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_1_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_1_30pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="02:00 - 02:30 pm" name="time_2_00pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_2_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_2_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_2_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_2_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_2_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_2_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_2_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_2_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_2_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_2_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_2_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_2_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_2_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_2_00pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="02:30 - 03:00 pm" name="time_2_30pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_2_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_2_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_2_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_2_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_2_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_2_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_2_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_2_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_2_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_2_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_2_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_2_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_2_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_2_30pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="03:00 - 03:30 pm" name="time_3_00pm"> 
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_3_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_3_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_3_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_3_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_3_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_3_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_3_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_3_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_3_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_3_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_3_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_3_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_3_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_3_00pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="03:30 - 04:00 pm" name="time_3_30pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_3_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_3_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_3_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_3_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_3_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_3_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_3_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_3_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_3_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_3_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_3_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_3_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_3_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_3_30pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="04:00 - 04:30 pm" name="time_4_00pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_4_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_4_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_4_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_4_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_4_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_4_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_4_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_4_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_4_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_4_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_4_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_4_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_4_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_4_00pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="04:30 - 05:00 pm" name="time_4_30pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_4_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_4_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_4_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_4_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_4_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_4_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_4_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_4_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_4_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_4_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_4_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_4_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_4_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_4_30pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="05:00 - 05:30 pm" name="time_5_00pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_5_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_5_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_5_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_5_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_5_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_5_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_5_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_5_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_5_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_5_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_5_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_5_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_5_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_5_00pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="05:30 - 06:00 pm" name="time_5_30pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_5_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_5_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_5_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_5_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_5_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_5_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_5_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_5_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_5_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_5_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_5_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_5_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_5_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_5_30pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="06:00 - 06:30 pm" name="time_6_00pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_6_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_6_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_6_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_6_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_6_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_6_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_6_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_6_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_6_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_6_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_6_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_6_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_6_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_6_00pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="06:30 - 07:00 pm" name="time_6_30pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_6_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_6_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_6_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_6_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_6_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_6_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_6_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_6_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_6_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_6_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_6_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_6_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_6_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_6_30pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="07:00 - 07:30 pm" name="time_7_00pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_7_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_7_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_7_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_7_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_7_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_7_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_7_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_7_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_7_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_7_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_7_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_7_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_7_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_7_00pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="07:30 - 08:00 pm" name="time_7_30pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_7_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_7_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_7_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_7_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_7_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_7_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_7_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_7_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_7_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_7_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_7_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_7_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_7_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_7_30pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="08:00 - 08:30 pm" name="time_8_00pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_8_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_8_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_8_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_8_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_8_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_8_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_8_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_8_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_8_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_8_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_8_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_8_00pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_8_00pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_8_00pm_room"> 
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="pre-wrap">
                                        <input class="ctime plus" type="text" value="08:30 - 09:00 pm" name="time_8_30pm"> 
                                    </div>
                                </th>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="mon_8_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="mon_8_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="tue_8_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="tue_8_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="wed_8_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="wed_8_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="thu_8_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="thu_8_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="fri_8_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="fri_8_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sat_8_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sat_8_30pm_room"> 
                                </td>
                                <td> 
                                    <input class="ctime black" type="text" value="-----" name="sun_8_30pm"> 
                                    <input class="ctime black" type="text" value="-----" name="sun_8_30pm_room"> 
                                </td>
                            </tr>
                        </tbody>
                        </table>  
                    </div>
                </div>


                

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


    <!-- jQuery 2.0.2 -->
    <script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <!-- jQuery UI 1.10.3 -->
    <script src="../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script> 

    <script src="../js/ctabs.js"></script>    
  </body>
</html>