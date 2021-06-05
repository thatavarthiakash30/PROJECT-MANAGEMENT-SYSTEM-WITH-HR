<!doctype html>
<html lang="en">

<head>
    <title>EMPLOYEE SIDE</title>

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/horizontal-timeline/css/horizontal-timeline.css">

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

                                        <li class="active"><a href="page-timeline-h.php">Project Timeline</a></li>

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
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Timeline</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Pages</li>
                                <li class="breadcrumb-item active">Timeline</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="cd-horizontal-timeline">
                                    <div class="timeline">
                                        <div class="events-wrapper">
                                            <div class="events">
                                                <ol>
                                                    <li><a href="#0" data-date="16/01/2017" class="selected">16 Jan</a></li>
                                                    <li><a href="#0" data-date="28/02/2017">28 Feb</a></li>
                                                    <li><a href="#0" data-date="20/04/2017">20 Mar</a></li>
                                                    <li><a href="#0" data-date="20/05/2017">20 May</a></li>
                                                    <li><a href="#0" data-date="09/07/2017">09 Jul</a></li>
                                                    <li><a href="#0" data-date="30/08/2017">30 Aug</a></li>
                                                    <li><a href="#0" data-date="15/09/2017">15 Sep</a></li>
                                                    <li><a href="#0" data-date="01/11/2017">01 Nov</a></li>
                                                    <li><a href="#0" data-date="10/12/2017">10 Dec</a></li>
                                                    <li><a href="#0" data-date="19/01/2018">29 Jan</a></li>
                                                    <li><a href="#0" data-date="03/03/2018">3 Mar</a></li>
                                                </ol>
                                                <span class="filling-line" aria-hidden="true"></span>
                                            </div>
                                            <!-- .events -->
                                        </div>
                                        <!-- .events-wrapper -->
                                        <ul class="cd-timeline-navigation">
                                            <li><a href="#0" class="prev inactive">Prev</a></li>
                                            <li><a href="#0" class="next">Next</a></li>
                                        </ul>
                                        <!-- .cd-timeline-navigation -->
                                    </div>
                                    <!-- .timeline -->
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-date="16/01/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>January 16th, 2021</small>
                                                </h4>
                                                <hr>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                    <br>
                                                </p>
                                            </li>
                                            <li data-date="28/02/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>Feb 28th, 2021</small>
                                                </h4>
                                                <hr>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                    <br>
                                                </p>
                                            </li>
                                            <li data-date="20/04/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>March 20th, 2021</small>
                                                </h4>
                                                <hr>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                    <br>
                                                </p>
                                            </li>
                                            <li data-date="20/05/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>May 20th, 2021</small>
                                                    </h2>
                                                    <hr>
                                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                        <br>
                                                    </p>
                                            </li>
                                            <li data-date="09/07/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>July 9th, 2021</small>
                                                </h4>
                                                <hr>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                    <br>
                                                </p>
                                            </li>
                                            <li data-date="30/08/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>August 30th, 2021</small>
                                                </h4>
                                                <hr>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                    <br>
                                                </p>
                                            </li>
                                            <li data-date="15/09/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>September 15th, 2021</small>
                                                </h4>
                                                <hr>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                    <br>
                                                </p>
                                            </li>
                                            <li data-date="01/11/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>November 01st, 2021</small>
                                                </h4>
                                                <hr>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                    <br>
                                                </p>
                                            </li>
                                            <li data-date="10/12/2017">
                                                <h4>
                                                    Timeline<br />
                                                    <small>December 10th, 2021</small>
                                                </h4>
                                                <hr>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                                    <br><button class="btn btn-primary  m-t-15 ">Read more</button>
                                                </p>
                                            </li>
                                            <li data-date="19/01/2018">
                                                <h4>Event title here</h4>
                                                <em>January 19th, 2022</em>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.</p>
                                            </li>
                                            <li data-date="03/03/2018">
                                                <h4>Event title here</h4>
                                                <em>March 3rd, 2022</em>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.</p>
                                            </li>
                                        </ol>
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

    <script src="../assets/vendor/horizontal-timeline/js/horizontal-timeline.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>