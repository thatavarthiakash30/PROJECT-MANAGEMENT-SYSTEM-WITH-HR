<?php 
include 'connection.php';
if(isset($_POST['Add'])){
    $nameholiday=$_POST['nameholiday'];
    $date=$_POST['date'];
    $day=$_POST['day'];
    $insert_query="INSERT INTO `holidays`(`nameholiday`, `date`, `day`) VALUES ('$nameholiday','$date','$day')";
    $res=mysqli_query($conn,$insert_query);
    if($res){
        ?>
        <script>
            alert("Holiday added successfully. Enjoy your break.");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Error occured while adding new Holiday to the list. Try again.");
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

<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">

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
                            
                            
                            
                            <li><a href="app-users.php"><i class="icon-user"></i>Users</a></li>
                            
                            <li class="active"><a href="app-holidays.php"><i class="icon-list"></i>Holidays</a></li>
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Holidays</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Holidays</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Holidays List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addholiday">Add New</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead class="thead-dark">
                                        <tr>
                                                                                        
                                            <th>Day</th>
                                            <th>Date</th>
                                            <th>Holiday name</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                   <?php
                                            include 'connection.php';
                                            $selectquery="SELECT day,date,nameholiday from holidays";
                                            $query=mysqli_query($conn,$selectquery);
                                            $nums=mysqli_num_rows($query);
                                            while($res=mysqli_fetch_array($query)){   
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $res['day']; ?></td>
                                            <td><?php echo $res['date']; ?></td>
                                            <td><?php echo $res['nameholiday']; ?></td>
                                        </tr>
                                        <?php
                                        }
                                    ?>
                                        <tr >
                                            
                                            <td>Friday</td>
                                            <td>2021-01-26</td>
                                            <td>Republic Day</td>
                                        </tr>
                                        <tr >
                                          
                                            <td>Friday</td>
                                            <td>2021-03-03</td>
                                            <td>Good Friday</td>
                                        </tr>
                                        <tr >
                                            
                                            <td>Monday</td>
                                            <td>2021-04-30</td>
                                            <td>Buddha Purnima</td>
                                        </tr>
                                        <tr >
                                           
                                            <td>Saturday</td>
                                            <td>2021-07-06</td>
                                            <td>Id-Ul-Fitr</td>
                                        </tr>
                                        <tr>
                                          
                                            <td>Wednesday</td>
                                            <td>2021-08-15</td>
                                            <td>Independence Day</td>
                                        </tr>
                                        <tr>
                                            
                                            <td>Wednesday</td>
                                            <td>2021-08-21</td>
                                            <td>Id-Ul-Zuha (Bakrid)</td>
                                        </tr>
                                        <tr>
                                           
                                            <td>Monday</td>
                                            <td>2021-09-03</td>
                                            <td>Janmashtami</td>
                                        </tr>
                                        <tr>
                                            
                                            <td>Tuesday</td>
                                            <td>2021-10-02</td>
                                            <td>Gandhi Jayanti</td>
                                        </tr>
                                        <tr>
                                           
                                            <td>Wednesday</td>
                                            <td>2021-11-07</td>
                                            <td>Diwali / Deepavali</td>
                                        </tr>
                                        <tr>
                                            <td>Tuesday</td>
                                            <td>2021-12-25</td>
                                            <td>Christmas Day</td>
                                        </tr>
                                        
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
<div class="modal animated zoomIn" id="addholiday" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Holiday</h6>
            </div>
            <form action="" method="POST">
            <div class="modal-body">  
                <div class="row clearfix">
                    <div class="col-md-10">
                        <div class="form-group">                                    
                            <input type="text" name="nameholiday" class="form-control" placeholder="Name of Holiday">
                        </div>
                    </div>
                    
                    <div class="col-md-10">
                                        <b>Date</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                            </div>
                                            <input type="text" name="date" class="form-control date" placeholder="Ex: YYYY-MM-DD">
                                        </div>
                                    </div>
                    <div class="col-md-10">
                        <div class="form-group">                                    
                            <input type="text" name="day" class="form-control" placeholder="Day">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="Add" class="btn btn-primary" value="Add"/>
                <input type="submit" name="Close" class="btn btn-secondary" data-dismiss="modal" value="Close"/>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
