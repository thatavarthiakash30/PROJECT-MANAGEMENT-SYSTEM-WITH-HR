<!doctype html>
<html lang="en">

<title>HR Side</title>

<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">HR Side</div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>

            <div class="navbar-brand">
                <a href="index.php">HR Side</a>                
            </div>
            
            <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form"  method="POST">
                    <input type="text" class="form-control" placeholder="emp_id"  name="emp_id">
                    <input type="submit" name="Search" class="btn btn-default" value="Search"/>
                </form>              

                
            </div>
        </div>
    </nav>
            
    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                
                <div class="dropdown">
                    <span>Welcome HR,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Jessica Doe</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        
                        <li class="divider"></li>
                        <li><a href="../../../LOGIN/index.php"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h6>5+</h6>
                        <small>Experience</small>                        
                    </div>
                    <div class="col-4">
                        <h6>400+</h6>
                        <small>Employees</small>                        
                    </div>
                    <div class="col-4">                        
                        <h6>80+</h6>
                        <small>Clients</small>
                    </div>
                </div>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hr_menu">HR</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#project_menu">Project</a></li>
                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn active" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li><a href="index.php"><i class="icon-speedometer"></i><span>HR Dashboard</span></a></li>

                            <li><a href="app-events.php"><i class="icon-calendar"></i>Events</a></li>
                            
                            <li class="active">
                                <a href="#Employees" class="has-arrow"><i class="icon-users"></i><span>Employees</span></a>
                                <ul>
                                    <li><a href="emp-all.php">All Employees</a></li>
                                    
                                    <li class="active"><a href="emp-leave.php">Leave Requests</a></li>
                                    <li><a href="emp-departments.php">Departments</a></li>
                                </ul>
                            </li>
                            
                            
                            
                            <li><a href="app-users.php"><i class="icon-user"></i>Users</a></li>
                            
                            <li><a href="app-holidays.php"><i class="icon-list"></i>Holidays</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane animated fadeIn" id="project_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                                                        <li>
                                <a href="#Projects" class="has-arrow"><i class="icon-list"></i><span>Projects</span></a>
                                <ul>
                                    <li><a href="project-add.php">Add Projects</a></li>
                                    <li><a href="project-list.php">Projects List</a></li>
                                                                        
                                </ul>
                            </li>
                            <li>
                                <a href="#Clients" class="has-arrow"><i class="icon-user"></i><span>Clients</span></a>
                                <ul>
                                    <li><a href="client-add.php">Add Clients</a></li>
                                    <li><a href="client-list.php">Clients List</a></li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#Charts" class="has-arrow"><i class="icon-user"></i><span>Charts</span></a>
                                <ul>
                                    <li><a href="chart-gantt.php">Create Gantt</a></li>
                                   
                                    
                                </ul>
                            </li>
                            <li><a href="project-team.php"><i class="icon-users"></i>Team</a></li>

                        </ul>                        
                    </nav>                    
                </div>
                             
            </div>          
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Leave Request</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Employee</li>
                            <li class="breadcrumb-item active">Leave Request</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Leave Type</th>
                                            <th>Date</th>
                                            <th>Reason</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include 'connection.php';
                                            if(isset($_POST['Search'])){
                                                $emp_id=$_POST['emp_id'];
                                                $selectquery="SELECT * FROM `leavereq` WHERE emp_id LIKE '%$emp_id%'";
                                            }
                                            else{
                                                $selectquery="SELECT * FROM `leavereq`";
                                            }
                                            $query=mysqli_query($conn,$selectquery);
                                            $nums=mysqli_num_rows($query);
                                            while($res=mysqli_fetch_array($query)){   
                                            
                                        ?>
                                        <tr>
                                            <td><span><?php echo $res['emp_id']; ?></span></td>
                                            <td><span><?php echo $res['leavetype']; ?></span></td>
                                            <td><?php echo $res['datefrom']; ?> to <?php echo $res['dateto']; ?></td>
                                            <td><?php echo $res['reason']; ?></td>
                                            <td>
                                                <a href="deleteleave.php?reason=<?php echo $res['reason']; ?>">
                                                <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Declined" data-type="confirm"><i class="fa fa-ban"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>> 
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
</body>

</html>
