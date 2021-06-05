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
    <link rel="stylesheet" href="assets/css/blog.css">
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
                                <li><a href="index.php"><i class="icon-speedometer"></i><span>Employee Dashboard</span></a></li>

                                <li><a href="app-events.php"><i class="icon-calendar"></i>Events</a></li>


                                <li>
                                    <a href="#Employees" class="has-arrow"><i class="icon-users"></i><span>Profile</span></a>
                                    <ul>
                                        <li class="active"><a href="page-profile2.php">My Profile</a></li>
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

        <div id="main-content" class="profilepage_2 blog-page">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> User Profile</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Pages</li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row clearfix">

                    <div class="col-lg-9 col-md-20">
                        <div class="card profile-header">
                            <div class="body">
                                <div class="profile-image"></div>
                                <div>
                                    <h4 class="m-b-0"><strong>Jessica</strong> Doe</h4>
                                    <span>Employee</span>
                                    <br>
                                    <span>Washington, d.c.</span>
                                </div>

                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h2>Info</h2>

                            </div>
                            <div class="body">
                                <small class="text-muted">Address: </small>
                                <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <hr>
                                <small class="text-muted">Email address: </small>
                                <p>michaeljd@gmail.com</p>
                                <hr>
                                <small class="text-muted">Mobile: </small>
                                <p>+91 9291608170</p>
                                <hr>
                                <small class="text-muted">Birth Date: </small>
                                <p class="m-b-0">October 22th, 1990</p>
                                <hr>
                                <small class="text-muted">Social: </small>
                                <p><i class="fa fa-twitter m-r-5"></i> twitter.com/michaeljd21</p>
                                <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/michaeljd21</p>
                                <p><i class="fa fa-github m-r-5"></i> github.com/jd</p>

                            </div>
                        </div>



                    </div>

                    <div class="col-lg-9 col-md-12">

                        <div class="card">
                            <div class="body">
                                <ul class="nav nav-tabs-new">

                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Settings">Settings</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content padding-0">
                            <div class="tab-pane animated fadeIn" id="Settings">
                                <form action="form1.php" method="POST">
                                    <div class="card">
                                        <div class="body">
                                            <h6>Basic Information</h6>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="emp_id" class="form-control" placeholder="Employee ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <label class="fancy-radio">
                                                                <input name="gender2" value="male" type="radio" checked>
                                                                <span><i></i>Male</span>
                                                            </label>
                                                            <label class="fancy-radio">
                                                                <input name="gender2" value="female" type="radio">
                                                                <span><i></i>Female</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                            </div>
                                                            <input name="date" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Birthdate">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="ad1" class="form-control" placeholder="Address Line 1">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="ad2" class="form-control" placeholder="Address Line 2">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="city" class="form-control" placeholder="City">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="state" class="form-control" placeholder="State/Province">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="country" class="form-control" placeholder="Country">
                                                    </div>

                                                </div>
                                            </div>
                                            <input type="submit" name="Updateb" class="btn btn-primary" value="Update" /> &nbsp;&nbsp;
                                            <input type="submit" name="Cancel" class="btn btn-default" value="Cancel" />
                                        </div>
                                    </div>
                                </form>
                                <form action="form2.php" method="POST">
                                    <div class="card">
                                        <div class="body">
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    <h6>Account Data</h6>
                                                    <div class="form-group">
                                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="mobile" class="form-control" placeholder="Phone Number">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12">
                                                    <h6>Change Password</h6>
                                                    <div class="form-group">
                                                        <input type="password" name="currentpassword" class="form-control" placeholder="Current Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="newpassword" class="form-control" placeholder="New Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm New Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" name="Updatea" class="btn btn-primary" value="Update" /> &nbsp;&nbsp;
                                            <input type="submit" name="Cancel" class="btn btn-default" value="Cancel" />
                                        </div>
                                    </div>
                                </form>
                                <form action="form3.php" method="POST" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="body">
                                            <h6>Skills Update Information</h6>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="emp_id" class="form-control" placeholder="Employee ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="skills" class="form-control" placeholder="Skills Updates">
                                                    </div>
                                                    <div class="card">
                                                        <div class="header">
                                                            <h2>Skill update Validation proofs </h2>
                                                        </div>
                                                        <div class="body">
                                                            <input type="file" name="skillf" class="dropify" data-max-file-size="100K">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <input type="submit" name="Updates" class="btn btn-primary" value="Update" /> &nbsp;&nbsp;
                                            <input type="submit" name="Cancel" class="btn btn-default" value="Cancel" />
                                        </div>
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

        <script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
        <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <script src="assets/bundles/mainscripts.bundle.js"></script>

        <script>
            $(function() {
                $('.knob').knob({
                    draw: function() {
                        // "tron" case
                        if (this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv) // Angle
                                ,
                                sa = this.startAngle // Previous start angle
                                ,
                                sat = this.startAngle // Start angle
                                ,
                                ea // Previous end angle
                                , eat = sat + a // End angle
                                ,
                                r = true;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor &&
                                (sat = eat - 0.3) &&
                                (eat = eat + 0.3);

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.value);
                                this.o.cursor &&
                                    (sa = ea - 0.3) &&
                                    (ea = ea + 0.3);
                                this.g.beginPath();
                                this.g.strokeStyle = this.previousColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });
            });
        </script>
</body>

</html>