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
            <a href="overview.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have new messages</li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have new notifications</li>
                                
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have new tasks</li>
                                
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../pages/login.html" class="btn btn-default btn-flat">Sign out</a>
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
                            <a href="overview.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#" onClick="displayTab(0)">
                                <i class="fa fa-list-alt"></i> <span>Subject</span>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a> 
                            <ul class="treeview-menu">
                              <li><a href="../pages/csubject.html"><i class="fa fa-angle-double-right"></i> Create Subject</a></li>
                              <li><a href="../pages/msubject.html"><i class="fa fa-angle-double-right"></i> Manage Subject</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" onClick="displayTab(1)">
                                <i class="fa fa-user"></i>
                                <span>Teacher</span>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Create Teacher</a></li>
                                <li><a href="../pages/mteacher.html"><i class="fa fa-angle-double-right"></i> Manage Teacher</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#" onClick="displayTab(2)">
                                <i class="fa fa-th"></i>
                                <span>Schedule</span>
                                <i class="fa fa-angle-down pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <li><a href="cbuild.html"><i class="fa fa-angle-double-right"></i> Create Building</a></li>
                              <li><a href="../pages/croom.html"><i class="fa fa-angle-double-right"></i> Create Room</a></li>
                              <!-- <li><a href="../pages/cdp.html"><i class="fa fa-angle-double-right"></i> Customize Day/Period</a></li> -->
                              <li><a href="../pages/csched.html"><i class="fa fa-angle-double-right"></i> Create Schedule</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../pages/calendar.html">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">soon</small>
                            </a>
                        </li>
                        <li>
                            <a href="../pages/mailbox.html">
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
                        Create Teacher
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Create Teacher</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div  class="form">
                    <form action = "cteacher.php" method = "post"> 
                        <p class="contact"><label for="lname">Last Name</label></p> 
                        <input id="lname" name="lname" placeholder="Last Name" required="" tabindex="1" type="text"> 
                         
                        <p class="contact"><label for="fname">First Name</label></p> 
                        <input id="fname" name="fname" placeholder="First Name" required="" tabindex="1" type="text"> 

                        <p class="contact"><label for="fname">Employee Number</label></p> 
                        <input id="enum" name="enum" placeholder="Employee Number" required="" tabindex="1" type="text"> 

                        <p class="contact"><label for="email">Email</label></p> 
                        <input id="email" name="email" placeholder="example@domain.com" type="email"> 

                        <fieldset>
                              <label>Birthday</label>
                              <label class="month"> 
                              <select class="select-style" name="birthmonth">
                              <option value="">Month</option>
                              <option  value="01">January</option>
                              <option value="02">February</option>
                              <option value="03" >March</option>
                              <option value="04">April</option>
                              <option value="05">May</option>
                              <option value="06">June</option>
                              <option value="07">July</option>
                              <option value="08">August</option>
                              <option value="09">September</option>
                              <option value="10">October</option>
                              <option value="11">November</option>
                              <option value="12" >December</option>
                              </label>
                              </select>    
                              <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" ></label>
                              <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year"></label>
                        </fieldset>
          
                        <select class="select-style gender" name="gender">
                        <option value="select">Gender</option>
                        <option value="m">Male</option>
                        <option value="f">Female</option>
                        <option value="others">Other</option>
                        </select><br><br>
                    
                        <p class="contact"><label for="phone">Mobile phone</label></p> 
                        <input id="phone" name="phone" placeholder="Phone Number" type="text"> <br>
                        <!-- <input class="buttom" name="submit" id="submit" tabindex="5" value="Create" type="submit">  -->
                        <button class="btn btn-success" name="submit" id="submit" tabindex="5" value="Create" type="submit">Submit</button>     
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