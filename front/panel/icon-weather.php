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
                        <h4 class="text-themecolor">Weather Icon</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Weather Icon</li>
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
                                <h4 class="card-title">25 icons v2.0 <span class="label label-sm label-success">New </span></h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-cloudy-high"></i> wi wi-day-cloudy-high </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moonrise"></i>wi wi-moonrise </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-volcano"></i>wi wi-volcano </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-light-wind"></i>wi wi-day-light-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moonset"></i>wi wi-moonset </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-flood"></i>wi wi-flood </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-train"></i>wi wi-train </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-sleet"></i>wi wi-day-sleet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-sleet"></i>wi wi-night-sleet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-sandstorm"></i>wi wi-sandstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-small-craft-advisory"></i>wi wi-small-craft-advisory </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-haze"></i>wi wi-day-haze </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-sleet"></i>wi wi-night-alt-sleet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-tsunami"></i>wi wi-tsunami </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-gale-warning"></i>wi wi-gale-warning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-cloudy-high"></i>wi wi-night-cloudy-high </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-raindrop"></i>wi wi-raindrop </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-earthquake"></i>wi wi-earthquake </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-storm-warning"></i>wi wi-storm-warning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-partly-cloudy"></i>wi wi-night-alt-partly-cloudy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-barometer"></i>wi wi-barometer </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-fire"></i>wi wi-fire </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-hurricane-warning"></i>wi wi-hurricane-warning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-sleet"></i>wi wi-sleet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-humidity"></i>wi wi-humidity </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daytime icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-sunny"></i> wi wi-day-sunny </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-cloudy"></i> wi wi-day-cloudy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-cloudy-gusts"></i> wi wi-day-cloudy-gusts </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-cloudy-windy"></i> wi wi-day-cloudy-windy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-fog"></i> wi wi-day-fog </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-hail"></i> wi wi-day-hail </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-haze"></i> wi wi-day-haze </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-lightning"></i> wi wi-day-lightning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-rain"></i> wi wi-day-rain </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-rain-mix"></i> wi wi-day-rain-mix </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-rain-wind"></i> wi wi-day-rain-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-showers"></i> wi wi-day-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-sleet"></i> wi wi-day-sleet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-sleet-storm"></i> wi wi-day-sleet-storm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-snow"></i> wi wi-day-snow </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-snow-thunderstorm"></i> wi wi-day-snow-thunderstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-snow-wind"></i> wi wi-day-snow-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-sprinkle"></i> wi wi-day-sprinkle </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-storm-showers"></i> wi wi-day-storm-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-sunny-overcast"></i> wi wi-day-sunny-overcast </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-thunderstorm"></i> wi wi-day-thunderstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-windy"></i> wi wi-day-windy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-solar-eclipse"></i> wi wi-solar-eclipse </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-hot"></i> wi wi-hot </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-cloudy-high"></i> wi wi-day-cloudy-high </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-day-light-wind"></i> wi wi-day-light-wind </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Night Time icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-clear"></i> wi wi-night-clear </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-cloudy"></i> wi wi-night-alt-cloudy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-cloudy-gusts"></i> wi wi-night-alt-cloudy-gusts </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-cloudy-windy"></i> wi wi-night-alt-cloudy-windy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-hail"></i> wi wi-night-alt-hail </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-lightning"></i> wi wi-night-alt-lightning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-rain"></i> wi wi-night-alt-rain </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-rain-mix"></i> wi wi-night-alt-rain-mix </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-rain-wind"></i> wi wi-night-alt-rain-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-showers"></i> wi wi-night-alt-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-sleet"></i> wi wi-night-alt-sleet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-sleet-storm"></i> wi wi-night-alt-sleet-storm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-snow"></i> wi wi-night-alt-snow </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-snow-thunderstorm"></i> wi wi-night-alt-snow-thunderstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-snow-wind"></i> wi wi-night-alt-snow-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-sprinkle"></i> wi wi-night-alt-sprinkle </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-storm-showers"></i> wi wi-night-alt-storm-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-thunderstorm"></i> wi wi-night-alt-thunderstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-cloudy"></i> wi wi-night-cloudy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-cloudy-gusts"></i> wi wi-night-cloudy-gusts </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-cloudy-windy"></i> wi wi-night-cloudy-windy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-fog"></i> wi wi-night-fog </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-hail"></i> wi wi-night-hail </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-lightning"></i> wi wi-night-lightning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-partly-cloudy"></i> wi wi-night-partly-cloudy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-rain"></i> wi wi-night-rain </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-rain-mix"></i> wi wi-night-rain-mix </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-rain-wind"></i> wi wi-night-rain-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-showers"></i> wi wi-night-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-sleet"></i> wi wi-night-sleet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-sleet-storm"></i> wi wi-night-sleet-storm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-snow"></i> wi wi-night-snow </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-snow-thunderstorm"></i> wi wi-night-snow-thunderstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-snow-wind"></i> wi wi-night-snow-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-sprinkle"></i> wi wi-night-sprinkle </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-storm-showers"></i> wi wi-night-storm-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-thunderstorm"></i> wi wi-night-thunderstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-lunar-eclipse"></i> wi wi-lunar-eclipse </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-stars"></i> wi wi-stars </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-storm-showers"></i> wi wi-storm-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-thunderstorm"></i> wi wi-thunderstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-cloudy-high"></i> wi wi-night-alt-cloudy-high </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-cloudy-high"></i> wi wi-night-cloudy-high </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-night-alt-partly-cloudy"></i> wi wi-night-alt-partly-cloudy </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Neutral icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-cloud"></i> wi wi-cloud </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-cloudy"></i> wi wi-cloudy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-cloudy-gusts"></i> wi wi-cloudy-gusts </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-cloudy-windy"></i> wi wi-cloudy-windy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-fog"></i> wi wi-fog </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-hail"></i> wi wi-hail </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-rain"></i> wi wi-rain </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-rain-mix"></i> wi wi-rain-mix </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-rain-wind"></i> wi wi-rain-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-showers"></i> wi wi-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-sleet"></i> wi wi-sleet </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-snow"></i> wi wi-snow </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-sprinkle"></i> wi wi-sprinkle </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-storm-showers"></i> wi wi-storm-showers </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-thunderstorm"></i> wi wi-thunderstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-snow-wind"></i> wi wi-snow-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-snow"></i> wi wi-snow </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-smog"></i> wi wi-smog </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-smoke"></i> wi wi-smoke </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-lightning"></i> wi wi-lightning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-raindrops"></i> wi wi-raindrops </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-raindrop"></i> wi wi-raindrop </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-dust"></i> wi wi-dust </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-snowflake-cold"></i> wi wi-snowflake-cold </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-windy"></i> wi wi-windy </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-strong-wind"></i> wi wi-strong-wind </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-sandstorm"></i> wi wi-sandstorm </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-earthquake"></i> wi wi-earthquake </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-fire"></i> wi wi-fire </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-flood"></i> wi wi-flood </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-meteor"></i> wi wi-meteor </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-tsunami"></i> wi wi-tsunami </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-volcano"></i> wi wi-volcano </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-hurricane"></i> wi wi-hurricane </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-tornado"></i> wi wi-tornado </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-small-craft-advisory"></i> wi wi-small-craft-advisory </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-gale-warning"></i> wi wi-gale-warning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-storm-warning"></i> wi wi-storm-warning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-hurricane-warning"></i> wi wi-hurricane-warning </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-wind-direction"></i> wi wi-wind-direction </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Moon Phase icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-new"></i> wi wi-moon-new </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-cresent-1"></i> wi wi-moon-waxing-cresent-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-cresent-2"></i> wi wi-moon-waxing-cresent-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-cresent-3"></i> wi wi-moon-waxing-cresent-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-cresent-4"></i> wi wi-moon-waxing-cresent-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-cresent-5"></i> wi wi-moon-waxing-cresent-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-cresent-6"></i> wi wi-moon-waxing-cresent-6 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-first-quarter"></i> wi wi-moon-first-quarter </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-gibbous-1"></i> wi wi-moon-waxing-gibbous-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-gibbous-2"></i> wi wi-moon-waxing-gibbous-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-gibbous-3"></i> wi wi-moon-waxing-gibbous-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-gibbous-4"></i> wi wi-moon-waxing-gibbous-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-gibbous-5"></i> wi wi-moon-waxing-gibbous-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waxing-gibbous-6"></i> wi wi-moon-waxing-gibbous-6 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-full"></i> wi wi-moon-full </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-gibbous-1"></i> wi wi-moon-waning-gibbous-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-gibbous-2"></i> wi wi-moon-waning-gibbous-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-gibbous-3"></i> wi wi-moon-waning-gibbous-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-gibbous-4"></i> wi wi-moon-waning-gibbous-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-gibbous-5"></i> wi wi-moon-waning-gibbous-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-gibbous-6"></i> wi wi-moon-waning-gibbous-6 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-third-quarter"></i> wi wi-moon-third-quarter </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-crescent-1"></i> wi wi-moon-waning-crescent-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-crescent-2"></i> wi wi-moon-waning-crescent-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-crescent-3"></i> wi wi-moon-waning-crescent-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-crescent-4"></i> wi wi-moon-waning-crescent-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-crescent-5"></i> wi wi-moon-waning-crescent-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-waning-crescent-6"></i> wi wi-moon-waning-crescent-6 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-new"></i> wi wi-moon-alt-new </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-cresent-1"></i> wi wi-moon-alt-waxing-cresent-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-cresent-2"></i> wi wi-moon-alt-waxing-cresent-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-cresent-3"></i> wi wi-moon-alt-waxing-cresent-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-cresent-4"></i> wi wi-moon-alt-waxing-cresent-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-cresent-5"></i> wi wi-moon-alt-waxing-cresent-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-cresent-6"></i> wi wi-moon-alt-waxing-cresent-6 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-first-quarter"></i> wi wi-moon-alt-first-quarter </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-gibbous-1"></i> wi wi-moon-alt-waxing-gibbous-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-gibbous-2"></i> wi wi-moon-alt-waxing-gibbous-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-gibbous-3"></i> wi wi-moon-alt-waxing-gibbous-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-gibbous-4"></i> wi wi-moon-alt-waxing-gibbous-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-gibbous-5"></i> wi wi-moon-alt-waxing-gibbous-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waxing-gibbous-6"></i> wi wi-moon-alt-waxing-gibbous-6 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-full"></i> wi wi-moon-alt-full </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-gibbous-1"></i> wi wi-moon-alt-waning-gibbous-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-gibbous-2"></i> wi wi-moon-alt-waning-gibbous-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-gibbous-3"></i> wi wi-moon-alt-waning-gibbous-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-gibbous-4"></i> wi wi-moon-alt-waning-gibbous-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-gibbous-5"></i> wi wi-moon-alt-waning-gibbous-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-gibbous-6"></i> wi wi-moon-alt-waning-gibbous-6 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-third-quarter"></i> wi wi-moon-alt-third-quarter </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-crescent-1"></i> wi wi-moon-alt-waning-crescent-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-crescent-2"></i> wi wi-moon-alt-waning-crescent-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-crescent-3"></i> wi wi-moon-alt-waning-crescent-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-crescent-4"></i> wi wi-moon-alt-waning-crescent-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-crescent-5"></i> wi wi-moon-alt-waning-crescent-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moon-alt-waning-crescent-6"></i> wi wi-moon-alt-waning-crescent-6 </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Other icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-alien"></i> wi wi-alien </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-celsius"></i> wi wi-celsius </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-fahrenheit"></i> wi wi-fahrenheit </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-degrees"></i> wi wi-degrees </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-thermometer"></i> wi wi-thermometer </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-thermometer-exterior"></i> wi wi-thermometer-exterior </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-thermometer-internal"></i> wi wi-thermometer-internal </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-cloud-down"></i> wi wi-cloud-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-cloud-up"></i> wi wi-cloud-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-cloud-refresh"></i> wi wi-cloud-refresh </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-horizon"></i> wi wi-horizon </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-horizon-alt"></i> wi wi-horizon-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-sunrise"></i> wi wi-sunrise </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-sunset"></i> wi wi-sunset </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moonrise"></i> wi wi-moonrise </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-moonset"></i> wi wi-moonset </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-refresh"></i> wi wi-refresh </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-refresh-alt"></i> wi wi-refresh-alt </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-umbrella"></i> wi wi-umbrella </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-barometer"></i> wi wi-barometer </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-humidity"></i> wi wi-humidity </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-na"></i> wi wi-na </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-train"></i> wi wi-train </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi "></i> wi </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Time icons</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-1"></i> wi wi-time-1 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-2"></i> wi wi-time-2 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-3"></i> wi wi-time-3 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-4"></i> wi wi-time-4 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-5"></i> wi wi-time-5 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-6"></i> wi wi-time-6 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-7"></i> wi wi-time-7 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-8"></i> wi wi-time-8 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-9"></i> wi wi-time-9 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-10"></i> wi wi-time-10 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-11"></i> wi wi-time-11 </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-time-12"></i> wi wi-time-12 </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Directional Arrows</h4>
                                <div class="icon-list-demo row">
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-direction-up"></i> wi wi-direction-up </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-direction-up-right"></i> wi wi-direction-up-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-direction-right"></i> wi wi-direction-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-direction-down-right"></i> wi wi-direction-down-right </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-direction-down"></i> wi wi-direction-down </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-direction-down-left"></i> wi wi-direction-down-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-direction-left"></i> wi wi-direction-left </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6"> <i class="wi wi-direction-up-left"></i> wi wi-direction-up-left </div>
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