<?php
    session_start();
    if(!isset($_SESSION['username'])||$_SESSION['usertype']!="Employee"){
        header("location:../../../LOGIN/index.php");
    }
?>
<!doctype html>
<html lang="en">

<head>
<title>EMPLOYEE SIDE</title>

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
<body >

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
                <H2 style="color:blue">PROJECT MANAGEMENT SYSTEM WITH HUMAN RESOURCE</H2>
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
                        <li><a href="logout.php"><i class="icon-power"></i>Logout</a></li>
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
                            <li class="active"><a href="index.php"><i class="icon-speedometer"></i><span>Employee Dashboard</span></a></li>
                            
                            <li><a href="app-events.php"><i class="icon-calendar"></i>Events</a></li>
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="icon-users"></i><span>Profile</span></a>
                                <ul>
                                    <li><a href="page-profile2.php">My Profile</a></li>
                                    <li><a href="emp-leave.php">Leave Requests</a></li>
                                    
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
                                    <li><a href="project-detail.php">Project Detail</a></li
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
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>            
                    
                </div>
            </div>

            <div class="row clearfix">
                <div class="row">
                <div class="col-lg-4 col-md-4">
                            <div class="dash-sidebar">
                                <section>
                                    <h5 class="dash-title">Projects</h5>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="time-list">
                                                <div class="dash-stats-list">
                                                    <h4>71</h4>
                                                    <p>Total Tasks</p>
                                                </div>
                                                <div class="dash-stats-list">
                                                    <h4>14</h4>
                                                    <p>Pending Tasks</p>
                                                </div>
                                            </div>
                                            <div class="request-btn">
                                                <div class="dash-stats-list">
                                                    <h4>2</h4>
                                                    <p>Total Projects</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            </div>

                <div class="col-lg-6 col-md-16">
                    <div class="card">
                        <div class="header">
                            <h2>ToDo List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addwork">Add New</a></li>
                            </ul>
                        </div>
                        <div class="body todo_list">
                            <ul class="list-unstyled">
                            <?php
                                            include 'connection.php';
                                            $selectquery="SELECT nameofwork,optional from todolistemp";
                                            $query=mysqli_query($conn,$selectquery);
                                            $nums=mysqli_num_rows($query);
                                            while($res=mysqli_fetch_array($query)){   
                                            
                                        ?>
                                        <li>
                                        <label class="fancy-checkbox mb-0">
                                            <input type="checkbox" name="checkbox">
                                            <span><?php echo $res['nameofwork']; ?></span>
                                        </label>
                                        <div class="m-l-35 m-b-30">
                                            <small class="text-muted"><?php echo $res['optional']; ?></small>
                                        </div>
                                        </li>
                                        <?php
                                        }
                            ?>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>New Employee intro</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 3:00 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Send email to CEO</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>New Joing Employee Welcome kit</span>
                                    </label>
                                    <div class="m-l-35 m-b-30">
                                        <small><a href="#">John Smith</a> Designer</small><br>
                                        <small><a href="#">Hossein Shams</a> Developer</small><br>
                                        <small><a href="#">Maryam Amiri</a> SEO</small><br>
                                        <small><a href="#">Mike Litorus</a> iOS Developer</small>
                                    </div>
                                </li>
                                <li>
                                    <label class="fancy-checkbox mb-0">
                                        <input type="checkbox" name="checkbox">
                                        <span>Birthday Wish</span>
                                    </label>
                                    <div class="m-l-35">
                                        <small class="text-muted">SCHEDULED FOR 4:30 P.M. ON JUN 2018</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-8">
                    <div class="card text-center">
                        <div class="body">
                            <section>
                                    <h5 class="dash-title">Your Leave</h5>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="time-list">
                                                <div class="dash-stats-list">
                                                    <h4></h4>
                                                </div>
                                            </div>
                                            <div class="request-btn">
                                                <a class="btn btn-primary" href="emp-leave.php">Leave</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                        </div>
                    </div>                    
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- Default Size -->
<div class="modal animated zoomIn" id="addwork" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Work</h6>
            </div>
            <div class="modal-body">
            <form action="todolist.php" method="POST">
                <div class="row clearfix">
                    <div class="col-md-10">
                        <div class="form-group">                                    
                            <input type="text" name="nameofwork" class="form-control" placeholder="Name of work">
                        </div>
                    </div>
                    
                    <div class="col-md-10">
                                        <b>Date Time</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input type="text" name="datetime" class="form-control datetime" placeholder="Ex: 2021-01-01 04:00:01">
                                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">                                    
                            <input type="text" name="optional" class="form-control" placeholder="Anything Optional">
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="Addtask" class="btn btn-primary" value="Add"/>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>
<script src="../assets/vendor/toastr/toastr.js"></script>
<script src="assets/bundles/chartist.bundle.js"></script>
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/index.js"></script>

</body>

</html>