<?php 
include 'connection.php';
if(isset($_POST['Create'])){
    $proj_name=$_POST['proj_name'];
    $client_name=$_POST['client_name'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $priority=$_POST['priority'];
    $rate=$_POST['rate'];
    $type=$_POST['type'];
    $teamlead=$_POST['teamlead'];
    $selectteam=$_POST['selectteam'];
    $fn=$_FILES['projd']['name'];
    $tm=$_FILES['projd']['tmp_name'];
    move_uploaded_file($tm,"file_upload/pdf".$fn);
    $insert_query="INSERT INTO `project_details`(`proj_name`, `client_name`, `start_date`, `end_date`, `priority`, `rate`, `type`, `teamlead`, `selectteam`, `projd`) VALUES ('$proj_name', '$client_name', '$start_date', '$end_date', '$priority', '$rate', '$type', '$teamlead', '$selectteam', '$fn')";
    $res=mysqli_query($conn,$insert_query);
    if($res){
        ?>
        <script>
            alert("Project details added successfully.");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Error occured while adding Project details.");
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
<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="../assets/vendor/summernote/dist/summernote.css"/>
<link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">

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
                            
                            
                            
                            <li class="active">
                                <a href="#Projects" class="has-arrow"><i class="icon-list"></i><span>Projects</span></a>
                                <ul>
                                    <li class="active"><a href="project-add.php">Add Projects</a></li>
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Create New Project</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Projects</li>
                            <li class="breadcrumb-item active">Add Project</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="proj_name" class="form-control" placeholder="Project Name *">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        
                                        <input type="text" name="client_name" class="form-control" placeholder="Client Name *">
                                    </div>
                                        
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="start_date" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Start date *">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="end_date" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="End date *">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <select name="priority" class="form-control show-tick">
                                            <option>Select Priority</option>
                                            <option>High</option>
                                            <option>Medium</option>
                                            <option>Low</option>
                                        </select>
                                    </div>
                                </div>                                
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-3 col-sm-12">
                                    <label>Select Rate in Dollar</label>
                                    <div class="form-group">
                                        <input type="number" name="rate" class="form-control" placeholder="Rate *">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label>Type</label>
                                    <div class="form-group">
                                        <select name="type" class="form-control show-tick">
                                            <option>Select Type</option>
                                            <option>Hourly</option>
                                            <option>Fixed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label>Select Team Lead</label>
                                    <div class="form-group">                                        
                                        <select name="teamlead" class="form-control show-tick">
                                            <option>Select</option>
                                            <option>Marshall Nichols</option>
                                            <option>Susie Willis</option>
                                            <option>Hossein Shams</option>
                                            <option>Fidel Tonn</option>
                                            <option>Frank Camly</option>
                                            <option>Debra Stewart</option>
                                            <option>Tim Hank</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label>Select Team</label>
                                    <div class="form-group">                                        
                                        <select name="selectteam" id="multiselect3-all" class="multiselect multiselect-custom" >
                                            <option value="team1">team1</option>
                                            <option value="team2">team2</option>
                                            <option value="team3">team3</option>
                                            <option value="team4">team4</option>
                                            <option value="team5">team5</option>
                                            <option value="team6">team7</option>
                                            <option value="team8">team8</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                        <div class="header">
                            <h2>Project Details From Client</h2>
                        </div>
                        <div class="body">
                            <input type="file" name="projd" class="dropify" data-max-file-size="100K">
                        </div>
                    </div>
                            <div class="row clearfix">
                                
                                <div class="col-sm-12">
                                    <div class="mt-4">
                                        <input type="submit" name="Create" class="btn btn-primary" value="Create"/>
                                        <input type="submit" name="Cancel" class="btn btn-outline-secondary" value="Cancel"/> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>


<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="../assets/vendor/dropify/js/dropify.min.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="../assets/vendor/summernote/dist/summernote.js"></script>
<script src="assets/js/pages/forms/dropify.js"></script>
<script>
    $('#multiselect3-all').multiselect({
        includeSelectAllOption: true,
    });
</script>
</body>
</html>
