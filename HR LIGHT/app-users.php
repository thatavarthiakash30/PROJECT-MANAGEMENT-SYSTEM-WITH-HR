<?php 
include 'connection.php';
if(isset($_POST['Add'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email_id=$_POST['email_id'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $mobile=$_POST['mobile'];
    $usertype=$_POST['usertype'];
    $emp_id=$_POST['emp_id'];
    $insert_query="INSERT INTO `users`(`first_name`, `last_name`, `email_id`, `username`, `password`, `confirmpassword`, `mobile`, `usertype`, `empid`) VALUES ('$first_name','$last_name','$email_id','$username','$password','$confirmpassword','$mobile','$usertype','$emp_id')";
    $res=mysqli_query($conn,$insert_query);
    if($res){
        ?>
        <script>
            alert("User data added successfully.");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Error occured while adding User data.");
        </script>
        <?php

    }

}
?>
<!doctype html>
<html lang="en">
<head>
<title>HR Side</title>

<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

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
                <a href="index.php">HR SIDE</a>                
            </div>
            
            <div class="navbar-right">
            <form id="navbar-search" class="navbar-form search-form" method="POST">
                    <input type="text"  class="form-control" placeholder="First Name..." name="first_name">
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
                            
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="icon-users"></i><span>Employees</span></a>
                                <ul>
                                    <li><a href="emp-all.php">All Employees</a></li>
                                    <li><a href="emp-leave.php">Leave Requests</a></li>
                                    
                                    <li><a href="emp-departments.php">Departments</a></li>
                                </ul>
                            </li>
                            
                            
                            
                            <li class="active"><a href="app-users.php"><i class="icon-user"></i>Users</a></li>
                            
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Users</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#add_user">Add User</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                        <tr>                                        
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Employee ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            include 'connection.php';
                                            if(isset($_POST['Search'])){
                                                $first_name=$_POST['first_name'];
                                                $selectquery="SELECT first_name,last_name,email_id,usertype,empid from users WHERE first_name LIKE '%$first_name%'";
                                            }
                                            else{
                                                $selectquery="SELECT first_name,last_name,email_id,usertype,empid from users";
                                            }
                                            
                                            $query=mysqli_query($conn,$selectquery);
                                            $nums=mysqli_num_rows($query);
                                            while($res=mysqli_fetch_array($query)){   
                                            
                                        ?>
                                        <tr>
                                        <td>
                                                <h6 class="mb-0"><?php echo $res['first_name']; ?><?php echo  ' '; ?><?php echo  $res['last_name']; ?></h6>
                                                <span><?php echo $res['email_id']; ?></span>
                                            </td>
                                            <td><span class="badge badge-success"><?php echo $res['usertype']; ?></span></td>
                                            <td><?php echo $res['empid']; ?></td>
                                            <td>
                                                <a href="deleteuser.php?empid=<?php echo $res['empid']; ?>" >
                                                <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
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

<!-- Default Size -->
<div class="modal animated fadeIn" id="add_user" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add User</h6>
            </div>
            <form action="" method="POST">
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" name="first_name" placeholder="First Name *">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" name="email_id" placeholder="Email ID *">
                        </div>
                    </div>    
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" name="username" placeholder="Username *">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" name="mobile" placeholder="Mobile No">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <select name="usertype" class="form-control show-tick">
                                <option>Select Role Type</option>
                                <option>HR/Manager</option>
                                
                                <option>Employee</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" name="emp_id" placeholder="Employee ID *">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="Add" class="btn btn-primary"value="Add"/>
                <input type="submit" name="Close" class="btn btn-secondary"value="Close"/>
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
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
<script src="assets/js/pages/ui/dialogs.js"></script>
</body>
</html>
