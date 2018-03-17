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
    <title>CCIS | OFSS</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
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
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'assets/www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
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
                    <li><a href="#" class="waves-effect active"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Manage<span class="fa arrow"></span></span></a>
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
                    <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Schedules<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="new_sched.php">Create New</a></li>
                            <li><a href="update_shed.php">Update Existing</a></li>
                            <li><a href="my_sched.php">My Schedule</a></li>
                        </ul>
                    </li>
                     <li><a href="rooms_and_labs.php" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Rooms and Labs<span class="fa arrow"></span></span></a>
                    </li>
                     <li><a href="services.php" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Services<span class="fa arrow"></span></span></a>
                    </li>
                    <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Reports<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="reports_subj_offer.php">Subject Offerings</a></li>
                            <li><a href="reports_fac_sched.php">Faculty Schedule</a></li>
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
                         <h4 class="page-title">Manage Accounts</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Manage</a></li>
                            <li class="active">Accounts</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">List of Accounts</h3>
                            <br>    
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Account</label>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger"><span class="fa fa-trash-o"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Delete Account</label>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-2">
                                    <span style="margin-top: 5px;">
                                    <label class="control-label">records per page</label>
                                    <select style="size: 100px;">
                                        <option>10</option>
                                        <option>50</option>
                                        <option>100</option>
                                    </select>
                                    </span>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" id="search_input" onkeyup="searchTable()" placeholder="search account">
                                </div>
                            </div>
                            <br>
                            <form>
                                <table class="table color-table inverse-table table-striped table-bordered table-condensed" id="account-table">
                                <thead>
                                    <tr>
                                        <th>FACULTY ID</th>
                                        <th>FACULTY NAME</th>
                                        <th>FACULTY TYPE</th>
                                        <th>CONTACT #</th>
                                        <th style="width: 300px;">EMAIL</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                     <tr>
                                        <td>123-456</td>
                                        <td>Ducut, Michael John deLeon</td>
                                        <td>Admin</td>
                                        <td>09568341243</td>
                                        <td>michaeljohnducut6@gmail.com</td>
                                        <td><button class="btn btn-sm  btn-success"><span class="fa fa-pencil"></span></button>
                                            <button class="btn btn-sm  btn-danger"><span class="fa fa-trash-o"></span></button></td>
                                    </tr>

                                </tbody>
                                     
                                </table>
                                <div class="modal fade bs-example-modal-lg" id="modalNewAccount" tabindex="-1" role="dialog" aria-labelledby="modalNewAccount" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add New Account</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Faculty ID:</label>
                                                    <input class="form-control" type="text" name="fac_id" id="fac_id">
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Faculty Type:</label>
                                                    <select class="form-control" required>
                                                        <option>--SELECT FACULTY TYPE--</option>
                                                        <option>Regular</option>
                                                        <option>Part-Time</option>
                                                        <option>Designee</option>
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Surname:</label>
                                                    <input class="form-control" type="text" name="fac_sname" id="fac_sname" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">First Name:</label>
                                                    <input class="form-control" type="text" name="fac_fname" id="fac_fname" required>
                                            </div>
                                            <div class="form-group col-md-2">
                                                    <label class="control-label">Middle Init.</label>
                                                    <input class="form-control" type="text" name="fac_mname" id="fac_mname">
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Email:</label>
                                                    <input class="form-control" type="text" name="fac_email" id="fac_email" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Contact #:</label>
                                                    <input class="form-control" type="text" name="fac_contact" id="fac_contact" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Password:</label>
                                                <input type="password" data-minlength = "6" name="acc_password" id="acc_password" class="form-control" data-toggle = "validator" required>
                                                <span class="help-block">Minimum of 6 Characters</span>
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label class="control-label">Confirm Password:</label>
                                                <input type="password" data-minlength = "6" name="conf_password" id="conf_password" class="form-control" data-match = "#acc_password" data-match-error = "Passwords do not match" required>
                                                <div class="help-block with-errors">
                                                    <ul class="list-unstyled">
                                                        <li>Please Fill out this field.</li>
                                                    </ul>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success waves-effect text-left">Add Account</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                                <div class="row">
                                    <p>Showing 10 of 10 entries</p>
                                </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <center><button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewAccount" style="margin-top: 10px;">Create Account</button></center>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->   
            
        </div>
        <footer class="footer text-center"> 2018 &copy; Faculty Scheduling System</footer>


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
    <!--Counter js -->
    <script src="assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="assets/plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="assets/plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
    
    // function searchTable(){
    //     var input, filter, table, tr, td ,i; 
    //     input = document.getElementById("search_input"); 
    //     filter = input.value.toUpperCase();
    //     table = document.getElementById("account-table");
    //     tr = table.getElementsByTagName("tr");

    //     for (i = 0; i < tr.length; i++){
    //         td = tr[i].getElementsByTagName("td")[1];
    //             if (td.innerHTML.toUpperCase().indexOf(filter) > -1){
    //                 tr[i].style.display = "";
    //             } 
    //             else{
    //                 tr[i].style.display = "none";
    //             }
    //     }
    // }
    </script>
    <!--Style Switcher -->
    <script src="assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-horizontal-nav-fullwidth/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Mar 2018 02:44:03 GMT -->
</html>
