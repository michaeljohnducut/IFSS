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
    <title>IFSS | Manage Curriculum</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
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
     <link href="assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="assets/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
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
                         <h4 class="page-title">Manage Curriculum</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Manage</a></li>
                            <li class="active">Curriculum</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <!-- <div class="panel-heading" style="background-color: gray; color:white;">
                                Filter Curriculum Details

                            </div> -->
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>Search Filter</h2>
                                </div>
                                <div class="col-md-2">
                                <center><label class="control-label">Curriculum to use:</label></center>
                                    <select class="form-control" id="curr_year">
                                        <option>2018</option>
                                        <option>2011</option>
                                    </select>
                                </div>
                            </div>
                             <br>
                             <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <center><label class="control-label">Curriculum Year:</label></center>
                                    <select class="form-control" id="curr_year">
                                        <option>2018</option>
                                        <option>2011</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <center><label class="control-label">Semester:</label></center>
                                    <select class="form-control" id="semester">
                                        <option>All</option>
                                        <option>1st</option>
                                        <option>2nd</option>
                                        <option>Summer Term</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <center><label class="control-label">Year Level:</label></center>
                                    <select class="form-control" id="semester">
                                        <option>All</option>
                                        <option>1st Year</option>
                                        <option>2nd Year</option>
                                        <option>3rd Year</option>
                                        <option>4th Year</option>
                                    </select>
                                </div>
                            </div>
                            
                             
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                <table id="myTable" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Title</th>
                                            <th>Requisite/Prerequisite</th>
                                            <th>Credits</th>
                                            <th>Lecture Hours</th>
                                            <th>Lab Hours</th>
                                            <th>Year Level</th>
                                            <th>Semester</th>
                                        </tr>
                                    </thead>
                                </table>

                            </div>

                            <div class="modal fade bs-example-modal-lg" id="modalNewSubject" tabindex="-1" role="dialog" aria-labelledby="modalNewAccount" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add a new subject</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Course Code:</label>
                                                    <input class="form-control" type="text" name="fac_id" id="fac_id">
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Course Title:</label>
                                                    <input class="form-control" type="text" name="fac_sname" id="fac_sname" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Credits:</label>
                                                    <input class="form-control" type="text" name="fac_fname" id="fac_fname" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Lecture Hours:</label>
                                                    <input class="form-control" type="text" name="fac_mname" id="fac_mname">
                                            </div>
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Lab Hours:</label>
                                                    <input class="form-control" type="text" name="fac_email" id="fac_email" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Requisites/Prerequisites</label>
                                                    <select class="form-control">
                                                       <option>Sample</option>
                                                       <option>Sample</option>
                                                       <option>Sample</option>
                                                       <option>Sample</option>
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Selected:</label>
                                                    <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-12">
                                             <table class="table color-table inverse-table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Course Code</th>
                                                        <th>Course Title</th>
                                                        <th>Units</th>
                                                        <th>Lecture Hours</th>
                                                        <th>Lab Hours</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr>
                                                     <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr>
                                                     <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr>
                                                     <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr>
                                                     <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr>
                                                     <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr> <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr>
                                                     <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr>
                                                     <tr>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                        <td>SAMPLE</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div> -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success waves-effect text-left">Add Subject</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <div class="modal fade bs-example-modal-lg" id="modalUpdateCurriculum" tabindex="-1" role="dialog" aria-labelledby="modalNewAccount" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Manage curriculum</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                <label class="control-label">For curriculum:</label>
                                                <select class="form-control">
                                                       <option>2011</option>
                                                       <option>2018</option>
                                                    </select>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                    <label class="control-label">Requisites/Prerequisites</label>
                                                    <select class="form-control">
                                                       <option>Sample</option>
                                                       <option>Sample</option>
                                                       <option>Sample</option>
                                                       <option>Sample</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-6">
                                                    <label class="control-label">Selected:</label>
                                                    <input type="text" class="form-control">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Year Level:</label>
                                                    <select class="form-control">
                                                        <option>--YEAR LEVEL--</option>
                                                        <option>1st</option>
                                                        <option>2nd</option>
                                                        <option>3rd</option>
                                                        <option>4th</option>
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Semester:</label>
                                                    <select class="form-control">
                                                        <option>--SEMESTER--</option>
                                                        <option>1st Semester</option>
                                                        <option>2nd Semester</option>
                                                        <option>Summer</option>
                                                    </select>
                                            </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success waves-effect text-left">Update Curriculum</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewSubject">Add Subject</button>
                                    <button type="button" class="btn btn-success" data-toggle = "modal" data-target = "#modalUpdateCurriculum">Update Curriculum</button>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
              
                <!-- /.row -->
                <!-- .right-sidebar -->
               
            </div>
        </div>
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
