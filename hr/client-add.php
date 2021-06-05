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
    $client_id=$_POST['client_id'];
    $address=$_POST['address'];
    $fn=$_FILES['clientv']['name'];
    $tm=$_FILES['clientv']['tmp_name'];
    move_uploaded_file($tm,"file_upload/pdf".$fn);
    $insert_query="INSERT INTO `client_details`(`first_name`, `last_name`, `email_id`, `username`, `password`, `confirmpassword`, `mobile`, `client_id`, `address`, `clientv`) VALUES ('$first_name','$last_name','$email_id','$username','$password','$confirmpassword','$mobile','$client_id','$address','$fn')";
    $res=mysqli_query($conn,$insert_query);
    if($res){
        ?>
        <script>
            alert("Client details added successfully.");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Error occured while adding Client details.");
        </script>
        <?php

    }

}
?>
<!doctype html>
<html lang="en">
<head>
<title>HR Side</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

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
                <H2 style="color:blue">PROJECT MANAGEMENT SYSTEM WITH HUMAN RESOURCE</H2>
            </div> 
        </div>
    </nav>
    
    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                
                <div class="dropdown">
                    <span>Welcome,</span>
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
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hr_menu">HR</a></li>
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#project_menu">Project</a></li>
                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn" id="hr_menu">
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
                            
                            
                            
                            <li><a href="app-users.php"><i class="icon-user"></i>Users</a></li>
                            
                            <li><a href="app-holidays.php"><i class="icon-list"></i>Holidays</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane animated fadeIn active" id="project_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            
                            <li>
                                <a href="#Projects" class="has-arrow"><i class="icon-list"></i><span>Projects</span></a>
                                <ul>
                                    <li><a href="project-add.php">Add Projects</a></li>
                                    <li><a href="project-list.php">Projects List</a></li>
                                                                        
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#Clients" class="has-arrow"><i class="icon-user"></i><span>Clients</span></a>
                                <ul>
                                    <li class="active"><a href="client-add.php">Add Clients</a></li>
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add Clients</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Clients</li>
                            <li class="breadcrumb-item active">Add</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-12">
                    <div class="card">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control" placeholder="First Name *">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="email_id" class="form-control" placeholder="Email ID *">
                                    </div>
                                </div>    
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">                                   
                                        <input type="text" name="username" class="form-control" placeholder="Role *">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile No">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="client_id" class="form-control" placeholder="Client ID *">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                     <div class="header">
                            <h2>Client Verification</h2>
                        </div>
                        <div class="body">
                            <input type="file" name="clientv" class="dropify" data-max-file-size="100K">
                        </div>                   
                            </div>
                            <input type="submit" name="Add" class="btn btn-primary" value="Add"/>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/easypiechart.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
