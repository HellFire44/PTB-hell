<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- page CSS -->
    <link href="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle text-white"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle text-white"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle text-white"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-end animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                         <!-- Accordian -->
                                        <div class="accordion" id="accordionExample">
                                            <div class="card m-b-0">
                                                <div class="card-header p-0" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header p-0" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header p-0" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info text-white">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="pages-login.php" class="dropdown-item"><i class="fas fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard <span class="badge rounded-pill bg-cyan ms-auto">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php">Minimal </a></li>
                                <li><a href="index2.php">Analytical</a></li>
                                <li><a href="index3.php">Demographical</a></li>
                                <li><a href="index4.php">Modern</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.php">Calendar</a></li>
                                <li><a href="app-chat.php">Chat app</a></li>
                                <li><a href="app-ticket.php">Support Ticket</a></li>
                                <li><a href="app-contact.php">Contact / Employee</a></li>
                                <li><a href="app-contact2.php">Contact Grid</a></li>
                                <li><a href="app-contact-detail.php">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.php">Mailbox</a></li>
                                <li><a href="app-email-detail.php">Mailbox Detail</a></li>
                                <li><a href="app-compose.php">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span class="badge rounded-pill bg-primary text-white ms-auto">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-cards.php">Cards</a></li>
                                <li><a href="ui-user-card.php">User Cards</a></li>
                                <li><a href="ui-buttons.php">Buttons</a></li>
                                <li><a href="ui-modals.php">Modals</a></li>
                                <li><a href="ui-tab.php">Tab</a></li>
                                <li><a href="ui-tooltip-popover.php">Tooltip &amp; Popover</a></li>
                                <li><a href="ui-tooltip-stylish.php">Tooltip stylish</a></li>
                                <li><a href="ui-sweetalert.php">Sweet Alert</a></li>
                                <li><a href="ui-notification.php">Notification</a></li>
                                <li><a href="ui-progressbar.php">Progressbar</a></li>
                                <li><a href="ui-nestable.php">Nestable</a></li>
                                <li><a href="ui-range-slider.php">Range slider</a></li>
                                <li><a href="ui-timeline.php">Timeline</a></li>
                                <li><a href="ui-typography.php">Typography</a></li>
                                <li><a href="ui-horizontal-timeline.php">Horizontal Timeline</a></li>
                                <li><a href="ui-session-timeout.php">Session Timeout</a></li>
                                <li><a href="ui-session-ideal-timeout.php">Session Ideal Timeout</a></li>
                                <li><a href="ui-bootstrap.php">Bootstrap Ui</a></li>
                                <li><a href="ui-breadcrumb.php">Breadcrumb</a></li>
                                <li><a href="ui-bootstrap-switch.php">Bootstrap Switch</a></li>
                                <li><a href="ui-list-media.php">List Media</a></li>
                                <li><a href="ui-ribbons.php">Ribbons</a></li>
                                <li><a href="ui-grid.php">Grid</a></li>
                                <li><a href="ui-carousel.php">Carousel</a></li>
                                <li><a href="ui-offcanvas.php">Offcanvas</a></li>
                                <li><a href="ui-date-paginator.php">Date-paginator</a></li>
                                <li><a href="ui-dragable-portlet.php">Dragable Portlet</a></li>
                                <li><a href="ui-spinner.php">Spinner</a></li>
                                <li><a href="ui-scrollspy.php">Scrollspy</a></li>
                                <li><a href="ui-toasts.php">Toasts</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.php">Basic Forms</a></li>
                                <li><a href="form-layout.php">Form Layouts</a></li>
                                <li><a href="form-addons.php">Form Addons</a></li>
                                <li><a href="form-material.php">Form Material</a></li>
                                <li><a href="form-float-input.php">Floating Lable</a></li>
                                <li><a href="form-pickers.php">Form Pickers</a></li>
                                <li><a href="form-upload.php">File Upload</a></li>
                                <li><a href="form-mask.php">Form Mask</a></li>
                                <li><a href="form-validation.php">Form Validation</a></li>
                                <li><a href="form-bootstrap-validation.php">Form Bootstrap Validation</a></li>
                                <li><a href="form-dropzone.php">File Dropzone</a></li>
                                <li><a href="form-icheck.php">Icheck control</a></li>
                                <li><a href="form-img-cropper.php">Image Cropper</a></li>
                                <li><a href="form-bootstrapwysihtml5.php">HTML5 Editor</a></li>
                                <li><a href="form-typehead.php">Form Typehead</a></li>
                                <li><a href="form-wizard.php">Form Wizard</a></li>
                                <li><a href="form-xeditable.php">Xeditable Editor</a></li>
                                <li><a href="form-summernote.php">Summernote Editor</a></li>
                                <li><a href="form-tinymce.php">Tinymce Editor</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.php">Basic Tables</a></li>
                                <li><a href="table-layout.php">Table Layouts</a></li>
                                <li><a href="table-data-table.php">Data Tables</a></li>
                                <li><a href="table-footable.php">Footable</a></li>
                                <li><a href="table-jsgrid.php">Js Grid Table</a></li>
                                <li><a href="table-responsive.php">Responsive Table</a></li>
                                <li><a href="table-bootstrap.php">Bootstrap Tables</a></li>
                                <li><a href="table-editable-table.php">Editable Table</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-data.php">Data Widgets</a></li>
                                <li><a href="widget-apps.php">Apps Widgets</a></li>
                                <li><a href="widget-charts.php">Charts Widgets</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-single-column.php">1 Column</a></li>
                                <li><a href="layout-fix-header.php">Fix header</a></li>
                                <li><a href="layout-fix-sidebar.php">Fix sidebar</a></li>
                                <li><a href="layout-fix-header-sidebar.php">Fixe header &amp; Sidebar</a></li>
                                <li><a href="layout-boxed.php">Boxed Layout</a></li>
                                <li><a href="layout-logo-center.php">Logo in Center</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span class="badge rounded-pill bg-info">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.php">Starter Kit</a></li>
                                <li><a href="pages-blank.php">Blank page</a></li>
                                <li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge rounded-pill bg-success pull-right">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-login.php">Login 1</a></li>
                                        <li><a href="pages-login-2.php">Login 2</a></li>
                                        <li><a href="pages-register.php">Register</a></li>
                                        <li><a href="pages-register2.php">Register 2</a></li>
                                        <li><a href="pages-register3.php">Register 3</a></li>
                                        <li><a href="pages-lockscreen.php">Lockscreen</a></li>
                                        <li><a href="pages-recover-password.php">Recover password</a></li>
                                    </ul>
                                </li>
                                <li><a href="pages-profile.php">Profile page</a></li>
                                <li><a href="pages-animation.php">Animation</a></li>
                                <li><a href="pages-fix-innersidebar.php">Sticky Left sidebar</a></li>
                                <li><a href="pages-fix-inner-right-sidebar.php">Sticky Right sidebar</a></li>
                                <li><a href="pages-invoice.php">Invoice</a></li>
                                <li><a href="pages-treeview.php">Treeview</a></li>
                                <li><a href="pages-utility-classes.php">Helper Classes</a></li>
                                <li><a href="pages-search-result.php">Search result</a></li>
                                <li><a href="pages-scroll.php">Scrollbar</a></li>
                                <li><a href="pages-pricing.php">Pricing</a></li>
                                <li><a href="pages-lightbox-popup.php">Lighbox popup</a></li>
                                <li><a href="pages-gallery.php">Gallery</a></li>
                                <li><a href="pages-faq.php">Faqs</a></li>
                                <li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-error-400.php">400</a></li>
                                        <li><a href="pages-error-403.php">403</a></li>
                                        <li><a href="pages-error-404.php">404</a></li>
                                        <li><a href="pages-error-500.php">500</a></li>
                                        <li><a href="pages-error-503.php">503</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.php">Morris Chart</a></li>
                                <li><a href="chart-chartist.php">Chartis Chart</a></li>
                                <li><a href="chart-echart.php">Echarts</a></li>
                                <li><a href="chart-flot.php">Flot Chart</a></li>
                                <li><a href="chart-knob.php">Knob Chart</a></li>
                                <li><a href="chart-chart-js.php">Chartjs</a></li>
                                <li><a href="chart-sparkline.php">Sparkline Chart</a></li>
                                <li><a href="chart-extra-chart.php">Extra chart</a></li>
                                <li><a href="chart-peity.php">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-light-bulb"></i><span class="hide-menu">Icons</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.php">Material Icons</a></li>
                                <li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
                                <li><a href="icon-themify.php">Themify Icons</a></li>
                                <li><a href="icon-weather.php">Weather Icons</a></li>
                                <li><a href="icon-simple-lineicon.php">Simple Line icons</a></li>
                                <li><a href="icon-flag.php">Flag Icons</a></li>
                                <li><a href="icon-iconmind.php">Mind Icons</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.php">Google Maps</a></li>
                                <li><a href="map-vector.php">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)">item 1.1</a></li>
                                <li><a href="javascript:void(0)">item 1.2</a></li>
                                <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="javascript:void(0)">item 1.3.1</a></li>
                                        <li><a href="javascript:void(0)">item 1.3.2</a></li>
                                        <li><a href="javascript:void(0)">item 1.3.3</a></li>
                                        <li><a href="javascript:void(0)">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">item 1.4</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- SUPPORT</li>
                        <li>
                            <a class="waves-effect waves-dark" href="documentation/documentation.php" aria-expanded="false">
                                <i class="far fa-circle text-danger"></i>
                                <span class="hide-menu">Documentation</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="pages-login.php" aria-expanded="false">
                                <i class="far fa-circle text-success"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="pages-faq.php" aria-expanded="false">
                                <i class="far fa-circle text-info"></i>
                                <span class="hide-menu">FAQs</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Form Addons</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Form Addons</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Select 2</h4>
                                <h6 class="card-subtitle"> Select2 for custom search and select</h6>
                                <h5 class="m-t-30">Single select2</h5>
                                <select class="select2 form-control form-select" style="width: 100%; height:36px;">
                                    <option>Select</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                                <h5 class="m-t-20">Multiple select boxes</h5>
                                <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap Select boxes</h4>
                                <h6 class="card-subtitle">Just add bootstrap-select-min.js and same css & add class <code>.selectpicker</code> to select</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="m-t-30 m-b-10">Select box</h5>
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="m-t-30 m-b-10">Select boxes with optgroups</h5>
                                        <select class="selectpicker" data-style="form-control btn-secondary">
                                            <optgroup label="Picnic">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="m-t-30">Multiple select boxes</h5>
                                        <select class="selectpicker" multiple data-style="form-control btn-info">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                                <h5 class="m-t-30">With colored Button Classes</h5>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-primary">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-info text-white">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-warning ">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-danger text-white">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20 m-r-10" data-style="btn-success text-white">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="selectpicker m-b-20" data-style="btn-default">
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Switcher</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="box-title">Basic</h4>
                                        <p class="text-muted  font-13"> add the following line <code> class="js-switch" data-color="#009efb"</code> to your input element. </p>
                                        <div class="switchery-demo m-b-30">
                                            <input type="checkbox" checked class="js-switch" data-color="#009efb" />
                                            <input type="checkbox" checked class="js-switch" data-color="#f62d51" />
                                            <input type="checkbox" checked class="js-switch" data-color="#26c6da" />
                                            <input type="checkbox" checked class="js-switch" data-color="#ffbc34" />
                                            <input type="checkbox" checked class="js-switch" data-color="#7460ee" />
                                            <input type="checkbox" checked class="js-switch" data-color="#3d3b3b" /> </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="box-title">Sizes</h4>
                                        <p class="text-muted font-13"> You can add <code> data-size="small",data-size="large"</code> to your input element for different sizes. </p>
                                        <div class="m-b-30">
                                            <input type="checkbox" checked class="js-switch" data-color="#f62d51" data-size="small" />
                                            <input type="checkbox" checked class="js-switch" data-color="#26c6da" />
                                            <input type="checkbox" checked class="js-switch" data-color="#ffbc34" data-size="large" /> </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="box-title">Secondary color</h4>
                                        <p class="text-muted font-13"> You can apply <code> data-color="@color" data-secondary-color="@color"</code> to your input element to both color. </p>
                                        <div class="m-b-30">
                                            <input type="checkbox" class="js-switch" data-color="#26c6da" data-secondary-color="#f62d51" />
                                            <input type="checkbox" class="js-switch" data-color="#009efb" data-secondary-color="#7460ee" /> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input Tags</h4>
                                <h6 class="card-subtitle">Add <code>data-role="tagsinput"</code> to your input field & its automatically change it to a tags input.</h6>
                                <div class="tags-default">
                                    <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags" /> </div>
                                <h4 class="card-title m-t-30">Select Tags</h4>
                                <h6 class="card-subtitle">You can also use <code>select multiple</code> to your input field.</h6>
                                <select multiple data-role="tagsinput">
                                    <option value="Amsterdam">Amsterdam</option>
                                    <option value="Washington">Washington</option>
                                    <option value="Sydney">Sydney</option>
                                </select>
                                <h4 class="card-title  m-t-30">Input Group Tags</h4>
                                <h6 class="card-subtitle">You can also use group tag <code>data-role="tagsinput"</code> to your input field.</h6>
                                <div class="input-group  m-t-20 m-b-30"> <span class="input-group-addon">Tags</span>
                                    <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> </div>
                                <div class="input-group">
                                    <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags"> <span class="input-group-addon">Tags</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dynamic Form Fields</h4>
                                <div id="education_fields"></div>
                                <div class="row">
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="School name">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="Major">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Degree">
                                        </div>
                                    </div>
                                    <div class="col-sm-3 nopadding">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="form-select" id="educationDate" name="educationDate[]">
                                                    <option value="">Date</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                </select>
                                                <div class="input-group-append">
                                                    <button class="btn btn-success text-white" type="button" onclick="education_fields();"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bootstrap TouchSpin</h4>
                                <h6 class="card-subtitle">Use the <code> data-plugin="touchSpin" </code> to create a Bootstrap style spinner.</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form class="p-r-20">
                                            <div class="form-group">
                                                <label class="form-label">Vertical Touchspin</label>
                                                <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" value="" name="vertical-spin"> </div>
                                            <div class="form-group">
                                                <label class="form-label">Postfix</label>
                                                <input id="tch1" type="text" value="55" name="tch1" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> </div>
                                            <div class="form-group m-b-0">
                                                <label class="form-label">Prefix</label>
                                                <input id="tch2" type="text" value="0" name="tch2" class=" form-control" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6">
                                        <form>
                                            <div class="form-group">
                                                <label class="form-label">Init </label>
                                                <input id="tch3" type="text" value="" name="tch3" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> </div>
                                            <div class="form-group">
                                                <label class="form-label">Value set 30 </label>
                                                <input id="tch3_22" type="text" value="30" name="tch3_22" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline"> </div>
                                            <div class="form-group m-b-0">
                                                <label class="form-label">Button group</label>
                                                <div class="input-group">
                                                    <input id="tch5" type="text" class="form-control" name="tch5" value="50" data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body overflow-auto">
                                <h4 class="card-title">Multiple Select</h4>
                                <h6 class="card-subtitle"> Use a <code>select multiple</code> as your input element.</h6>
                                <div class="row">
                                    <div class="col-lg-6 col-xlg-4  m-b-30">
                                        <h5 class="box-title">Pre-selected options</h5>
                                        <select id='pre-selected-options' multiple='multiple'>
                                            <option value='elem_1'>elem 1</option>
                                            <option value='elem_2'>elem 2</option>
                                            <option value='elem_3'>elem 3</option>
                                            <option value='elem_4' selected>elem 4</option>
                                            <option value='elem_5' selected>elem 5</option>
                                            <option value="elem_6">elem 6</option>
                                            <option value="elem_7">elem 7</option>
                                            <option value="elem_8">elem 8</option>
                                            <option value="elem_9">elem 9</option>
                                            <option value="elem_10">elem 10</option>
                                            <option value="elem_11">elem 11</option>
                                            <option value="elem_12">elem 12</option>
                                            <option value="elem_13">elem 13</option>
                                            <option value="elem_14">elem 14</option>
                                            <option value="elem_15">elem 15</option>
                                            <option value="elem_16">elem 16</option>
                                            <option value="elem_17">elem 17</option>
                                            <option value="elem_18">elem 18</option>
                                            <option value="elem_19">elem 19</option>
                                            <option value="elem_20">elem 20</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-xlg-4">
                                        <h5 class="box-title">Optgroup</h5>
                                        <select multiple id="optgroup" name="optgroup[]">
                                            <optgroup label="Friends">
                                                <option value="1">Yoda</option>
                                                <option value="2" selected disabled>Obiwan</option>
                                            </optgroup>
                                            <optgroup label="Enemies">
                                                <option value="3">Palpatine</option>
                                                <option value="4" disabled>Darth Vader</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-lg-12 col-xlg-4">
                                        <h5 class="box-title">Public methods</h5>
                                        <select multiple id="public-methods" name="public-methods[]">
                                            <option value="elem_1">elem 1</option>
                                            <option value="elem_2" disabled>elem 2</option>
                                            <option value="elem_3">elem 3</option>
                                            <option value="elem_4">elem 4</option>
                                            <option value="elem_5">elem 5</option>
                                            <option value="elem_6">elem 6</option>
                                            <option value="elem_7">elem 7</option>
                                            <option value="elem_8">elem 8</option>
                                            <option value="elem_9">elem 9</option>
                                            <option value="elem_10">elem 10</option>
                                            <option value="elem_11">elem 11</option>
                                            <option value="elem_12">elem 12</option>
                                            <option value="elem_13">elem 13</option>
                                            <option value="elem_14">elem 14</option>
                                            <option value="elem_15">elem 15</option>
                                            <option value="elem_16">elem 16</option>
                                            <option value="elem_17">elem 17</option>
                                            <option value="elem_18">elem 18</option>
                                            <option value="elem_19">elem 19</option>
                                            <option value="elem_20">elem 20</option>
                                            <option value="elem_21">elem 21</option>
                                            <option value="elem_22">elem 22</option>
                                            <option value="elem_23">elem 23</option>
                                            <option value="elem_24">elem 24</option>
                                            <option value="elem_25">elem 25</option>
                                            <option value="elem_26">elem 26</option>
                                            <option value="elem_27">elem 27</option>
                                            <option value="elem_28">elem 28</option>
                                            <option value="elem_29">elem 29</option>
                                            <option value="elem_30">elem 30</option>
                                            <option value="elem_31">elem 31</option>
                                            <option value="elem_32">elem 32</option>
                                            <option value="elem_33">elem 33</option>
                                            <option value="elem_34">elem 34</option>
                                            <option value="elem_35">elem 35</option>
                                            <option value="elem_36">elem 36</option>
                                            <option value="elem_37">elem 37</option>
                                            <option value="elem_38">elem 38</option>
                                            <option value="elem_39">elem 39</option>
                                            <option value="elem_40">elem 40</option>
                                            <option value="elem_41">elem 41</option>
                                            <option value="elem_42">elem 42</option>
                                            <option value="elem_43">elem 43</option>
                                            <option value="elem_44">elem 44</option>
                                            <option value="elem_45">elem 45</option>
                                            <option value="elem_46">elem 46</option>
                                            <option value="elem_47">elem 47</option>
                                            <option value="elem_48">elem 48</option>
                                            <option value="elem_49">elem 49</option>
                                            <option value="elem_50">elem 50</option>
                                            <option value="elem_51">elem 51</option>
                                            <option value="elem_52">elem 52</option>
                                            <option value="elem_53">elem 53</option>
                                            <option value="elem_54">elem 54</option>
                                            <option value="elem_55">elem 55</option>
                                            <option value="elem_56">elem 56</option>
                                            <option value="elem_57">elem 57</option>
                                            <option value="elem_58">elem 58</option>
                                            <option value="elem_59">elem 59</option>
                                            <option value="elem_60">elem 60</option>
                                            <option value="elem_61">elem 61</option>
                                            <option value="elem_62">elem 62</option>
                                            <option value="elem_63">elem 63</option>
                                            <option value="elem_64">elem 64</option>
                                            <option value="elem_65">elem 65</option>
                                            <option value="elem_66">elem 66</option>
                                            <option value="elem_67">elem 67</option>
                                            <option value="elem_68">elem 68</option>
                                            <option value="elem_69">elem 69</option>
                                            <option value="elem_70">elem 70</option>
                                            <option value="elem_71">elem 71</option>
                                            <option value="elem_72">elem 72</option>
                                            <option value="elem_73">elem 73</option>
                                            <option value="elem_74">elem 74</option>
                                            <option value="elem_75">elem 75</option>
                                            <option value="elem_76">elem 76</option>
                                            <option value="elem_77">elem 77</option>
                                            <option value="elem_78">elem 78</option>
                                            <option value="elem_79">elem 79</option>
                                            <option value="elem_80">elem 80</option>
                                            <option value="elem_81">elem 81</option>
                                            <option value="elem_82">elem 82</option>
                                            <option value="elem_83">elem 83</option>
                                            <option value="elem_84">elem 84</option>
                                            <option value="elem_85">elem 85</option>
                                            <option value="elem_86">elem 86</option>
                                            <option value="elem_87">elem 87</option>
                                            <option value="elem_88">elem 88</option>
                                            <option value="elem_89">elem 89</option>
                                            <option value="elem_90">elem 90</option>
                                            <option value="elem_91">elem 91</option>
                                            <option value="elem_92">elem 92</option>
                                            <option value="elem_93">elem 93</option>
                                            <option value="elem_94">elem 94</option>
                                            <option value="elem_95">elem 95</option>
                                            <option value="elem_96">elem 96</option>
                                            <option value="elem_97">elem 97</option>
                                            <option value="elem_98">elem 98</option>
                                            <option value="elem_99">elem 99</option>
                                            <option value="elem_100">elem 100</option>
                                            <option value="elem_101">elem 101</option>
                                            <option value="elem_102">elem 102</option>
                                            <option value="elem_103">elem 103</option>
                                            <option value="elem_104">elem 104</option>
                                            <option value="elem_105">elem 105</option>
                                            <option value="elem_106">elem 106</option>
                                            <option value="elem_107">elem 107</option>
                                            <option value="elem_108">elem 108</option>
                                            <option value="elem_109">elem 109</option>
                                            <option value="elem_110">elem 110</option>
                                            <option value="elem_111">elem 111</option>
                                            <option value="elem_112">elem 112</option>
                                            <option value="elem_113">elem 113</option>
                                            <option value="elem_114">elem 114</option>
                                            <option value="elem_115">elem 115</option>
                                            <option value="elem_116">elem 116</option>
                                            <option value="elem_117">elem 117</option>
                                            <option value="elem_118">elem 118</option>
                                            <option value="elem_119">elem 119</option>
                                            <option value="elem_120">elem 120</option>
                                            <option value="elem_121">elem 121</option>
                                            <option value="elem_122">elem 122</option>
                                            <option value="elem_123">elem 123</option>
                                            <option value="elem_124">elem 124</option>
                                            <option value="elem_125">elem 125</option>
                                            <option value="elem_126">elem 126</option>
                                            <option value="elem_127">elem 127</option>
                                            <option value="elem_128">elem 128</option>
                                            <option value="elem_129">elem 129</option>
                                            <option value="elem_130">elem 130</option>
                                            <option value="elem_131">elem 131</option>
                                            <option value="elem_132">elem 132</option>
                                            <option value="elem_133">elem 133</option>
                                            <option value="elem_134">elem 134</option>
                                            <option value="elem_135">elem 135</option>
                                            <option value="elem_136">elem 136</option>
                                            <option value="elem_137">elem 137</option>
                                            <option value="elem_138">elem 138</option>
                                            <option value="elem_139">elem 139</option>
                                            <option value="elem_140">elem 140</option>
                                            <option value="elem_141">elem 141</option>
                                            <option value="elem_142">elem 142</option>
                                            <option value="elem_143">elem 143</option>
                                            <option value="elem_144">elem 144</option>
                                            <option value="elem_145">elem 145</option>
                                            <option value="elem_146">elem 146</option>
                                            <option value="elem_147">elem 147</option>
                                            <option value="elem_148">elem 148</option>
                                            <option value="elem_149">elem 149</option>
                                            <option value="elem_150">elem 150</option>
                                            <option value="elem_151">elem 151</option>
                                            <option value="elem_152">elem 152</option>
                                            <option value="elem_153">elem 153</option>
                                            <option value="elem_154">elem 154</option>
                                            <option value="elem_155">elem 155</option>
                                            <option value="elem_156">elem 156</option>
                                            <option value="elem_157">elem 157</option>
                                            <option value="elem_158">elem 158</option>
                                            <option value="elem_159">elem 159</option>
                                            <option value="elem_160">elem 160</option>
                                            <option value="elem_161">elem 161</option>
                                            <option value="elem_162">elem 162</option>
                                            <option value="elem_163">elem 163</option>
                                            <option value="elem_164">elem 164</option>
                                            <option value="elem_165">elem 165</option>
                                            <option value="elem_166">elem 166</option>
                                            <option value="elem_167">elem 167</option>
                                            <option value="elem_168">elem 168</option>
                                            <option value="elem_169">elem 169</option>
                                            <option value="elem_170">elem 170</option>
                                            <option value="elem_171">elem 171</option>
                                            <option value="elem_172">elem 172</option>
                                            <option value="elem_173">elem 173</option>
                                            <option value="elem_174">elem 174</option>
                                            <option value="elem_175">elem 175</option>
                                            <option value="elem_176">elem 176</option>
                                            <option value="elem_177">elem 177</option>
                                            <option value="elem_178">elem 178</option>
                                            <option value="elem_179">elem 179</option>
                                            <option value="elem_180">elem 180</option>
                                            <option value="elem_181">elem 181</option>
                                            <option value="elem_182">elem 182</option>
                                            <option value="elem_183">elem 183</option>
                                            <option value="elem_184">elem 184</option>
                                            <option value="elem_185">elem 185</option>
                                            <option value="elem_186">elem 186</option>
                                            <option value="elem_187">elem 187</option>
                                            <option value="elem_188">elem 188</option>
                                            <option value="elem_189">elem 189</option>
                                            <option value="elem_190">elem 190</option>
                                            <option value="elem_191">elem 191</option>
                                            <option value="elem_192">elem 192</option>
                                            <option value="elem_193">elem 193</option>
                                            <option value="elem_194">elem 194</option>
                                            <option value="elem_195">elem 195</option>
                                            <option value="elem_196">elem 196</option>
                                            <option value="elem_197">elem 197</option>
                                            <option value="elem_198">elem 198</option>
                                            <option value="elem_199">elem 199</option>
                                            <option value="elem_200">elem 200</option>
                                        </select>
                                        <div class="button-box m-t-20"> <a id="select-all" class="btn btn-danger text-white" href="javascript:void(0)">select all</a> <a id="deselect-all" class="btn btn-info text-white" href="javascript:void(0)">deselect all</a> <a id="add-option" class="btn btn-success text-white" href="javascript:void(0)">Add option</a> <a id="refresh" class="btn btn-warning" href="javascript:void(0)">refresh</a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2021 Eliteadmin by themedesigner.in
            <a href="https://www.wrappixel.com/">WrapPixel</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/switchery/dist/switchery.min.js"></script>
    <script src="assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="assets/node_modules/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script>
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
    </script>
</body>

</html>