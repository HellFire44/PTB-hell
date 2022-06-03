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
                        <h4 class="text-themecolor">Themify Icon</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Themify Icon</li>
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
                                <h4 class="card-title">Arrows & Direction Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-up"></i> ti-arrow-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-right"></i> ti-arrow-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-left"></i> ti-arrow-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-down"></i> ti-arrow-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrows-vertical"></i> ti-arrows-vertical </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrows-horizontal"></i> ti-arrows-horizontal </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-angle-up"></i> ti-angle-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-angle-right"></i> ti-angle-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-angle-left"></i> ti-angle-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-angle-down"></i> ti-angle-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-angle-double-up"></i> ti-angle-double-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-angle-double-right"></i> ti-angle-double-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-angle-double-left"></i> ti-angle-double-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-angle-double-down"></i> ti-angle-double-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-move"></i> ti-move </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-fullscreen"></i> ti-fullscreen </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-top-right"></i> ti-arrow-top-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-top-left"></i> ti-arrow-top-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-circle-up"></i> ti-arrow-circle-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-circle-right"></i> ti-arrow-circle-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-circle-left"></i> ti-arrow-circle-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrow-circle-down"></i> ti-arrow-circle-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-arrows-corner"></i> ti-arrows-corner </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-split-v"></i> ti-split-v </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-split-v-alt"></i> ti-split-v-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-split-h"></i> ti-split-h </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-hand-point-up"></i> ti-hand-point-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-hand-point-right"></i> ti-hand-point-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-hand-point-left"></i> ti-hand-point-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-hand-point-down"></i> ti-hand-point-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-back-right"></i> ti-back-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-back-left"></i> ti-back-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-exchange-vertical"></i> ti-exchange-vertical </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Web App Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-wand"></i> ti-wand </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-save"></i> ti-save </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-save-alt"></i> ti-save-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-direction"></i> ti-direction </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-direction-alt"></i> ti-direction-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-user"></i> ti-user </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-link"></i> ti-link </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-unlink"></i> ti-unlink </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-trash"></i> ti-trash </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-target"></i> ti-target </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-tag"></i> ti-tag </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-desktop"></i> ti-desktop </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-tablet"></i> ti-tablet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-mobile"></i> ti-mobile </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-email"></i> ti-email </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-star"></i> ti-star </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-spray"></i> ti-spray </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-signal"></i> ti-signal </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shopping-cart"></i> ti-shopping-cart </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shopping-cart-full"></i> ti-shopping-cart-full </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-settings"></i> ti-settings </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-search"></i> ti-search </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-zoom-in"></i> ti-zoom-in </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-zoom-out"></i> ti-zoom-out </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-cut"></i> ti-cut </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-ruler"></i> ti-ruler </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-ruler-alt-2"></i> ti-ruler-alt-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-ruler-pencil"></i> ti-ruler-pencil </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-ruler-alt"></i> ti-ruler-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-bookmark"></i> ti-bookmark </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-bookmark-alt"></i> ti-bookmark-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-reload"></i> ti-reload </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-plus"></i> ti-plus </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-minus"></i> ti-minus </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-close"></i> ti-close </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pin"></i> ti-pin </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pencil"></i> ti-pencil </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pencil-alt"></i> ti-pencil-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-paint-roller"></i> ti-paint-roller </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-paint-bucket"></i> ti-paint-bucket </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-na"></i> ti-na </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-medall"></i> ti-medall </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-medall-alt"></i> ti-medall-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-marker"></i> ti-marker </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-marker-alt"></i> ti-marker-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-lock"></i> ti-lock </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-unlock"></i> ti-unlock </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-location-arrow"></i> ti-location-arrow </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout"></i> ti-layout </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layers"></i> ti-layers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layers-alt"></i> ti-layers-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-key"></i> ti-key </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-image"></i> ti-image </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-heart"></i> ti-heart </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-heart-broken"></i> ti-heart-broken </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-hand-stop"></i> ti-hand-stop </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-hand-open"></i> ti-hand-open </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-hand-drag"></i> ti-hand-drag </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-flag"></i> ti-flag </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-flag-alt"></i> ti-flag-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-flag-alt-2"></i> ti-flag-alt-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-eye"></i> ti-eye </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-import"></i> ti-import </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-export"></i> ti-export </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-cup"></i> ti-cup </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-crown"></i> ti-crown </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-comments"></i> ti-comments </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-comment"></i> ti-comment </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-comment-alt"></i> ti-comment-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-thought"></i> ti-thought </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-clip"></i> ti-clip </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-check"></i> ti-check </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-check-box"></i> ti-check-box </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-camera"></i> ti-camera </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-announcement"></i> ti-announcement </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-brush"></i> ti-brush </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-brush-alt"></i> ti-brush-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-palette"></i> ti-palette </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-briefcase"></i> ti-briefcase </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-bolt"></i> ti-bolt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-bolt-alt"></i> ti-bolt-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-blackboard"></i> ti-blackboard </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-bag"></i> ti-bag </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-world"></i> ti-world </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-wheelchair"></i> ti-wheelchair </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-car"></i> ti-car </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-truck"></i> ti-truck </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-timer"></i> ti-timer </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-ticket"></i> ti-ticket </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-thumb-up"></i> ti-thumb-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-thumb-down"></i> ti-thumb-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-stats-up"></i> ti-stats-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-stats-down"></i> ti-stats-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shine"></i> ti-shine </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shift-right"></i> ti-shift-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shift-left"></i> ti-shift-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shift-right-alt"></i> ti-shift-right-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shift-left-alt"></i> ti-shift-left-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shield"></i> ti-shield </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-notepad"></i> ti-notepad </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-server"></i> ti-server </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pulse"></i> ti-pulse </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-printer"></i> ti-printer </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-power-off"></i> ti-power-off </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-plug"></i> ti-plug </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pie-chart"></i> ti-pie-chart </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-panel"></i> ti-panel </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-package"></i> ti-package </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-music"></i> ti-music </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-music-alt"></i> ti-music-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-mouse"></i> ti-mouse </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-mouse-alt"></i> ti-mouse-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-money"></i> ti-money </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-microphone"></i> ti-microphone </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-menu"></i> ti-menu </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-menu-alt"></i> ti-menu-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-map"></i> ti-map </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-map-alt"></i> ti-map-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-location-pin"></i> ti-location-pin </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-light-bulb"></i> ti-light-bulb </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-info"></i> ti-info </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-infinite"></i> ti-infinite </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-id-badge"></i> ti-id-badge </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-hummer"></i> ti-hummer </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-home"></i> ti-home </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-help"></i> ti-help </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-headphone"></i> ti-headphone </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-harddrives"></i> ti-harddrives </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-harddrive"></i> ti-harddrive </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-gift"></i> ti-gift </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-game"></i> ti-game </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-filter"></i> ti-filter </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-files"></i> ti-files </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-file"></i> ti-file </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-zip"></i> ti-zip </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-folder"></i> ti-folder </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-envelope"></i> ti-envelope </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-dashboard"></i> ti-dashboard </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-cloud"></i> ti-cloud </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-cloud-up"></i> ti-cloud-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-cloud-down"></i> ti-cloud-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-clipboard"></i> ti-clipboard </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-calendar"></i> ti-calendar </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-book"></i> ti-book </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-bell"></i> ti-bell </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-basketball"></i> ti-basketball </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-bar-chart"></i> ti-bar-chart </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-bar-chart-alt"></i> ti-bar-chart-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-archive"></i> ti-archive </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-anchor"></i> ti-anchor </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-alert"></i> ti-alert </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-alarm-clock"></i> ti-alarm-clock </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-agenda"></i> ti-agenda </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-write"></i> ti-write </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-wallet"></i> ti-wallet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-video-clapper"></i> ti-video-clapper </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-video-camera"></i> ti-video-camera </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-vector"></i> ti-vector </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-support"></i> ti-support </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-stamp"></i> ti-stamp </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-slice"></i> ti-slice </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-shortcode"></i> ti-shortcode </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-receipt"></i> ti-receipt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pin2"></i> ti-pin2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pin-alt"></i> ti-pin-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pencil-alt2"></i> ti-pencil-alt2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-eraser"></i> ti-eraser </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-more"></i> ti-more </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-more-alt"></i> ti-more-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-microphone-alt"></i> ti-microphone-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-magnet"></i> ti-magnet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-line-double"></i> ti-line-double </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-line-dotted"></i> ti-line-dotted </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-line-dashed"></i> ti-line-dashed </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-ink-pen"></i> ti-ink-pen </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-info-alt"></i> ti-info-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-help-alt"></i> ti-help-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-headphone-alt"></i> ti-headphone-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-gallery"></i> ti-gallery </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-face-smile"></i> ti-face-smile </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-face-sad"></i> ti-face-sad </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-credit-card"></i> ti-credit-card </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-comments-smiley"></i> ti-comments-smiley </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-time"></i> ti-time </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-share"></i> ti-share </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-share-alt"></i> ti-share-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-rocket"></i> ti-rocket </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-new-window"></i> ti-new-window </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-rss"></i> ti-rss </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-rss-alt"></i> ti-rss-alt </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Control Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-stop"></i> ti-control-stop </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-shuffle"></i> ti-control-shuffle </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-play"></i> ti-control-play </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-pause"></i> ti-control-pause </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-forward"></i> ti-control-forward </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-backward"></i> ti-control-backward </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-volume"></i> ti-volume </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-skip-forward"></i> ti-control-skip-forward </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-skip-backward"></i> ti-control-skip-backward </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-record"></i> ti-control-record </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-control-eject"></i> ti-control-eject </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Text Editor Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-paragraph"></i> ti-paragraph </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-uppercase"></i> ti-uppercase </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-underline"></i> ti-underline </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-text"></i> ti-text </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-Italic"></i> ti-Italic </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-smallcap"></i> ti-smallcap </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-list"></i> ti-list </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-list-ol"></i> ti-list-ol </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-align-right"></i> ti-align-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-align-left"></i> ti-align-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-align-justify"></i> ti-align-justify </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-align-center"></i> ti-align-center </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-quote-right"></i> ti-quote-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-quote-left"></i> ti-quote-left </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Layout Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-width-full"></i> ti-layout-width-full </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-width-default"></i> ti-layout-width-default </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-width-default-alt"></i> ti-layout-width-default-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-tab"></i> ti-layout-tab </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-tab-window"></i> ti-layout-tab-window </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-tab-v"></i> ti-layout-tab-v </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-tab-min"></i> ti-layout-tab-min </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-slider"></i> ti-layout-slider </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-slider-alt"></i> ti-layout-slider-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-sidebar-right"></i> ti-layout-sidebar-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-sidebar-none"></i> ti-layout-sidebar-none </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-sidebar-left"></i> ti-layout-sidebar-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-placeholder"></i> ti-layout-placeholder </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-menu"></i> ti-layout-menu </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-menu-v"></i> ti-layout-menu-v </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-menu-separated"></i> ti-layout-menu-separated </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-menu-full"></i> ti-layout-menu-full </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-right"></i> ti-layout-media-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-right-alt"></i> ti-layout-media-right-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-overlay"></i> ti-layout-media-overlay </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-overlay-alt"></i> ti-layout-media-overlay-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-overlay-alt-2"></i> ti-layout-media-overlay-alt-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-left"></i> ti-layout-media-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-left-alt"></i> ti-layout-media-left-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-center"></i> ti-layout-media-center </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-media-center-alt"></i> ti-layout-media-center-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-list-thumb"></i> ti-layout-list-thumb </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-list-thumb-alt"></i> ti-layout-list-thumb-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-list-post"></i> ti-layout-list-post </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-list-large-image"></i> ti-layout-list-large-image </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-line-solid"></i> ti-layout-line-solid </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-grid4"></i> ti-layout-grid4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-grid3"></i> ti-layout-grid3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-grid2"></i> ti-layout-grid2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-grid2-thumb"></i> ti-layout-grid2-thumb </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-cta-right"></i> ti-layout-cta-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-cta-left"></i> ti-layout-cta-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-cta-center"></i> ti-layout-cta-center </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-cta-btn-right"></i> ti-layout-cta-btn-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-cta-btn-left"></i> ti-layout-cta-btn-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-column4"></i> ti-layout-column4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-column3"></i> ti-layout-column3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-column2"></i> ti-layout-column2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-accordion-separated"></i> ti-layout-accordion-separated </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-accordion-merged"></i> ti-layout-accordion-merged </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-accordion-list"></i> ti-layout-accordion-list </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-widgetized"></i> ti-widgetized </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-widget"></i> ti-widget </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-widget-alt"></i> ti-widget-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-view-list"></i> ti-view-list </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-view-list-alt"></i> ti-view-list-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-view-grid"></i> ti-view-grid </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-upload"></i> ti-upload </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-download"></i> ti-download </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-loop"></i> ti-loop </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-sidebar-2"></i> ti-layout-sidebar-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-grid4-alt"></i> ti-layout-grid4-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-grid3-alt"></i> ti-layout-grid3-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-grid2-alt"></i> ti-layout-grid2-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-column4-alt"></i> ti-layout-column4-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-column3-alt"></i> ti-layout-column3-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-layout-column2-alt"></i> ti-layout-column2-alt </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Brand Icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-flickr"></i> ti-flickr </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-flickr-alt"></i> ti-flickr-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-instagram"></i> ti-instagram </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-google"></i> ti-google </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-github"></i> ti-github </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-facebook"></i> ti-facebook </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-dropbox"></i> ti-dropbox </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-dropbox-alt"></i> ti-dropbox-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-dribbble"></i> ti-dribbble </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-apple"></i> ti-apple </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-android"></i> ti-android </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-yahoo"></i> ti-yahoo </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-trello"></i> ti-trello </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-stack-overflow"></i> ti-stack-overflow </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-soundcloud"></i> ti-soundcloud </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-sharethis"></i> ti-sharethis </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-sharethis-alt"></i> ti-sharethis-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-reddit"></i> ti-reddit </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-microsoft"></i> ti-microsoft </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-microsoft-alt"></i> ti-microsoft-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-linux"></i> ti-linux </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-jsfiddle"></i> ti-jsfiddle </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-joomla"></i> ti-joomla </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-html5"></i> ti-html5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-css3"></i> ti-css3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-drupal"></i> ti-drupal </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-wordpress"></i> ti-wordpress </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-tumblr"></i> ti-tumblr </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-tumblr-alt"></i> ti-tumblr-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-skype"></i> ti-skype </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-youtube"></i> ti-youtube </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-vimeo"></i> ti-vimeo </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-vimeo-alt"></i> ti-vimeo-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-twitter"></i> ti-twitter </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-twitter-alt"></i> ti-twitter-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-linkedin"></i> ti-linkedin </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pinterest"></i> ti-pinterest </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-pinterest-alt"></i> ti-pinterest-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-themify-logo"></i> ti-themify-logo </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-themify-favicon"></i> ti-themify-favicon </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt </div>
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