<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-horizontal-nav-fullwidth/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Mar 2018 02:42:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/plugins/images/fss_icon.png">
    <title>IFSS | New Schedule</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="assets/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="assets/www.w3schools.com/lib/w3data.js"></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header" style="background-color: #2D3640;"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a href="index.php"><span><img src="assets/plugins/images/header.png" alt="home" height="60px" style="margin-left: 10px;" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <!-- <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="#"><i class="fa fa-search"></i></a>
                        </form>
                    </li> -->
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="assets/plugins/images/users/john.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Michael John</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="ti-user"></i> My Notifications</a></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li> <a href="index.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Dashboard<span class="fa arrow"></span> </span></a>
                    </li>
                    <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Manage<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="accounts.php">Accounts</a></li>
                            <li><a href="curriculum.php">Curriculum</a></li>
                            <li><a href="sections.php">Sections</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Faculty<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="subj_pref.php">Subject Preference</a></li>
                            <!-- <li><a href="faculty_members.php">Faculty Members</a></li> -->
                            <li><a href="student_eval.php">Student Evaluations</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect active"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedules<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="new_sched.php">Create New</a></li>
                            <li><a href="update_shed.php">Update Existing</a></li>
                            <li><a href="view_schedules.php">View Schedules</a></li>
                        </ul>
                    </li>
                     <li><a href="rooms_and_labs.php" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Rooms and Labs<span class="fa arrow"></span></span></a>
                    </li>
                     <li><a href="services.php" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Services<span class="fa arrow"></span></span></a>
                    </li>
                    <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Reports<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="reports_subj_offer.php">Subject Offerings</a></li>
                            <li><a href="reports_fac_sched.php">Teaching Assignments</a></li>
                            <li><a href="reports_room_sched.php">Room Schedules</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">New Schedule</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Schedules</a></li>
                            <li class="active">Create New Schedule</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">
                        <br>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-9">
                                <h2>Plotting Form (CREATION)</h2>
                            </div>
                            <div class="col-md-3">
                                <button style="margin-top: 10px; margin-left: 90px;" type="button" class="btn btn-success" disabled="">AUTO GENERATE SCHEDULE</button>
                            </div>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control">
                                    <option>2018-2019</option>
                                    <option>2020-2021</option>
                                    <option>2021-2022</option>
                                    <option>2022-2023</option>
                                    <option>2023-2024</option>
                                    <option>2024-2025</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Semester</label>
                                <select class="form-control">
                                    <option>1st</option>
                                    <option>2nd</option>
                                </select>   
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Faculty:</label>
                                <select class="form-control">
                                    <option>--Faculty Member--</option>
                                    <option>Aldrin, Lily</option>
                                    <option>Eriksen, Marshall</option>
                                    <option>McConell, Tracy</option>
                                    <option selected="">Mosby, Theodore</option>
                                    <option>Scherbatsky, Robin</option>
                                    <option>Stinson, Barney</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Subject:</label>
                                <select class="form-control">
                                    <option>--Subjects--</option>
                                    <option>INTE 3023 - Database Management System 1</option>
                                    <option>INTE 3043 - Systems Analysis and Design</option>
                                    <option>COMP 3013 - Operating Systems</option>
                                    <option>COMP 3083 - Data and File Structures</option>
                                    <option>INTE 2023 - Integrated Applicaiton Software (Photoshop CS5 and Basic Photography)</option>

                                </select>    
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Section:</label>
                                <select class="form-control">
                                    <option>--Section--</option>
                                    <option>1</option>
                                    <option>1N</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>    
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2" style="text-align: right; color: red;">
                                <p>Allowed units:</p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p>Regular Load: 15</p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p>Part-time Load: 12</p>
                            </div>
                            <div class="col-md-3" style="text-align: right;">
                                <p>Temporary Substitution: 0</p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p>Total Units Used: 0</p>
                            </div>
                        </div>

                         <br><br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div>
                        <br><br>

                        <div class="row">
                            <table id="tbl_sec_sched" width='100%' cellspacing='0' cellpadding='0' style='border:1px #000000 solid;background:#FFFFFF;'>
<tr><th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>&nbsp;</th><th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Monday</th><th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Tuesday</th><th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Wednesday</th><th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Thursday</th><th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Friday</th><th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Saturday</th><th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Sunday</th></tr><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>07:00 AM</font><br>07:30 AM<br><font style='font-size:9px;'>07:59 AM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled>7:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00AM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled>7:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30AM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>08:00 AM</font><br>08:30 AM<br><font style='font-size:9px;'>08:59 AM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled>8:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00AM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled>8:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30AM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>09:00 AM</font><br>09:30 AM<br><font style='font-size:9px;'>09:59 AM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled>9:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00AM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled>9:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30AM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>10:00 AM</font><br>10:30 AM<br><font style='font-size:9px;'>10:59 AM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">10:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:00AM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">10:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">10:30AM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>11:00 AM</font><br>11:30 AM<br><font style='font-size:9px;'>11:59 AM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">11:00AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:00AM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">11:30AM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">11:30AM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>12:00 PM</font><br>12:30 PM<br><font style='font-size:9px;'>12:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:00NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:00NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:00NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:00NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:00NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">12:00NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:00NN</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:30NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:30NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:30NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:30NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:30NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">12:30NN</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">12:30NN</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>01:00 PM</font><br>01:30 PM<br><font style='font-size:9px;'>01:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">1:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">1:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">1:30PM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>02:00 PM</font><br>02:30 PM<br><font style='font-size:9px;'>02:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">2:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">2:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">2:30PM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>03:00 PM</font><br>03:30 PM<br><font style='font-size:9px;'>03:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">3:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">3:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">3:30PM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>04:00 PM</font><br>04:30 PM<br><font style='font-size:9px;'>04:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">4:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">4:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">4:30PM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>05:00 PM</font><br>05:30 PM<br><font style='font-size:9px;'>05:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">5:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">5:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">5:30PM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>06:00 PM</font><br>06:30 PM<br><font style='font-size:9px;'>06:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">6:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">6:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">6:30PM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>07:00 PM</font><br>07:30 PM<br><font style='font-size:9px;'>07:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">7:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">7:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">7:30PM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>08:00 PM</font><br>08:30 PM<br><font style='font-size:9px;'>08:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">8:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">8:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">8:30PM</button></td><tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>09:00 PM</font><br>09:30 PM<br><font style='font-size:9px;'>09:59 PM</font></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">9:00PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:00PM</button></td></tr>
<tr><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-warning" style="width:150px;" disabled="">9:30PM</button></td><td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;">9:30PM</button></td></table>            </td>
            </tr>
    </table>
</div>

                <br>
                <h3 style="color: red;">Conflict Results:</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                   
                        </div>
            
                    </div>
                </div>
              
                <!-- /.row -->
                <!-- .right-sidebar -->
            </div>
             <!-- /.right-sidebar -->
            </div>

           
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Faculty Scheduling System</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/dist/js/tether.min.js"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
   
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!--Style Switcher -->
    <script src="assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-horizontal-nav-fullwidth/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Mar 2018 02:47:45 GMT -->
</html>
