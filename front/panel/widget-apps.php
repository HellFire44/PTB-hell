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
    <!-- chartist CSS -->
    <link href="assets/node_modules/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/node_modules/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/node_modules/css-chart/css-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/widget-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Widget Apps</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Widget Apps</li>
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
                <div class="row widget-app-columns">
                    <div class="col-xl-4">
                    <!-- ============================================================== -->
                    <!-- Recent Comments copy and paste this code-->
                    <!-- ============================================================== -->
                    <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Comments</h4>
                            </div>
                            <!-- ============================================================== -->
                            <!-- Comment widgets -->
                            <!-- ============================================================== -->
                            <div class="comment-widgets m-b-20">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2">
                                        <span class="round">
                                            <img src="assets/images/users/1.jpg" alt="user" width="50">
                                        </span>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5>James Anderson</h5>
                                        <div class="comment-footer">
                                            <span class="date">April 14, 2016</span>
                                            <span class="label label-info">Pending</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-pencil-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-checkbox-marked-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-heart"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                            has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row ">
                                    <div class="p-2">
                                        <span class="round">
                                            <img src="assets/images/users/2.jpg" alt="user" width="50">
                                        </span>
                                    </div>
                                    <div class="comment-text active w-100">
                                        <h5>Michael Jorden</h5>
                                        <div class="comment-footer">
                                            <span class="date">April 14, 2016</span>
                                            <span class="label label-success">Approved</span>
                                            <span class="action-icons active">
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-pencil-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-checkbox-marked-circle text-success"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-heart text-danger"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                            has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2">
                                        <span class="round">
                                            <img src="assets/images/users/3.jpg" alt="user" width="50">
                                        </span>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5>Johnathan Doeting</h5>
                                        <div class="comment-footer">
                                            <span class="date">April 14, 2016</span>
                                            <span class="label label-danger">Rejected</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-pencil-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-checkbox-marked-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-heart"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                            has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2">
                                        <span class="round">
                                            <img src="assets/images/users/4.jpg" alt="user" width="50">
                                        </span>
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5>James Anderson</h5>
                                        <div class="comment-footer">
                                            <span class="date">April 14, 2016</span>
                                            <span class="label label-info">Pending</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-pencil-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-checkbox-marked-circle"></i>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <i class="mdi mdi-heart"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <p class="m-b-5 m-t-10">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                            has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- To Do list copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center">
                                    <h4 class="card-title">To Do list</h4>
                                    <div class="ms-auto">
                                        <button class="btn btn-sm btn-rounded btn-success text-white" data-bs-toggle="modal" data-bs-target="#myModal">Add Task</button>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- To do list widgets -->
                                <!-- ============================================================== -->
                                <div class="to-do-widget m-t-20">
                                    <!-- .modal for add task -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Task</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" class="form-control" placeholder="Enter Your Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Email address</label>
                                                            <input type="email" class="form-control" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success text-white" data-bs-dismiss="modal">Submit</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
                                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck">
                                                    <label class="form-check-label" for="customCheck">
                                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span> <span class="badge rounded-pill bg-danger float-end">Today</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto">
                                                    <li><img src="assets/images/users/1.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                                    <li><img src="assets/images/users/2.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                                    <li><img src="assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                    <li><img src="assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">
                                                        <span>Lorem Ipsum is simply dummy text of the printing</span><span class="badge rounded-pill bg-primary float-end">1 week </span>
                                                    </label>
                                                </div>
                                                <div class="item-date"> 26 jun 2017</div>
                                            </li>
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">
                                                        <span>Give Purchase report to</span> <span class="badge rounded-pill bg-info float-end">Yesterday</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto">
                                                    <li><img src="assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                    <li><img src="assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck3">
                                                    <label class="form-check-label" for="customCheck3">
                                                        <span>Lorem Ipsum is simply dummy text of the printing </span> <span class="badge rounded-pill bg-warning float-end">2 weeks</span>
                                                    </label>
                                                </div>
                                                <div class="item-date"> 26 jun 2017</div>
                                            </li>
                                            <li class="list-group-item" data-role="task">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck4">
                                                    <label class="form-check-label" for="customCheck4">
                                                        <span>Give Purchase report to</span> <span class="badge rounded-pill bg-info float-end">Yesterday</span>
                                                    </label>
                                                </div>
                                                <ul class="assignedto">
                                                    <li><img src="assets/images/users/3.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                                    <li><img src="assets/images/users/4.jpg" alt="user" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                                </ul>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Project of the month copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Projects of the Month</h4>
                                    <select class="form-select w-25 ms-auto">
                                        <option selected="">January</option>
                                        <option value="1">February</option>
                                        <option value="2">March</option>
                                        <option value="3">April</option>
                                    </select>
                                </div>
                                <div class="table-responsive m-t-40">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Assigned</th>
                                                <th>Name</th>
                                                <th>Priority</th>
                                                <th>Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="width:50px;">
                                                    <span class="round">S</span>
                                                </td>
                                                <td>
                                                    <h6>Sunil Joshi</h6>
                                                    <small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <span class="label label-light-success">Low</span>
                                                </td>
                                                <td>$3.9K</td>
                                            </tr>
                                            <tr class="active">
                                                <td>
                                                    <span class="round">
                                                        <img src="assets/images/users/2.jpg" alt="user" width="50">
                                                    </span>
                                                </td>
                                                <td>
                                                    <h6>Andrew</h6>
                                                    <small class="text-muted">Project Manager</small>
                                                </td>
                                                <td>Real Homes</td>
                                                <td>
                                                    <span class="label label-light-info">Medium</span>
                                                </td>
                                                <td>$23.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="round round-success">B</span>
                                                </td>
                                                <td>
                                                    <h6>Bhavesh patel</h6>
                                                    <small class="text-muted">Developer</small>
                                                </td>
                                                <td>MedicalPro Theme</td>
                                                <td>
                                                    <span class="label label-light-danger">High</span>
                                                </td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="round round-primary">N</span>
                                                </td>
                                                <td>
                                                    <h6>Nirav Joshi</h6>
                                                    <small class="text-muted">Frontend Eng</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td>
                                                    <span class="label label-light-success">Low</span>
                                                </td>
                                                <td>$10.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="round round-warning">M</span>
                                                </td>
                                                <td>
                                                    <h6>Micheal Doe</h6>
                                                    <small class="text-muted">Content Writer</small>
                                                </td>
                                                <td>Helping Hands</td>
                                                <td>
                                                    <span class="label label-light-danger">High</span>
                                                </td>
                                                <td>$12.9K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="round round-danger">N</span>
                                                </td>
                                                <td>
                                                    <h6>Johnathan</h6>
                                                    <small class="text-muted">Graphic</small>
                                                </td>
                                                <td>Digital Agency</td>
                                                <td>
                                                    <span class="label label-light-danger">High</span>
                                                </td>
                                                <td>$2.6K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- weather report copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h4 class="card-title">Weather Report</h4>
                                    <select class="form-select w-25 ms-auto">
                                        <option selected="">Today</option>
                                        <option value="1">Weekly</option>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center flex-row m-t-30">
                                    <div class="p-2 display-5 text-info">
                                        <i class="wi wi-day-showers"></i>
                                        <span>73
                                            <sup>°</sup>
                                        </span>
                                    </div>
                                    <div class="p-2">
                                        <h3 class="m-b-0">Saturday</h3>
                                        <small>Ahmedabad, India</small>
                                    </div>
                                </div>
                                <table class="table no-border">
                                    <tbody>
                                        <tr>
                                            <td>Wind</td>
                                            <td class="font-medium">ESE 17 mph</td>
                                        </tr>
                                        <tr>
                                            <td>Humidity</td>
                                            <td class="font-medium">83%</td>
                                        </tr>
                                        <tr>
                                            <td>Pressure</td>
                                            <td class="font-medium">28.56 in</td>
                                        </tr>
                                        <tr>
                                            <td>Cloud Cover</td>
                                            <td class="font-medium">78%</td>
                                        </tr>
                                        <tr>
                                            <td>Ceiling</td>
                                            <td class="font-medium">25760 ft</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <ul class="list-unstyled row text-center city-weather-days">
                                    <li class="col">
                                        <i class="wi wi-day-sunny"></i>
                                        <span>09:30</span>
                                        <h3>70
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col">
                                        <i class="wi wi-day-cloudy"></i>
                                        <span>11:30</span>
                                        <h3>72
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col">
                                        <i class="wi wi-day-hail"></i>
                                        <span>13:30</span>
                                        <h3>75
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                    <li class="col">
                                        <i class="wi wi-day-sprinkle"></i>
                                        <span>15:30</span>
                                        <h3>76
                                            <sup>°</sup>
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <!-- ============================================================== -->
                        <!-- Recent Chat copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Chats</h4>
                                <div class="chat-box">
                                    <!--chat Row -->
                                    <ul class="chat-list">
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="assets/images/users/1.jpg" alt="user" />
                                            </div>
                                            <div class="chat-content">
                                                <h5>James Anderson</h5>
                                                <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing & type setting industry.</div>
                                            </div>
                                            <div class="chat-time">10:56 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="assets/images/users/2.jpg" alt="user" />
                                            </div>
                                            <div class="chat-content">
                                                <h5>Bianca Doe</h5>
                                                <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="reverse">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">I would love to join the team.</div>
                                                <br/>
                                            </div>
                                            <div class="chat-time">10:58 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="reverse">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                                <br/>
                                            </div>
                                            <div class="chat-time">10:59 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="assets/images/users/3.jpg" alt="user" />
                                            </div>
                                            <div class="chat-content">
                                                <h5>Angelina Rhodes</h5>
                                                <div class="box bg-light-info">Well we have good budget for the project</div>
                                            </div>
                                            <div class="chat-time">11:00 am</div>
                                        </li>
                                        <!--chat Row -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-8">
                                        <textarea placeholder="Type your message here" class="form-control border-0"></textarea>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button type="button" class="btn btn-info btn-circle btn-lg text-white">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Recent Chat copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chats different option</h4>
                                <div class="chat-box">
                                    <!--chat Row -->
                                    <ul class="chat-list">
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="assets/images/users/1.jpg" alt="user" />
                                            </div>
                                            <div class="chat-content">
                                                <h5>James Anderson</h5>
                                                <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing & type setting industry.</div>
                                            </div>
                                            <div class="chat-time">10:56 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="assets/images/users/2.jpg" alt="user" />
                                            </div>
                                            <div class="chat-content">
                                                <h5>Bianca Doe</h5>
                                                <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="reverse">
                                            <div class="chat-content">
                                                <h5>Steave Doe</h5>
                                                <div class="box bg-light-inverse">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-img">
                                                <img src="assets/images/users/5.jpg" alt="user" />
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="reverse">
                                            <div class="chat-content">
                                                <h5>Steave Doe</h5>
                                                <div class="box bg-light-inverse">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-img">
                                                <img src="assets/images/users/5.jpg" alt="user" />
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li>
                                            <div class="chat-img">
                                                <img src="assets/images/users/3.jpg" alt="user" />
                                            </div>
                                            <div class="chat-content">
                                                <h5>Angelina Rhodes</h5>
                                                <div class="box bg-light-info">Well we have good budget for the project</div>
                                            </div>
                                            <div class="chat-time">11:00 am</div>
                                        </li>
                                        <!--chat Row -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-8">
                                        <textarea placeholder="Type your message here" class="form-control border-0"></textarea>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button type="button" class="btn btn-info btn-circle btn-lg text-white">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Recent message copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Messages</h4>
                                <div class="message-box">
                                    <div class="message-widget message-scroll">
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="assets/images/users/1.jpg" alt="user" class="img-circle">
                                                <span class="profile-status online pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem
                                                    Ipsum has been.</span>
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="assets/images/users/2.jpg" alt="user" class="img-circle">
                                                <span class="profile-status busy pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <span class="round">A</span>
                                                <span class="profile-status away pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5>
                                                <span class="mail-desc">Simply dummy text of the printing and typesetting industry.</span>
                                                <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="assets/images/users/4.jpg" alt="user" class="img-circle">
                                                <span class="profile-status offline pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="assets/images/users/1.jpg" alt="user" class="img-circle">
                                                <span class="profile-status online pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Welcome to the Elite Admin</span>
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="assets/images/users/2.jpg" alt="user" class="img-circle">
                                                <span class="profile-status busy pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="assets/images/users/3.jpg" alt="user" class="img-circle">
                                                <span class="profile-status away pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5>
                                                <span class="mail-desc">I am a singer!</span>
                                                <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="javascript:void(0)">
                                            <div class="user-img">
                                                <img src="assets/images/users/4.jpg" alt="user" class="img-circle">
                                                <span class="profile-status offline pull-right"></span>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Customer Profile copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="">
                                        <img src="assets/images/users/1.jpg" alt="user" class="img-circle" width="100" />
                                    </div>
                                    <div class="p-l-20">
                                        <h3 class="font-medium">Daniel Kristeen</h3>
                                        <h6>UIUX Designer</h6>
                                        <button class="btn btn-success text-white">
                                            <i class="ti-plus"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="row m-t-40">
                                    <div class="col b-r text-center">
                                        <h2 class="font-light">14</h2>
                                        <h6>Photos</h6>
                                    </div>
                                    <div class="col b-r text-center">
                                        <h2 class="font-light">54</h2>
                                        <h6>Videos</h6>
                                    </div>
                                    <div class="col text-center">
                                        <h2 class="font-light">145</h2>
                                        <h6>Tasks</h6>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <p class="text-center aboutscroll">
                                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do eiusmod tempor
                                    incididunLorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididuntt
                                </p>
                                <ul class="list-icons d-flex flex-item text-center p-t-10">
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Website">
                                            <i class="fa fa-globe font-20"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="twitter">
                                            <i class="fab fa-twitter font-20"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Facebook">
                                            <i class="fab fa-facebook-square font-20"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Youtube">
                                            <i class="fab fa-youtube font-20"></i>
                                        </a>
                                    </li>
                                    <li class="col">
                                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title="Linkd-in">
                                            <i class="fab fa-linkedin font-20"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <!-- ============================================================== -->
                        <!-- Browser state copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Browser Stats</h4>
                                <table class="table browser m-t-30 no-border">
                                    <tbody>
                                        <tr>
                                            <td style="width:40px">
                                                <img src="assets/images/browser/chrome-logo.png" alt="logo">
                                            </td>
                                            <td>Google Chrome</td>
                                            <td align="right">
                                                <span class="label label-info">23%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/browser/firefox-logo.png" alt="logo">
                                            </td>
                                            <td>Mozila Firefox</td>
                                            <td align="right">
                                                <span class="label label-success">15%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/browser/safari-logo.png" alt="logo">
                                            </td>
                                            <td>Apple Safari</td>
                                            <td align="right">
                                                <span class="label label-primary">07%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/browser/internet-logo.png" alt="logo">
                                            </td>
                                            <td>Internet Explorer</td>
                                            <td align="right">
                                                <span class="label label-warning">09%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/browser/opera-logo.png" alt="logo">
                                            </td>
                                            <td>Opera mini</td>
                                            <td align="right">
                                                <span class="label label-danger">23%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/browser/internet-logo.png" alt="logo">
                                            </td>
                                            <td>Microsoft edge</td>
                                            <td align="right">
                                                <span class="label label-megna">09%</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Subscribe form copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Subscribe</h4>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputname2" placeholder="Enter Name"> </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter email"> </div>
                                    <button type="submit" class="btn btn-info text-white">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- social-profile-first widgets copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img img-responsive" src="assets/images/big/img1.jpg" alt="Card image">
                            <div class="card-img-overlay card-inverse social-profile-first bg-over">
                                <img src="assets/images/users/1.jpg" class="img-circle" width="100" />
                                <h4 class="card-title">John doe</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-b-0">12K</h3>
                                        <h5 class="font-light">Followers</h5>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">420</h3>
                                        <h5 class="font-light">Following</h5>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">128</h3>
                                        <h5 class="font-light">Tweets</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- ============================================================== -->
                        <!-- social-profile-two widgets copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img img-responsive" src="assets/images/big/img1.jpg" alt="Card image">
                            <div class="card-img-overlay card-inverse social-profile-first bg-info">
                                <img src="assets/images/users/1.jpg" class="img-circle" width="100" />
                                <h4 class="card-title">John doe</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="m-b-0">12K</h3>
                                        <h5 class="font-light">Followers</h5>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">420</h3>
                                        <h5 class="font-light">Following</h5>
                                    </div>
                                    <div class="col">
                                        <h3 class="m-b-0">128</h3>
                                        <h5 class="font-light">Tweets</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- ============================================================== -->
                        <!-- visit from country widgets copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Visits around the countries</h4>
                                <ul class="country-state">
                                    <li>
                                        <h2>6350</h2>
                                        <small>From India</small>
                                        <div class="pull-right">48%
                                            <i class="fa fa-level-up text-success"></i>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2>3250</h2>
                                        <small>From UAE</small>
                                        <div class="pull-right">98%
                                            <i class="fa fa-level-up text-success"></i>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2>1250</h2>
                                        <small>From Australia</small>
                                        <div class="pull-right">75%
                                            <i class="fa fa-level-down text-danger"></i>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-inverse" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2>1350</h2>
                                        <small>From USA</small>
                                        <div class="pull-right">48%
                                            <i class="fa fa-level-up text-success"></i>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 48%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- ============================================================== -->
                        <!-- Feeds widgets copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <ul class="feeds">
                                    <li>
                                        <div class="bg-info">
                                            <i class="far fa-bell"></i>
                                        </div> You have 4 pending tasks.
                                        <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-success">
                                            <i class="ti-server"></i>
                                        </div> Server #1 overloaded.
                                        <span class="text-muted">2 Hours ago</span>
                                    </li>
                                    <li>
                                        <div class="bg-warning">
                                            <i class="ti-shopping-cart"></i>
                                        </div> New order received.
                                        <span class="text-muted">31 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-danger">
                                            <i class="ti-user"></i>
                                        </div> New user registered.
                                        <span class="text-muted">30 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-dark">
                                            <i class="far fa-bell"></i>
                                        </div> New Version just arrived.
                                        <span class="text-muted">27 May</span>
                                    </li>
                                    <li>
                                        <div class="bg-info">
                                            <i class="far fa-bell"></i>
                                        </div> You have 4 pending tasks.
                                        <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-danger">
                                            <i class="ti-user"></i>
                                        </div> New user registered.
                                        <span class="text-muted">30 May</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Totla Earning copy and paste this code-->
                        <!-- ============================================================== -->
                        <!-- Card -->
                        <div class="card earning-widget">
                            <div class="card-body">
                                <div class="card-title">
                                    <div class="d-flex">
                                        <span>
                                            <h4 class="card-title m-b-0">Total Earning</h4>
                                            <h2 class="m-t-0">$586</h2>
                                        </span>
                                        <select class="form-select w-25 ms-auto">
                                            <option selected="">Today</option>
                                            <option value="1">Weekly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body b-t">
                                <table class="table v-middle no-border">
                                    <tbody>
                                        <tr>
                                            <td style="width:40px">
                                                <img src="assets/images/users/1.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Andrew Simon</td>
                                            <td align="right">
                                                <span class="label label-info">$2300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/2.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Daniel Kristeen</td>
                                            <td align="right">
                                                <span class="label label-success">$3300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/3.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Dany John</td>
                                            <td align="right">
                                                <span class="label label-primary">$4300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/4.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Chris gyle</td>
                                            <td align="right">
                                                <span class="label label-warning">$5300</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/5.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Opera mini</td>
                                            <td align="right">
                                                <span class="label label-danger">$4567</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/images/users/6.jpg" width="50" class="img-circle" alt="logo">
                                            </td>
                                            <td>Microsoft edge</td>
                                            <td align="right">
                                                <span class="label label-megna">$7889</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
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
</body>

</html>