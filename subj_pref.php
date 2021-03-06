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
    <title>IFSS | Subject Preference</title>
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
                    <li><a href="#" class="waves-effect active"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Faculty<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="subj_pref.php">Subject Preference</a></li>
                            <!-- <li><a href="faculty_members.php">Faculty Members</a></li> -->
                            <li><a href="student_eval.php">Student Evaluations</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedules<span class="fa arrow"></span></span></a>
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
                         <h4 class="page-title">Subject Preference</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Faculty</a></li>
                            <li class="active">Subject Preference</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">
                        <br>
                        <br>
                        
                        <div class="row">
                            <h2>Subject Preference Form/Intent to Teach</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                            <br>


                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Select Faculty:</label>
                                <select class="form-control">
                                    <option>--Faculty Member-</option>
                                    <option>Aldrin, Lily</option>
                                    <option>Eriksen, Marshall</option>
                                    <option>McConell, Tracy</option>
                                    <option>Mosby, Theodore</option>
                                    <option>Scherbatsky, Robin</option>
                                    <option>Stinson, Barney</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Email:</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <br>
                        <h3>Course Specialization</h3><br>
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Programming - C</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Programming - Java</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Programming - COBOL</label>
                            </div>
                        </div>

                         <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Programming - C#.Net</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Programming - Python</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Programming - VB.Net</label>
                            </div>
                        </div>

                         <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Programming - PHP</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Programming - ASP.Net</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Databases</label>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Data Structures and Algorithms</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Project Management</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Software Engineering</label>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Analysis and Design of Info. Systems</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Networking</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Computer Architecture</label>
                            </div>
                        </div>

                         <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Electronics</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Intelligent Systems</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Robotics/Mechatronics</label>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>E-commerce/E-business</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Management Information Systems</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Multimedia</label>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Operating Systems</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Web Development</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Automata and Theory of Computation</label>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Programming Languages</label>
                            </div>
                            <div class="col-md-3">
                                <input type="checkbox" name="subj">
                                <label>Modeling</label>
                            </div>
                            <div>
                                <input type="checkbox" name="subj">
                                <label>Technical Writing</label>
                            </div>
                        </div>
                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>

                        <div class="row">
                            <h2>Preferred Teaching Time</h2>
                        </div>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Monday</h3>
                                </div>

                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label>Other: </label>
                                    <input type="text" name="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Tuesday</h3>
                                </div>

                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label>Other: </label>
                                    <input type="text" name="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Wednesday</h3>
                                </div>

                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label>Other: </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                        </div>
                            
                        <br>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Thursday</h3>
                                </div>

                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label>Other: </label>
                                    <input type="text" name="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Friday</h3>
                                </div>

                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label>Other: </label>
                                    <input type="text" name="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Saturday</h3>
                                </div>

                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" name="subj">
                                    <label>Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label>Other: </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>
                        <h3 style="color: red;">BS in Information Technology</h3>
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>INTE 2013 - Hardware/Software Installation and Maintenance (CISCO IT Essentials)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 2033 - Programming 2 (Advanced C Language)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>INTE 2023 - Integrated Applicaiton Software (Photoshop CS5 and Basic Photography)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>INTE 3023 - Database Management System 1</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 3013 - Operating Systems</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 4033 - Network Administration (CCNA Exploration 2)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 3083 - Data and File Structures</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 3033 - Software Engineering</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 3043 - Web Development (HTML/CSS/Scripting and PHP)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>INTE 3043 - Systems Analysis and Design</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 1) INTE 4143 - Mobile and Network Applications</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 1) COMP 4193 - Switching & Wireless Networks Configuration (CCNA Exploration 3)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>INTE 4019 - Internship (9hrs / 9units)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>NONE</label>
                            </div>
                            
                        </div>

                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>
                        <h3 style="color: red;">BS in Computer Science</h3>
                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COSC 3073 - Fundamentals of Database Systems</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COSC 3083 - Automata and Language Theory</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COSC 3053 - Principles of Programming Languages</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 2083 - Technical Documentation and Presentation Skills in IT</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 3033 - Software Engineering</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COSC 3103 - Special Project in CS (Technology Innovation)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 3023 - Data Communication and Networking (CCNA Network Fundamentals)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COSC 3133 - Modeling and Simulation</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 1 - CNE Track) COMP 4183 - Router Configuration (CCNA Exploration 2)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 2 - CNE Track) COMP 4193 - Switching & Wireless Networks Configuration (CCNA Exploration 3)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 1 - CSR Track) COSC 4093 - Natural Language Processing</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 2 - CSR Track) COSC 4263 - Computational Intelligence</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 1 - ISD Track) COMP 4023 - Database Administration</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 2 - ISD Track) COMP 3063 - COBOL</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 1 - CGV Track) COSC 4253 - Principles of Game Design</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 2 - CGV Track) INTE 3013 - Multimedia</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 2063 - Professional Ethics</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COMP 4173 - Thesis Writing</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>COSC 3113 - Advanced Topics in CS (Seminars)</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 4 - CNE Track) COMP 4113 - Security: Issues and Principles</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 4 - CSR Track) COSC 4293 - Machine Translation</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 4 - ISD Track) INTE 4083 - Advanced Computing Techniques</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>(ELEC 4 - CGV Track) COMP 4093 - Platform Technologies</label>
                            </div>
                            <div class="col-md-12">
                                <input type="checkbox" name="subj">
                                <label>NONE</label>
                            </div>
                        </div>

                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>
                        <h3 style="color: red;">Remarks/Notes</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                               <h5 style="color: red;"><em>I understand that my application for subject preference does not guarantee that I will be given teaching assignments for courses and schedules stated above and that preference for the assignment of load shall follow University policies.</em></h5>
                                <input type="checkbox" name="subj">
                                <label>I agree</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-info">Submit</button>
                            </div>
                        </div>
            
                        <!-- <div class="row">
                            <div class="table-responsive col-md-3">
                                <caption>Course Specialization</caption>
                                <table id="c_specialization" class="table color-table inverse-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Courses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Programming - C</td>
                                        </tr>
                                         <tr>
                                            <td>Programming - JAVA</td>
                                        </tr>
                                         <tr>
                                            <td>Programming - COBOL</td>
                                        </tr>
                                         <tr>
                                            <td>Programming - PHP</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive col-md-6">
                                <caption>Preferred Teaching Time</caption>
                                <table id="c_specialization" class="table color-table inverse-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Day</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Monday</td>
                                            <td>Morning (7:30AM to 12:00NN)</td>
                                        </tr>
                                        <tr>
                                            <td>Monday</td>
                                            <td>Afternoon (12:00NN to 6:00PM)</td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday</td>
                                            <td>Morning (7:30AM to 12:00NN)</td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday</td>
                                            <td>Afternoon (12:00NN to 6:00PM)</td>
                                        </tr>
                                        <tr>
                                            <td>Thursday</td>
                                            <td>Morning (7:30AM to 12:00NN)</td>
                                        </tr>
                                        <tr>
                                            <td>Thursday</td>
                                            <td>Afternoon (12:00NN to 6:00PM)</td>
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td>Morning (7:30AM to 12:00NN)</td>
                                        </tr>
                                        <tr>
                                            <td>Friday</td>
                                            <td>Afternoon (12:00NN to 6:00PM)</td>
                                        </tr>
                                         <tr>
                                            <td>Saturday</td>
                                            <td>Morning (7:30AM to 12:00NN)</td>
                                        </tr>
                                        <tr>
                                            <td>Saturday</td>
                                            <td>Afternoon (12:00NN to 6:00PM)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="table-responsive col-md-3">
                                <caption>Course Specialization</caption>
                                <table id="c_specialization" class="table color-table inverse-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Courses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Programming - C</td>
                                        </tr>
                                         <tr>
                                            <td>Programming - JAVA</td>
                                        </tr>
                                         <tr>
                                            <td>Programming - COBOL</td>
                                        </tr>
                                         <tr>
                                            <td>Programming - PHP</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>  -->
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
