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
    <!-- Theme style -->
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
                              <li><a href="../pages/csubject.php"><i class="fa fa-angle-double-right"></i> Create Subject</a></li>
                              <li><a href="#"><i class="fa fa-angle-double-right"></i> Manage Subject</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" onClick="displayTab(1)">
                                <i class="fa fa-user"></i>
                                <span>Teacher</span>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../pages/cteacher.php"><i class="fa fa-angle-double-right"></i> Create Teacher</a></li>
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
                              <!-- <li><a href="cdp.html"><i class="fa fa-angle-double-right"></i> Customize Day/Period</a></li> -->
                              <li><a href="csched.php"><i class="fa fa-angle-double-right"></i> Create Schedule</a></li>
                              <li><a href="cclasses.php"><i class="fa fa-angle-double-right"></i> Create Classes</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">soon</small>
                            </a>
                        </li>
                        <li>
                            <a href="../pages/mailbox.php">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-red">soon</small>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Subject
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Manage Subject</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div  class="form">
                    <form id="msubjectform" method="post"> 
                        
                        <p class="contact"><label>Subject Code</label></p>
                        <select id="scode" class="select-style gender" name="scode" onchange="getSubject(this.value);" required="">
                        <?php
                            $sql = "SELECT * FROM subject order by subject_code";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result) > 0) {
                                echo "<option value=''> Select Subject </option> ";
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='".$row["subject_code"]."'>".$row["subject_code"]."</option>";
                                }
                            } else {
                                echo "NO RESULT";
                            }
                        ?> 
                        </select>
                        <div name="sub-wrapper" id="sub-wrapper">
                            <p class="contact"><label>Subject Description</label></p>
                            <input class="sample" id="sdesc" name="sdesc" value="" placeholder="Subject Description" required="" tabindex="1" type="text"> 

                                                  
                            <p class="contact"><label for="fname">Units</label></p> 
                            <input id="units" name="units" placeholder="Units" required="" tabindex="1" type="text"> 
                    
                            <p class="contact"><label for="fname">Class Hours</label></p> 
                            <input id="chours" name="chours" placeholder="Class Hours" required="" tabindex="1" type="text"> 
                            <p class="contact"><label >Offerings</label></p> 
                            <input id="offerings" name="offerings" placeholder="Offerings" required="" tabindex="1" type="text">
                        </div>
                        <!-- <input class="buttom" name="submit" id="submit" tabindex="5" value="Create" type="submit">  -->
                        <button class="btn btn-info" name="submit" id="submit" tabindex="5" value="save" type="submit" onclick="mSubject(0);">Save</button> 
                        <button class="btn btn-danger" name="delete" id="delete" tabindex="10" value="delete" type="submit" onclick="mSubject(1);">Delete</button>     
                     </form> 
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