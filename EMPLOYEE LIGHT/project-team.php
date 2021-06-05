<!doctype html>
<html lang="en">

<head>
    <title>EMPLOYEE Side</title>

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">

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
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#hr_menu">Employee</a></li>
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#project_menu">Project</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-l-0 p-r-0">
                    <div class="tab-pane animated fadeIn " id="hr_menu">
                        <nav class="sidebar-nav">
                            <ul class="main-menu metismenu">
                                <li><a href="index.php"><i class="icon-speedometer"></i><span>Employee Dashboard</span></a></li>

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

                                        <li><a href="project-detail.php">Project Detail</a></li>
                                    </ul>
                                </li>

                                <li class="active"><a href="project-team.php"><i class="icon-users"></i>Team</a></li>

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
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Team</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Team</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row clearfix">
                    <div class="navbar-right">


                    </div>

                </div>

                <div class="row clearfix">
                    <div class="tab-content" id="option-tabContent">
                        <div class="tab-pane fade show active" id="pills-option1" role="tabpanel" aria-labelledby="pills-option1-tab">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>team1</h2>
                                        </div>
                                        <div class="body text-center">
                                            <div class="team-lead">

                                                <h6 class="project-title text-primary mb-2 font-15">Marshall Nichols</h6>
                                                <p class="font-13">Team Lead</p>
                                            </div>
                                            <div class="mb-3 team-language">
                                                <span class="badge badge-default">Photoshop</span>
                                                <span class="badge badge-default">HTML/CSS</span>
                                                <span class="badge badge-default">Javascript</span>
                                            </div>
                                            <h6>Employees:</h6>
                                            <div class="align-items-center d-flex justify-content-center">
                                                <ol>

                                                    <li>Hari</li>
                                                    <li>Lucky</li>
                                                    <li>Allen</li>
                                                    <li>Peter</li>
                                                </ol>
                                            </div>
                                            <p class="pt-3 mb-0 font-16"><small>1 Lead, 3 Employees</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>team2</h2>
                                        </div>
                                        <div class="body text-center">
                                            <div class="team-lead">

                                                <h6 class="project-title text-primary mb-2 font-15">Susie Willis</h6>
                                                <p class="font-13">Team Lead</p>
                                            </div>
                                            <div class="mb-3 team-language">
                                                <span class="badge badge-default">Photoshop</span>
                                                <span class="badge badge-default">HTML/CSS</span>
                                                <span class="badge badge-default">Javascript</span>
                                            </div>
                                            <h6>Employees:</h6>
                                            <div class="align-items-center d-flex justify-content-center">
                                                <ol>

                                                    <li>Hari</li>
                                                    <li>Lucky</li>
                                                    <li>Allen</li>
                                                    <li>Peter</li>
                                                </ol>
                                            </div>
                                            <p class="pt-3 mb-0 font-16"><small>1 Lead, 3 Employees</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>team3</h2>
                                        </div>
                                        <div class="body text-center">
                                            <div class="team-lead">


                                                <h6 class="project-title text-primary mb-2 font-15">Debra Stewart</h6>
                                                <p class="font-13">Team Lead</p>
                                            </div>
                                            <div class="mb-3 team-language">
                                                <span class="badge badge-default">Photoshop</span>
                                                <span class="badge badge-default">HTML/CSS</span>
                                                <span class="badge badge-default">Javascript</span>
                                            </div>
                                            <h6>Employees:</h6>
                                            <div class="align-items-center d-flex justify-content-center">
                                                <ol>

                                                    <li>Hari</li>
                                                    <li>Lucky</li>
                                                    <li>Allen</li>
                                                    <li>Peter</li>
                                                </ol>
                                            </div>
                                            <p class="pt-3 mb-0 font-16"><small>1 Lead, 3 Employees</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>team4</h2>
                                        </div>
                                        <div class="body text-center">
                                            <div class="team-lead">

                                                <h6 class="project-title text-primary mb-2 font-15">Erin Gonzales</h6>
                                                <p class="font-13">Team Lead</p>
                                            </div>
                                            <div class="mb-3 team-language">
                                                <span class="badge badge-default">Photoshop</span>
                                                <span class="badge badge-default">HTML/CSS</span>
                                                <span class="badge badge-default">Javascript</span>
                                            </div>
                                            <h6>Employees:</h6>
                                            <div class="align-items-center d-flex justify-content-center">
                                                <ol>

                                                    <li>Hari</li>
                                                    <li>Lucky</li>
                                                    <li>Allen</li>
                                                    <li>Peter</li>
                                                </ol>
                                            </div>
                                            <p class="pt-3 mb-0 font-16"><small>1 Lead, 3 Employees</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>team5</h2>
                                        </div>
                                        <div class="body text-center">
                                            <div class="team-lead">

                                                <h6 class="project-title text-primary mb-2 font-15">Marshall Nichols</h6>
                                                <p class="font-13">Team Lead</p>
                                            </div>
                                            <div class="mb-3 team-language">
                                                <span class="badge badge-default">Photoshop</span>
                                                <span class="badge badge-default">HTML/CSS</span>
                                                <span class="badge badge-default">Javascript</span>
                                            </div>
                                            <h6>Employees:</h6>
                                            <div class="align-items-center d-flex justify-content-center">
                                                <ol>

                                                    <li>Hari</li>
                                                    <li>Lucky</li>
                                                    <li>Allen</li>
                                                    <li>Peter</li>
                                                </ol>
                                            </div>
                                            <p class="pt-3 mb-0 font-16"><small>1 Lead, 3 Employees</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>team6</h2>
                                        </div>
                                        <div class="body text-center">
                                            <div class="team-lead">

                                                <h6 class="project-title text-primary mb-2 font-15">Susie Willis</h6>
                                                <p class="font-13">Team Lead</p>
                                            </div>
                                            <div class="mb-3 team-language">
                                                <span class="badge badge-default">Photoshop</span>
                                                <span class="badge badge-default">HTML/CSS</span>
                                                <span class="badge badge-default">Javascript</span>
                                            </div>
                                            <h6>Employees:</h6>
                                            <div class="align-items-center d-flex justify-content-center">
                                                <ol>

                                                    <li>Hari</li>
                                                    <li>Lucky</li>
                                                    <li>Allen</li>
                                                    <li>Peter</li>
                                                </ol>
                                            </div>
                                            <p class="pt-3 mb-0 font-16"><small>1 Lead, 3 Employees</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>team7</h2>
                                        </div>
                                        <div class="body text-center">
                                            <div class="team-lead">

                                                <h6 class="project-title text-primary mb-2 font-15">Debra Stewart</h6>
                                                <p class="font-13">Team Lead</p>
                                            </div>
                                            <div class="mb-3 team-language">
                                                <span class="badge badge-default">Photoshop</span>
                                                <span class="badge badge-default">HTML/CSS</span>
                                                <span class="badge badge-default">Javascript</span>
                                            </div>
                                            <h6>Employees:</h6>
                                            <div class="align-items-center d-flex justify-content-center">
                                                <ol>

                                                    <li>Hari</li>
                                                    <li>Lucky</li>
                                                    <li>Allen</li>
                                                    <li>Peter</li>
                                                </ol>
                                            </div>
                                            <p class="pt-3 mb-0 font-16"><small>1 Lead, 3 Employees</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>team8</h2>
                                        </div>
                                        <div class="body text-center">
                                            <div class="team-lead">

                                                <h6 class="project-title text-primary mb-2 font-15">Erin Gonzales</h6>
                                                <p class="font-13">Team Lead</p>
                                            </div>
                                            <div class="mb-3 team-language">
                                                <span class="badge badge-default">Photoshop</span>
                                                <span class="badge badge-default">HTML/CSS</span>
                                                <span class="badge badge-default">Javascript</span>
                                            </div>
                                            <h6>Employees:</h6>
                                            <div class="align-items-center d-flex justify-content-center">
                                                <ol>

                                                    <li>Hari</li>
                                                    <li>Lucky</li>
                                                    <li>Allen</li>
                                                    <li>Peter</li>
                                                </ol>
                                            </div>
                                            <p class="pt-3 mb-0 font-16"><small>1 Lead, 3 Employees</small></p>
                                        </div>
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

    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="assets/js/pages/ui/dialogs.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>
    <script>
        $(function() {
            $('#progress-format1 .progress-bar').progressbar({
                display_text: 'fill'
            });

            $('#progress-format2 .progress-bar').progressbar({
                display_text: 'fill',
                use_percentage: false
            });

            $('#progress-custom-format .progress-bar').progressbar({
                display_text: 'fill',
                use_percentage: false,
                amount_format: function(p, t) {
                    return p + ' of ' + t;
                }
            });

            $('#progress-striped .progress-bar, #progress-striped-active .progress-bar, #progress-stacked .progress-bar').progressbar({
                display_text: 'fill'
            });

            $('.progress.vertical .progress-bar').progressbar();
            $('.progress.vertical.wide .progress-bar').progressbar({
                display_text: 'fill'
            });
        });
    </script>
</body>

</html>