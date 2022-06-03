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
    <link rel="stylesheet" href="assets/node_modules/prism/prism.css">
    <!-- page css -->
    <link href="dist/css/pages/other-pages.css" rel="stylesheet">
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
                        <h4 class="text-themecolor">Grid</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Grid</li>
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
                                <h4 class="card-title">Grid options</h4>
                                <h6 class="card-subtitle">See how aspects of the Bootstrap grid system work across multiple devices with a handy table. check the <a href="https://v4-alpha.getbootstrap.com/layout/grid/">official website grid page</a></h6>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="text-center"> Extra small
                                                    <br> <small>&lt;576px</small> </th>
                                                <th class="text-center"> Small
                                                    <br> <small>≥576px</small> </th>
                                                <th class="text-center"> Medium
                                                    <br> <small>≥768px</small> </th>
                                                <th class="text-center"> Large
                                                    <br> <small>≥992px</small> </th>
                                                <th class="text-center"> Extra large
                                                    <br> <small>≥1200px</small> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Grid behavior</th>
                                                <td>Horizontal at all times</td>
                                                <td colspan="4">Collapsed to start, horizontal above breakpoints</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Max container width</th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                                <td><code>.col-xl-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="5">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="5">30px (15px on each side of a column)</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Nestable</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Offsets</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Column ordering</th>
                                                <td colspan="5">Yes</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p>Grid classes apply to devices with screen widths greater than or equal to the breakpoint sizes, and override grid classes targeted at smaller devices. Therefore, applying any <code>.col-md-</code> class to an element will not only affect its styling on medium devices but also on large devices if a <code>.col-lg-</code> class is not present.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Example: Stacked-to-horizontal</h4>
                                <h6 class="card-subtitle">Using a single set of <code>.col-md-*</code> grid classes, you can create a default grid system that starts out stacked on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium) devices. Place grid columns in any <code>.row</code>.</h6>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                    <div class="col-md-1">.col-md-1</div>
                                </div>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-md-8">.col-md-8</div>
                                    <div class="col-md-4">.col-md-4</div>
                                </div>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4">.col-md-4</div>
                                </div>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-md-6">.col-md-6</div>
                                    <div class="col-md-6">.col-md-6</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                            &lt;div class=&quot;col-md-1&quot;&gt;.col-md-1&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-8&quot;&gt;.col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
                                            &lt;div class=&quot;col-md-6&quot;&gt;.col-md-6&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Example: Mobile and desktop</h4>
                                <h6 class="card-subtitle">Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</h6>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                </div>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                </div>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-xs-6">.col-xs-6</div>
                                    <div class="col-xs-6">.col-xs-6</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-12 col-md-8&quot;&gt;.col-xs-12 .col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6&quot;&gt;.col-xs-6&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Example: Mobile, tablet, desktops</h4>
                                <h6 class="card-subtitle">Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code> classes.</h6>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
                                    <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                                </div>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                    <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                    <!-- Optional: clear the XS cols if their content doesn't match in height -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-xs-12 col-sm-6 col-md-8&quot;&gt;.col-xs-12 .col-sm-6 .col-md-8&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-md-4&quot;&gt;.col-xs-6 .col-md-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row show-grid&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                            &lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;
                                            &lt;div class=&quot;clearfix visible-xs&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-4&quot;&gt;.col-xs-6 .col-sm-4&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Responsive column resets</h4>
                                <h6 class="card-subtitle">With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code> and our responsive utility classes.</h6>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-xs-6 col-sm-3"> .col-xs-6 .col-sm-3
                                        <br> Resize your viewport or check it out on your phone for an example. </div>
                                    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                    <!-- Add the extra clearfix for only the required viewport -->
                                    <div class="clearfix visible-xs"></div>
                                    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt; .col-xs-6 .col-sm-3
                                                &lt;br&gt; Resize your viewport or check it out on your phone for an example. &lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                            &lt;!-- Add the extra clearfix for only the required viewport --&gt;
                                            &lt;div class=&quot;clearfix visible-xs&quot;&gt;&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                            &lt;div class=&quot;col-xs-6 col-sm-3&quot;&gt;.col-xs-6 .col-sm-3&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Offsetting columns</h4>
                                <h6 class="card-subtitle">Move columns to the right using <code>.offset-md--*</code> classes. These classes increase the left margin of a column by <code>*</code> columns. For example, <code>.offset-md-4</code> moves <code>.col-md-4</code> over four columns.</h6>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-md-4">.col-md-4</div>
                                    <div class="col-md-4 offset-md-4">.col-md-4 .col-md-offset-4</div>
                                </div>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-md-3 offset-md-3">.col-md-3 .col-md-offset-3</div>
                                    <div class="col-md-3 offset-md-3">.col-md-3 .col-md-offset-3</div>
                                </div>
                                <div class="row bg-light mb-2 p-10">
                                    <div class="col-md-6 offset-md-3">.col-md-6 .col-md-offset-3</div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                                            &lt;div class=&quot;col-md-4 offset-md-4&quot;&gt;.col-md-4 .col-md-offset-4&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
                                            &lt;div class=&quot;col-md-3 offset-md-3&quot;&gt;.col-md-3 .col-md-offset-3&lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row bg-light mb-2 p-10&quot;&gt;
                                            &lt;div class=&quot;col-md-6 offset-md-3&quot;&gt;.col-md-6 .col-md-offset-3&lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gutters</h4>
                                <div class="container px-lg-5">
                                  <div class="row mx-lg-n5">
                                    <div class="col py-3 px-lg-5 bg-light border">Custom column padding</div>
                                    <div class="col py-3 px-lg-5 bg-light border">Custom column padding</div>
                                  </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;container px-lg-5&quot;&gt;
                                          &lt;div class=&quot;row mx-lg-n5&quot;&gt;
                                            &lt;div class=&quot;col py-3 px-lg-5 bg-light border&quot;&gt;Custom column padding&lt;/div&gt;
                                            &lt;div class=&quot;col py-3 px-lg-5 bg-light border&quot;&gt;Custom column padding&lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order classes</h4>
                                <div class="container">
                                  <div class="row">
                                    <div class="col bg-light border p-3">
                                      First, but unordered
                                    </div>
                                    <div class="col order-12 bg-light border p-3">
                                      Second, but last
                                    </div>
                                    <div class="col order-1 bg-light border p-3">
                                      Third, but first
                                    </div>
                                  </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;container&quot;&gt;
                                          &lt;div class=&quot;row&quot;&gt;
                                            &lt;div class=&quot;col bg-light border p-3&quot;&gt;
                                              First, but unordered
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col order-12 bg-light border p-3&quot;&gt;
                                              Second, but last
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col order-1 bg-light border p-3&quot;&gt;
                                              Third, but first
                                            &lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nesting</h4>
                                <div class="container">
                                  <div class="row">
                                    <div class="col-sm-9 bg-light border p-3">
                                      Level 1: .col-sm-9
                                      <div class="row">
                                        <div class="col-8 col-sm-6 bg-light border p-3">
                                          Level 2: .col-8 .col-sm-6
                                        </div>
                                        <div class="col-4 col-sm-6 bg-light border p-3">
                                          Level 2: .col-4 .col-sm-6
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;container&quot;&gt;
                                          &lt;div class=&quot;row&quot;&gt;
                                            &lt;div class=&quot;col-sm-9 bg-light border p-3&quot;&gt;
                                              Level 1: .col-sm-9
                                              &lt;div class=&quot;row&quot;&gt;
                                                &lt;div class=&quot;col-8 col-sm-6 bg-light border p-3&quot;&gt;
                                                  Level 2: .col-8 .col-sm-6
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-4 col-sm-6 bg-light border p-3&quot;&gt;
                                                  Level 2: .col-4 .col-sm-6
                                                &lt;/div&gt;
                                              &lt;/div&gt;
                                            &lt;/div&gt;
                                          &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
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
    <script src="assets/node_modules/prism/prism.js"></script>
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