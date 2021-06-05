<?php
include 'connection.php';
if (isset($_POST['Add'])) {
    $gtext = $_POST['gtext'];
    $insertquery = "INSERT INTO `proj_task`(`gtext`) VALUES ('$gtext')";
    $res = mysqli_query($conn, $insertquery);
    if ($res) {
?>
        <script>
            alert("Activity added.");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Error occured while adding Activity.");
        </script>
<?php

    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>EMPLOYEE SIDE</title>

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <style>
        .highlight {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .highlight pre code {
            font-size: inherit;
            color: #212529;
        }

        .nt {
            color: #2f6f9f;
        }

        .na {
            color: #4f9fcf;
        }

        .s {
            color: #d44950;
        }

        pre.prettyprint {
            background-color: #eee;
            border: 0px;
            margin: 0;
            padding: 20px;
            text-align: left;
        }

        .atv,
        .str {
            color: #05AE0E;
        }

        .tag,
        .pln,
        .kwd {
            color: #3472F7;
        }

        .atn {
            color: #2C93FF;
        }

        .pln {
            color: #333;
        }

        .com {
            color: #999;
        }
    </style>

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
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hr_menu">Employee</a></li>
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#project_menu">Project</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-l-0 p-r-0">
                    <div class="tab-pane animated fadeIn" id="hr_menu">
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
                    <div class="tab-pane animated fadeIn active" id="project_menu">
                        <nav class="sidebar-nav">
                            <ul class="main-menu metismenu">

                                <li>
                                    <a href="#Projects" class="has-arrow"><i class="icon-list"></i><span>Projects</span></a>
                                    <ul>

                                        <li><a href="page-timeline-h.php">Project Timeline</a></li>
                                        <li class="active"><a href="project-detail.php">Project Detail</a></li>
                                    </ul>
                                </li>

                                <li><a href="project-team.php"><i class="icon-users"></i>Team</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-content" class="profilepage_1">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Project Details</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Projects</li>
                                <li class="breadcrumb-item active">Project Details</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="body">
                                <h5>iNext - One Page Responsive Template</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <div class="progress-container progress-info m-b-25">
                                    <span class="progress-badge">Project Status</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                                            <span class="progress-value">78%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <ul class=" list-unstyled basic-list">
                                    <li>Cost:<span class="badge badge-primary">$16,785</span></li>
                                    <li>Created:<span class="badge-purple badge">14 Mar, 2021</span></li>
                                    <li>Deadline:<span class="badge-purple badge">22 Aug, 2021</span></li>
                                    <li>Priority:<span class="badge-danger badge">Highest priority</span></li>
                                    <li>Status<span class="badge-info badge">Working</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h2>Assigned Team</h2>
                            </div>
                            <div class="body">
                                <div class="w_user">

                                    <div class="wid-u-info">
                                        <h5>Fidel Tonn</h5>
                                        <span>info@thememakker.com</span>
                                        <p class="text-muted m-b-0">Project Lead</p>
                                    </div>
                                    <hr>
                                </div>
                                <ul class="right_chat list-unstyled mb-0">
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">

                                                <div class="media-body">
                                                    <span class="name">Chris Fox</span>
                                                    <span class="message">Sales Lead</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">

                                                <div class="media-body">
                                                    <span class="name">Joge Lucky</span>
                                                    <span class="message">Java Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">

                                                <div class="media-body">
                                                    <span class="name">Isabella</span>
                                                    <span class="message">UI UX Designer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media mb-0">

                                                <div class="media-body">
                                                    <span class="name">Folisise Chosielie</span>
                                                    <span class="message">FrontEnd Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Project Activity</h2>
                            </div>
                            <div class="body">
                                <form method="POST" action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control no-resize" name="gtext" placeholder="Please type what you want..." />
                                    </div>
                                    <div class="post-toolbar-b">

                                        <input type="Submit" name="Add" class="btn btn-primary" value="Add" />

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <?php
                                include 'connection.php';
                                if ($conn) {
                                } else {
                                    die("no connection" . mysqli_connect_error());
                                }

                                $selectquery = "SELECT * FROM `proj_task`";
                                $query = mysqli_query($conn, $selectquery);
                                $nums = mysqli_num_rows($query);
                                while ($res = mysqli_fetch_array($query)) {

                                ?>
                                    <div class="timeline-item green">
                                        <span class="date"><?php echo $res['gdatetime']; ?></span>
                                        <h6><?php echo $res['gtext']; ?></h6>
                                        <span>Employee: <a href="javascript:void(0);" title="Jessica Doe">Jessica Doe</a></span>
                                    </div>

                                <?php
                                }
                                ?>
                                <div class="timeline-item warning">
                                    <span class="date">2021-06-04</span>
                                    <h6>Add Team Members</h6>
                                    <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                    <div class="msg">
                                        <p>web by far While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>

                                        <div class="top_counter">
                                            <div class="icon"><i class="fa fa-file-word-o"></i> </div>
                                            <div class="content">
                                                <p class="mb-1">iNext project documentation.doc</p>
                                                <span>Size: 2.3Mb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item warning">
                                    <span class="date">02 Jun 2021</span>
                                    <h6>Task Assigned</h6>
                                    <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                    <div class="msg">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                        <div class="media">

                                            <div class="media-body">
                                                <h6 class="mb-0">Folisise Chosielie</h6>
                                                <p class="mb-0"><strong>Detail:</strong> Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                            </div>
                                        </div>
                                        <div class="media">

                                            <div class="media-body">
                                                <h6 class="mb-0">Joge Lucky</h6>
                                                <p class="mb-0"><strong>Detail:</strong> Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item warning">
                                    <span class="date">02 Jun 2021</span>
                                    <h6>Add new code on GitHub</h6>
                                    <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Folisise Chosielie</a></span>
                                    <div class="msg">
                                        <div class="alert alert-success mb-3" role="alert">Code Update Successfully in GitHub</div>
                                        <pre class="prettyprint prettyprinted"><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-default"</span><span class="tag">&gt;</span><span class="pln">Default</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-primary"</span><span class="tag">&gt;</span><span class="pln">Primary</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-success"</span><span class="tag">&gt;</span><span class="pln">Success</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-info"</span><span class="tag">&gt;</span><span class="pln">Info</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-warning"</span><span class="tag">&gt;</span><span class="pln">Warning</span><span class="tag">&lt;/span&gt;</span><span class="pln">
</span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-danger"</span><span class="tag">&gt;</span><span class="pln">Danger</span><span class="tag">&lt;/span&gt;</span></pre>
                                    </div>
                                </div>
                                <div class="timeline-item danger">
                                    <span class="date">2021-06-01</span>
                                    <h6>Project Reports</h6>
                                    <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                    <div class="msg">
                                        <ul class="list-unstyled">
                                            <li class="mb-2">
                                                <span>Design Bug</span>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%;"></div>
                                                </div>
                                            </li>
                                            <li class="mb-2">
                                                <span>UI UX Design Task</span>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                                </div>
                                            </li>
                                            <li class="mb-2">
                                                <span>Developer Task</span>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%;"></div>
                                                </div>
                                            </li>
                                            <li class="mb-2">
                                                <span>QA (Quality Assurance)</span>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
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

    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

<!-- Mirrored from wrraptheme.com/templates/lucid/hr/html/light/project-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Mar 2021 04:49:07 GMT -->

</html>