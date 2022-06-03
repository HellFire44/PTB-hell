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
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/icon-page.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Flag Icon</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Flag Icon</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">flag icons</h4>
                                <h6 class="card-subtitle">You can use any icons with class <code>flag-icon flag-icon-us</code></h6>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ad" title="ad" id="ad"></i> AD</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ae" title="ae" id="ae"></i> AE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-af" title="af" id="af"></i> AF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ag" title="ag" id="ag"></i> AG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ai" title="ai" id="ai"></i> AU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-al" title="al" id="al"></i> AL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-am" title="am" id="am"></i> AM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ao" title="ao" id="ao"></i> AO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-aq" title="aq" id="aq"></i> AQ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ar" title="ar" id="ar"></i> AR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-as" title="as" id="as"></i> AS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-at" title="at" id="at"></i> AT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-au" title="au" id="au"></i> AU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-aw" title="aw" id="aw"></i> AW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ax" title="ax" id="ax"></i> AX</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-az" title="az" id="az"></i> AZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ba" title="ba" id="ba"></i> BA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bb" title="bb" id="bb"></i> BB</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bd" title="bd" id="bd"></i> BD</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-be" title="be" id="be"></i> BE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bf" title="bf" id="bf"></i> BF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bg" title="bg" id="bg"></i> BG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bh" title="bh" id="bh"></i> BH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bi" title="bi" id="bi"></i> BI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bj" title="bj" id="bj"></i> BJ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bl" title="bl" id="bl"></i> BL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bm" title="bm" id="bm"></i> BM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bn" title="bn" id="bn"></i> BN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bo" title="bo" id="bo"></i> BO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bq" title="bq" id="bq"></i> BQ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-br" title="br" id="br"></i> BR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bs" title="bs" id="bs"></i> BS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bt" title="bt" id="bt"></i> BT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bv" title="bv" id="bv"></i> BV</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bw" title="bw" id="bw"></i> BW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-by" title="by" id="by"></i> BY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-bz" title="bz" id="bz"></i> BZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ca" title="ca" id="ca"></i> CA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cc" title="cc" id="cc"></i> CC</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cd" title="cd" id="cd"></i> CD</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cf" title="cf" id="cf"></i> CF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cg" title="cg" id="cg"></i> CG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ch" title="ch" id="ch"></i> CH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ci" title="ci" id="ci"></i> CI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ck" title="ck" id="ck"></i> CK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cl" title="cl" id="cl"></i> CL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cm" title="cm" id="cm"></i> CM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cn" title="cn" id="cn"></i> CN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-co" title="co" id="co"></i> CO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cr" title="cr" id="cr"></i> CR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cu" title="cu" id="cu"></i> CU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cv" title="cv" id="cv"></i> CV</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cw" title="cw" id="cw"></i> CW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cx" title="cx" id="cx"></i> CX</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cy" title="cy" id="cy"></i> CY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-cz" title="cz" id="cz"></i> CZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-de" title="de" id="de"></i> DE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-dj" title="dj" id="dj"></i> DJ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-dk" title="dk" id="dk"></i> DK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-dm" title="dm" id="dm"></i> DM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-do" title="do" id="do"></i> DO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-dz" title="dz" id="dz"></i> DZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ec" title="ec" id="ec"></i> EC</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ee" title="ee" id="ee"></i> EE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-eg" title="eg" id="eg"></i> EG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-eh" title="eh" id="eh"></i> EH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-er" title="er" id="er"></i> ER</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-es" title="es" id="es"></i> ES</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-et" title="et" id="et"></i> ET</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-fi" title="fi" id="fi"></i> FI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-fj" title="fj" id="fj"></i> FJ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-fk" title="fk" id="fk"></i> FK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-fm" title="fm" id="fm"></i> FM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-fo" title="fo" id="fo"></i> FO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> FR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ga" title="ga" id="ga"></i> GA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gb" title="gb" id="gb"></i> GB</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gd" title="gd" id="gd"></i> GD</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ge" title="ge" id="ge"></i> GE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gf" title="gf" id="gf"></i> GF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gg" title="gg" id="gg"></i> GG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gh" title="gh" id="gh"></i> GH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gi" title="gi" id="gi"></i> GI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gl" title="gl" id="gl"></i> GL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gm" title="gm" id="gm"></i> GM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gn" title="gn" id="gn"></i> GN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gp" title="gp" id="gp"></i> GP</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gq" title="gq" id="gq"></i> GQ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gr" title="gr" id="gr"></i> GR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gs" title="gs" id="gs"></i> GS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gt" title="gt" id="gt"></i> GT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gu" title="gu" id="gu"></i> GU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gw" title="gw" id="gw"></i> GW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-gy" title="gy" id="gy"></i> GY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-hk" title="hk" id="hk"></i> HK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-hm" title="hm" id="hm"></i> HM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-hn" title="hn" id="hn"></i> HN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-hr" title="hr" id="hr"></i> HR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ht" title="ht" id="ht"></i> HT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-hu" title="hu" id="hu"></i> HU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-id" title="id" id="id"></i> ID</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ie" title="ie" id="ie"></i> IE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-il" title="il" id="il"></i> IL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-im" title="im" id="im"></i> IM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-in" title="in" id="in"></i> IN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-io" title="io" id="io"></i> IO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-iq" title="iq" id="iq"></i> IQ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ir" title="ir" id="ir"></i> IR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-is" title="is" id="is"></i> IS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-it" title="it" id="it"></i> IT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-je" title="je" id="je"></i> JE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-jm" title="jm" id="jm"></i> JM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-jo" title="jo" id="jo"></i> JO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-jp" title="jp" id="jp"></i> JP</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ke" title="ke" id="ke"></i> KE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-kg" title="kg" id="kg"></i> KG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-kh" title="kh" id="kh"></i> KH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ki" title="ki" id="ki"></i> KI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-km" title="km" id="km"></i> KM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-kn" title="kn" id="kn"></i> KN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-kp" title="kp" id="kp"></i> KP</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-kr" title="kr" id="kr"></i> KR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-kw" title="kw" id="kw"></i> KW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ky" title="ky" id="ky"></i> KY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-kz" title="kz" id="kz"></i> KZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-la" title="la" id="la"></i> LA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-lb" title="lb" id="lb"></i> LB</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-lc" title="lc" id="lc"></i> LC</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-li" title="li" id="li"></i> LI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-lk" title="lk" id="lk"></i> LK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-lr" title="lr" id="lr"></i> LR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ls" title="ls" id="ls"></i> LS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-lt" title="lt" id="lt"></i> LT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-lu" title="lu" id="lu"></i> LU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-lv" title="lv" id="lv"></i> LV</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ly" title="ly" id="ly"></i> LY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ma" title="ma" id="ma"></i> MA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mc" title="mc" id="mc"></i> MC</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-md" title="md" id="md"></i> MD</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-me" title="me" id="me"></i> ME</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mf" title="mf" id="mf"></i> MF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mg" title="mg" id="mg"></i> MG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mh" title="mh" id="mh"></i> MH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mk" title="mk" id="mk"></i> MK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ml" title="ml" id="ml"></i> ML</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mm" title="mm" id="mm"></i> MM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mn" title="mn" id="mn"></i> MN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mo" title="mo" id="mo"></i> MO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mp" title="mp" id="mp"></i> MP</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mq" title="mq" id="mq"></i> MQ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mr" title="mr" id="mr"></i> MR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ms" title="ms" id="ms"></i> MS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mt" title="mt" id="mt"></i> MT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mu" title="mu" id="mu"></i> MU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mv" title="mv" id="mv"></i> MV</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mw" title="mw" id="mw"></i> MW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mx" title="mx" id="mx"></i> MX</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-my" title="my" id="my"></i> MY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-mz" title="mz" id="mz"></i> MZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-na" title="na" id="na"></i> NA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-nc" title="nc" id="nc"></i> NC</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ne" title="ne" id="ne"></i> NE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-nf" title="nf" id="nf"></i> NF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ng" title="ng" id="ng"></i> NG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ni" title="ni" id="ni"></i> NI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-nl" title="nl" id="nl"></i> NL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-no" title="no" id="no"></i> NO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-np" title="np" id="np"></i> NP</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-nr" title="nr" id="nr"></i> NR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-nu" title="nu" id="nu"></i> NU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-nz" title="nz" id="nz"></i> NZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-om" title="om" id="om"></i> OM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pa" title="pa" id="pa"></i> PA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pe" title="pe" id="pe"></i> PE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pf" title="pf" id="pf"></i> PF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pg" title="pg" id="pg"></i> PG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ph" title="ph" id="ph"></i> PH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pk" title="pk" id="pk"></i> PK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pl" title="pl" id="pl"></i> PL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pm" title="pm" id="pm"></i> PM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pn" title="pn" id="pn"></i> PN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pr" title="pr" id="pr"></i> PR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ps" title="ps" id="ps"></i> PS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> PT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-pw" title="pw" id="pw"></i> PW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-py" title="py" id="py"></i> PY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-qa" title="qa" id="qa"></i> QA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-re" title="re" id="re"></i> RE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ro" title="ro" id="ro"></i> RO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-rs" title="rs" id="rs"></i> RS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ru" title="ru" id="ru"></i> RU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-rw" title="rw" id="rw"></i> RW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sa" title="sa" id="sa"></i> SA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sb" title="sb" id="sb"></i> SB</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sc" title="sc" id="sc"></i> SC</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sd" title="sd" id="sd"></i> SD</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-se" title="se" id="se"></i> SE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sg" title="sg" id="sg"></i> SG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sh" title="sh" id="sh"></i> SH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-si" title="si" id="si"></i> SI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sj" title="sj" id="sj"></i> SJ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sk" title="sk" id="sk"></i> SK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sl" title="sl" id="sl"></i> SL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sm" title="sm" id="sm"></i> SM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sn" title="sn" id="sn"></i> SN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-so" title="so" id="so"></i> SO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sr" title="sr" id="sr"></i> SR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ss" title="ss" id="ss"></i> SS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-st" title="st" id="st"></i> ST</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sv" title="sv" id="sv"></i> SV</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sx" title="sx" id="sx"></i> SX</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sy" title="sy" id="sy"></i> SY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-sz" title="sz" id="sz"></i> SZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tc" title="tc" id="tc"></i> TC</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-td" title="td" id="td"></i> TD</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tf" title="tf" id="tf"></i> TF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tg" title="tg" id="tg"></i> TG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-th" title="th" id="th"></i> TH</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tj" title="tj" id="tj"></i> TJ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tk" title="tk" id="tk"></i> TK</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tl" title="tl" id="tl"></i> TL</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tm" title="tm" id="tm"></i> TM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tn" title="tn" id="tn"></i> TN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-to" title="to" id="to"></i> TO</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tr" title="tr" id="tr"></i> TR</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tt" title="tt" id="tt"></i> TT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tv" title="tv" id="tv"></i> TV</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tw" title="tw" id="tw"></i> TW</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-tz" title="tz" id="tz"></i> TZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ua" title="ua" id="ua"></i> UA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ug" title="ug" id="ug"></i> UG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-um" title="um" id="um"></i> UM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-us" title="us" id="us"></i> US</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-uy" title="uy" id="uy"></i> UY</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-uz" title="uz" id="uz"></i> UZ</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-va" title="va" id="va"></i> VA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-vc" title="vc" id="vc"></i> VC</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ve" title="ve" id="ve"></i> VE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-vg" title="vg" id="vg"></i> VG</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-vi" title="vi" id="vi"></i> VI</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-vn" title="vn" id="vn"></i> VN</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-vu" title="vu" id="vu"></i> VU</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-wf" title="wf" id="wf"></i> WF</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ws" title="ws" id="ws"></i> WS</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-ye" title="ye" id="ye"></i> YE</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-yt" title="yt" id="yt"></i> YT</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-za" title="za" id="za"></i> ZA</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-zm" title="zm" id="zm"></i> ZM</div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"><i class="flag-icon flag-icon-zw" title="zw" id="zw"></i> ZW</div>
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
</body>

</html>