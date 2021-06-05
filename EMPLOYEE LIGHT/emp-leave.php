<?php
    include 'connection2hr.php';
    if(isset($_POST['Add'])){
        $emp_id=$_POST['emp_id'];
        $leavetype=$_POST['leavetype'];
        $datefrom=$_POST['datefrom'];
        $dateto=$_POST['dateto'];
        $reason=$_POST['reason'];
        $insert_query="INSERT INTO `leavereq`(`emp_id`, `leavetype`, `datefrom`, `dateto`, `reason`) VALUES ('$emp_id','$leavetype','$datefrom','$dateto','$reason')";
        $res=mysqli_query($conn,$insert_query);
        if($res){
            ?>
            <script>
                alert("Request for leave sent.");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Error in sending request for leave.");
            </script>
            <?php
    
        }
    
    }
?>
<!doctype html>
<html lang="en">

<title>EMPLOYEE SIDE</title>

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
        <div class="m-t-30">EMPLOYEE SIDE</div>
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
                <a href="index.php">EMPLOYEE SIDE</a>                
            </div>
            
            <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form"  method="POST">
                    <input type="text" class="form-control" placeholder="Date..."  name="Date">
                    <input type="submit" name="Search" class="btn btn-default" value="Search"/>
                </form>               

                
            </div>
        </div>
    </nav>

    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                
                <div class="dropdown">
                    <span>Welcome Employee,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Jessica Doe</strong></a>                    
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        
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
                        <small>Projects</small>                        
                    </div>
                    <div class="col-4">                        
                        <h6>80+</h6>
                        <small>Awards</small>
                    </div>
                </div>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hr_menu">Employee</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#project_menu">Project</a></li>
                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn active" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li ><a href="index.php"><i class="icon-speedometer"></i><span>Employee Dashboard</span></a></li>
                            
                            <li><a href="app-events.php"><i class="icon-calendar"></i>Events</a></li>
                            
                            
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="icon-users"></i><span>Profile</span></a>
                                <ul>
                                    <li><a href="page-profile2.php">My Profile</a></li>
                                    <li class="active"><a href="emp-leave.php">Leave Requests</a></li>
                                    
                                </ul>
                            </li>
                            
                            
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
                                    
                                    <li><a href="page-timeline-h.php">Project Timeline</a></li>
                                    
                                    <li><a href="project-detail.php">Project Detail</a></li>                                    
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
                        <div class="header">
                            <h2>Employee List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#Leave_Request">Add Leave</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Employee ID</th>
                                            <th>Leave Type</th>
                                            <th>Date</th>
                                            <th>Reason</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include 'connection2hr.php';
                                            if(isset($_POST['Search'])){
                                                $Date=$_POST['Date'];
                                                $selectquery="SELECT `emp_id`, `leavetype`, `datefrom`, `dateto`, `reason` FROM `leavereq` WHERE datefrom='$Date' or dateto='$Date'";
                                            }
                                            else{
                                                $selectquery="SELECT `emp_id`, `leavetype`, `datefrom`, `dateto`, `reason` FROM `leavereq`";
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

<!-- Default Size -->
<div class="modal animated lightSpeedIn" id="Leave_Request" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="" method="POST">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Leave Request</h6>
            </div>
            <form action="" method="POST">
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text"name="emp_id" class="form-control" placeholder="Employee ID">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <select name="leavetype" class="form-control mb-3 show-tick">
                            <option>Select Leave Type</option>
                            <option>Casual Leave</option>
                            <option>Medical Leave</option>
                            <option>Maternity Leave</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="datefrom" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="From *">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" name="dateto" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="To *">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text"  name="reason" class="form-control no-resize" placeholder="Leave Reason *"></textarea>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="modal-footer">
                <input type="Submit" name="Add" class="btn btn-primary" value="Add"/>
                <input type="Submit" name="Close" class="btn btn-secondary" data-dismiss="modal"value="CLOSE"/>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
</body>

</html>
