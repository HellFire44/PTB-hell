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
            <p class="loader__label">Elite Admin</p>
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
                            <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span>
                    </a>
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
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="ti-email"></i>
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
                                                <div class="btn btn-danger btn-circle text-white"><i
                                                        class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new
                                                        admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle text-white"><i
                                                        class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that
                                                        you have event</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle text-white"><i
                                                        class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this
                                                        template as you want</span> <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check
                                                all notifications</strong> <i class="fa fa-angle-right"></i> </a>
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="icon-note"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-end animated bounceInDown"
                                aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/1.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/2.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See
                                                        you at</span> <span class="time">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/3.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span>
                                                    <span class="time">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/4.jpg"
                                                        alt="user" class="img-circle"> <span
                                                        class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my
                                                        admin!</span> <span class="time">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all
                                                e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
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
                        <li class="nav-item dropdown mega-dropdown"> <a
                                class="nav-link dropdown-toggle waves-effect waves-dark" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="ti-layout-width-default"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid"
                                                            src="assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                            src="assets/images/big/img2.jpg" alt="Second slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                            src="assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                                role="button" data-bs-slide="prev"> <span
                                                    class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                                                    class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-bs-slide="next"> <span
                                                    class="carousel-control-next-icon" aria-hidden="true"></span> <span
                                                    class="sr-only">Next</span> </a>
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
                                                        <button class="btn btn-link" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header p-0" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header p-0" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                    data-parent="#accordionExample">
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
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info text-white">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light"
                                href="javascript:void(0)"><i class="ti-settings"></i></a></li>
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
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                                data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Steave Gection <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My
                                    Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My
                                    Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                                    Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="pages-login.php" class="dropdown-item"><i class="fas fa-power-off"></i>
                                    Logout</a>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard
                                    <span class="badge rounded-pill bg-cyan ms-auto">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php">Minimal </a></li>
                                <li><a href="index2.php">Analytical</a></li>
                                <li><a href="index3.php">Demographical</a></li>
                                <li><a href="index4.php">Modern</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-layout-grid2"></i><span
                                    class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-calendar.php">Calendar</a></li>
                                <li><a href="app-chat.php">Chat app</a></li>
                                <li><a href="app-ticket.php">Support Ticket</a></li>
                                <li><a href="app-contact.php">Contact / Employee</a></li>
                                <li><a href="app-contact2.php">Contact Grid</a></li>
                                <li><a href="app-contact-detail.php">Contact Detail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Inbox</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="app-email.php">Mailbox</a></li>
                                <li><a href="app-email-detail.php">Mailbox Detail</a></li>
                                <li><a href="app-compose.php">Compose Mail</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements
                                    <span class="badge rounded-pill bg-primary text-white ms-auto">25</span></span></a>
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
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span
                                    class="hide-menu">Forms</span></a>
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
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span
                                    class="hide-menu">Tables</span></a>
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
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-settings"></i><span
                                    class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-data.php">Data Widgets</a></li>
                                <li><a href="widget-apps.php">Apps Widgets</a></li>
                                <li><a href="widget-charts.php">Charts Widgets</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- EXTRA COMPONENTS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-gallery"></i><span class="hide-menu">Page
                                    Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-single-column.php">1 Column</a></li>
                                <li><a href="layout-fix-header.php">Fix header</a></li>
                                <li><a href="layout-fix-sidebar.php">Fix sidebar</a></li>
                                <li><a href="layout-fix-header-sidebar.php">Fixe header &amp; Sidebar</a></li>
                                <li><a href="layout-boxed.php">Boxed Layout</a></li>
                                <li><a href="layout-logo-center.php">Logo in Center</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span
                                        class="badge rounded-pill bg-info">25</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.php">Starter Kit</a></li>
                                <li><a href="pages-blank.php">Blank page</a></li>
                                <li><a href="javascript:void(0)" class="has-arrow">Authentication <span
                                            class="badge rounded-pill bg-success pull-right">6</span></a>
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
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-pie-chart"></i><span
                                    class="hide-menu">Charts</span></a>
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
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-light-bulb"></i><span
                                    class="hide-menu">Icons</span></a>
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
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-location-pin"></i><span
                                    class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.php">Google Maps</a></li>
                                <li><a href="map-vector.php">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi level
                                    dd</span></a>
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
                            <a class="waves-effect waves-dark" href="documentation/documentation.php"
                                aria-expanded="false">
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
                        <h4 class="text-themecolor">Buttons</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Buttons</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                                    class="fa fa-plus-circle"></i> Create New</button>
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
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">General Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-success</code> to quickly create a
                                    General btn.</h6>
                                <div class="button-group">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-primary">Primary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-secondary">Secondary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-success text-white">Success</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-info text-white">Info</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-warning">Warning</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-danger text-white">Danger</button>
                                    <button type="button" class="btn waves-effect waves-light btn-light">Light</button>
                                    <button type="button" class="btn waves-effect waves-light btn-dark">Dark</button>
                                </div>
                                <div class="bg-light">
                                    <pre class="language-html scrollable">
                                <code>
                                    &lt;div class=&quot;button-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-primary&quot;&gt;Primary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-success&quot;&gt;Success&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-danger&quot;&gt;Danger&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-light&quot;&gt;Light&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-dark&quot;&gt;Dark&lt;/button&gt;
                                    &lt;/div&gt;                               
                                </code>
                            </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Tags</h4>
                                <h6 class="card-subtitle">The <code>.btn</code> classes are designed to be used with the
                                    <code>.&lt;button&gt;</code> element.</h6>
                                <a class="btn btn-primary text-white" href="#" role="button">Link</a>
                                <button class="btn btn-primary text-white" type="submit">Button</button>
                                <input class="btn btn-primary text-white" type="button" value="Input">
                                <input class="btn btn-primary text-white" type="submit" value="Submit">
                                <input class="btn btn-primary text-white" type="reset" value="Reset">
                                <pre class="language-html scrollable">
                            <code>
                                &lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Link&lt;/a&gt;
                                &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;button&quot; value=&quot;Input&quot;&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt;
                                &lt;input class=&quot;btn btn-primary&quot; type=&quot;reset&quot; value=&quot;Reset&quot;&gt;                          
                            </code>
                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with outline</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-outline-success</code> to quickly
                                    create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-primary">Primary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-secondary">Secondary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-success">Success</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-info">Info</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-warning">Warning</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-danger">Danger</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-light">Light</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-outline-dark">Dark</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;button-group&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                             &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                              &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                        &lt;/div&gt;                             
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rounded Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-success</code> to
                                    quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-primary">Primary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-secondary">Secondary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-success text-white">Success</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-info text-white">Info</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-warning">Warning</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-danger text-white">Danger</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-light">Light</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-dark">Dark</button>
                                </div>
                                <pre class="language-html scrollable">
                            <code>
                                &lt;div class=&quot;button-group&quot;&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-primary&quot;&gt;Primary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-success&quot;&gt;Success&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-info&quot;&gt;Info&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-warning&quot;&gt;Warning&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-danger&quot;&gt;Danger&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-light&quot;&gt;Light&lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-dark&quot;&gt;Dark&lt;/button&gt;
                                &lt;/div&gt;                            
                            </code>
                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rounded outlined Buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-outline-success</code>
                                    to quickly create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-primary">Primary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-secondary">Secondary</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-success">Success</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-info">Info</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-warning">Warning</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-danger">Danger</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-light">Light</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-outline-dark">Dark</button>
                                    <pre class="language-html scrollable">
                                        <code>
                                            &lt;div class=&quot;button-group&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                                 &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                                  &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;                            
                                        </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizes</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-lg btn-success</code> to quickly
                                    create a General btn.</h6>
                                <div class="button-group">
                                    <button type="button" class="btn waves-effect waves-light btn-lg btn-primary">Large
                                        .btn-lg </button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary">Normal
                                        .btn</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-sm btn-success text-white">Small
                                        .btn-sm</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-xs btn-info text-white">Tiny
                                        .btn-xs</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;button-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-lg btn-primary&quot;&gt;Large .btn-lg &lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-secondary&quot;&gt;Normal .btn&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-sm btn-success&quot;&gt;Small .btn-sm&lt;/button&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-xs btn-info&quot;&gt;Tiny .btn-xs&lt;/button&gt;
                                    &lt;/div&gt;                           
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button Sizes with rounded</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-lg btn-rounded btn-success</code>
                                    to create a btn.</h6>
                                <div class="button-group">
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-lg btn-rounded btn-primary">Large
                                        .btn-lg </button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-secondary">Normal
                                        .btn</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-sm btn-success text-white">Small
                                        .btn-sm</button>
                                    <button type="button"
                                        class="btn waves-effect waves-light btn-rounded btn-xs btn-info text-white">Tiny
                                        .btn-xs</button>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;button-group&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-lg btn-rounded btn-primary&quot;&gt;Large .btn-lg &lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-secondary&quot;&gt;Normal .btn&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-sm btn-success&quot;&gt;Small .btn-sm&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light btn-rounded btn-xs btn-info&quot;&gt;Tiny .btn-xs&lt;/button&gt;
                                        &lt;/div&gt;                            
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn w-100 btn-success</code> to quickly
                                    create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn waves-effect waves-light w-100 btn-info text-white">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn waves-effect waves-light w-100 btn-success text-white">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn waves-effect waves-light w-100 btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn waves-effect waves-light w-100 btn-danger text-white">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn waves-effect waves-light w-100 btn-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn waves-effect waves-light w-100 btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn waves-effect waves-light w-100 btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn waves-effect waves-light w-100 btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light w-100 btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light w-100 btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light w-100 btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light w-100 btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light w-100 btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light w-100 btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light w-100 btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn waves-effect waves-light w-100 btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                       
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rounded Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn w-100 btn-success</code> to quickly
                                    create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-info text-white">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-success text-white">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded w-100 btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-danger text-white">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded w-100 btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded w-100 btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn btn-rounded w-100 btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                             &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                             &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;     
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Block outline buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn w-100 btn-outline-success</code> to
                                    quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-outline-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-outline-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-outline-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-outline-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-outline-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-outline-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-outline-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-outline-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;row button-group&quot;&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                    
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Rounded outline Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn w-100 btn-outline-success</code> to
                                    quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-outline-info">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-outline-success">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-outline-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-outline-danger">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-outline-secondary">Secondary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-outline-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-outline-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn btn-rounded w-100 btn-outline-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                        &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-outline-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-outline-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-outline-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-rounded w-100 btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                  
                                    </code>
                                </pre>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Large Block buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn w-100 btn-lg btn-success</code> to
                                    quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-lg btn-info text-white">Info</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn w-100 btn-lg btn-success text-white">Success</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-lg btn-primary">Primary</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button"
                                            class="btn w-100 btn-lg btn-danger text-white">Danger</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-lg btn-secondary">Second</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-lg btn-warning">Warning</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-lg btn-light">Light</button>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <button type="button" class="btn w-100 btn-lg btn-dark">Dark</button>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                         &lt;div class=&quot;row button-group&quot;&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-lg btn-info&quot;&gt;Info&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-lg btn-success&quot;&gt;Success&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-lg btn-primary&quot;&gt;Primary&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-lg btn-danger&quot;&gt;Danger&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-lg btn-secondary&quot;&gt;Second&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-lg btn-warning&quot;&gt;Warning&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-lg btn-light&quot;&gt;Light&lt;/button&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col-lg-2 col-md-4&quot;&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn w-100 btn-lg btn-dark&quot;&gt;Dark&lt;/button&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;                                 
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with icon</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-success</code> &amp; <code>i class
                                        ="fa fa-heart"</code> to quickly create a General btn.</h6>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button type="button" class="btn btn-primary text-white"><i
                                                class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-secondary"><i class="far fa-heart"></i>
                                            Secondary</button>
                                        <button type="button" class="btn btn-success text-white"><i
                                                class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-info text-white"><i
                                                class="far fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-warning"><i class="far fa-heart"></i>
                                            Warning</button>
                                        <button type="button" class="btn btn-danger text-white"><i
                                                class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-light"><i class="far fa-heart"></i>
                                            Light</button>
                                        <button type="button" class="btn btn-dark"><i class="far fa-heart"></i>
                                            Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><span
                                                class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-secondary waves-effect waves-light" type="button"><span
                                                class="btn-label"><i class="fas fa-check"></i></span> Check</button>
                                        <button class="btn btn-info waves-effect waves-light text-white"
                                            type="button"><span class="btn-label"><i class="fas fa-heart"></i></span>
                                            Heart</button>
                                        <button class="btn btn-warning waves-effect waves-light" type="button"><span
                                                class="btn-label"><i class="far fa-envelope"></i></span> Mail</button>
                                        <button class="btn btn-danger waves-effect waves-light text-white"
                                            type="button"><span class="btn-label"><i class="far fa-heart"></i></span>
                                            Heart</button>
                                        <button class="btn btn-light waves-effect waves-light" type="button"><span
                                                class="btn-label"><i class="far fa-heart"></i></span> Heart</button>
                                        <button class="btn btn-dark waves-effect waves-light" type="button"><span
                                                class="btn-label"><i class="fas fa-heart"></i></span> Heart</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button class=&quot;btn btn-primary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-secondary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;Check&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-info waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-warning waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-envelope-o&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-danger waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-light waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-dark waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button type="button" class="btn btn-primary btn-rounded"><i
                                                class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-secondary btn-rounded"> <i
                                                class="far fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-success btn-rounded text-white"><i
                                                class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-info btn-rounded text-white"><i
                                                class="far fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-warning btn-rounded"><i
                                                class="far fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-danger btn-rounded text-white"><i
                                                class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-light btn-rounded"><i
                                                class="far fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-dark btn-rounded"><i
                                                class="far fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button type="button" class="btn btn-outline-primary"><i
                                                class="fa fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-outline-secondary"><i
                                                class="fa fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-outline-success"><i
                                                class="fa fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-outline-info"><i class="fa fa-heart"></i>
                                            Info</button>
                                        <button type="button" class="btn btn-outline-warning"><i
                                                class="fa fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-outline-danger"><i class="fa fa-heart"></i>
                                            Danger</button>
                                        <button type="button" class="btn btn-outline-light"><i class="fa fa-heart"></i>
                                            Light</button>
                                        <button type="button" class="btn btn-outline-dark"><i class="fa fa-heart"></i>
                                            Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-rounded&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-success btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-info btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-warning btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-danger btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-dark btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button class="btn btn-outline-primary waves-effect waves-light"
                                            type="button"><span class="btn-label"><i class="far fa-envelope"></i></span>
                                            Mail</button>
                                        <button class="btn btn-outline-secondary waves-effect waves-light"
                                            type="button"><span class="btn-label"><i class="fa fa-check"></i></span>
                                            Check</button>
                                        <button class="btn btn-outline-info waves-effect waves-light"
                                            type="button"><span class="btn-label"><i class="fa fa-heart"></i></span>
                                            Heart</button>
                                        <button class="btn btn-outline-warning waves-effect waves-light"
                                            type="button"><span class="btn-label"><i class="far fa-envelope"></i></span>
                                            Mail</button>
                                        <button class="btn btn-outline-danger waves-effect waves-light"
                                            type="button"><span class="btn-label"><i class="fa fa-heart"></i></span>
                                            Heart</button>
                                        <button class="btn btn-outline-light waves-effect waves-light"
                                            type="button"><span class="btn-label"><i class="fa fa-heart"></i></span>
                                            Heart</button>
                                        <button class="btn btn-outline-dark waves-effect waves-light"
                                            type="button"><span class="btn-label"><i class="fa fa-heart"></i></span>
                                            Heart</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <button type="button" class="btn btn-outline-primary btn-rounded"><i
                                                class="fas fa-check"></i> Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-rounded"><i
                                                class="far fa-heart"></i> Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-rounded"><i
                                                class="fas fa-check"></i> Success</button>
                                        <button type="button" class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-heart"></i> Info</button>
                                        <button type="button" class="btn btn-outline-warning btn-rounded"><i
                                                class="far fa-heart"></i> Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-rounded"><i
                                                class="far fa-heart"></i> Danger</button>
                                        <button type="button" class="btn btn-outline-light btn-rounded"><i
                                                class="fas fa-heart"></i> Light</button>
                                        <button type="button" class="btn btn-outline-dark btn-rounded"><i
                                                class="fas fa-heart"></i> Dark</button>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                 &lt;button class=&quot;btn btn-outline-primary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-secondary waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;Check&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-info waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-warning waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;far fa-envelope&quot;&gt;&lt;/i&gt;&lt;/span&gt;Mail&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-danger waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-light waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                                &lt;button class=&quot;btn btn-outline-dark waves-effect waves-light&quot; type=&quot;button&quot;&gt;&lt;span class=&quot;btn-label&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/span&gt;Heart&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mb-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Primary&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary btn-rounded&quot;&gt;Secondary &lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt;&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; Success&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Info&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Warning&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Danger&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Light&lt;/button&gt;
                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark btn-rounded&quot;&gt;&lt;i class=&quot;fa fa-heart&quot;&gt;&lt;/i&gt; Dark&lt;/button&gt;
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6 col-xlg-6 mt-4">
                                        <h4 class="card-title">Button with Dropdown</h4>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle text-white"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle text-white"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle text-white"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xlg-6 mt-4 no-button-group">
                                        <h4 class="card-title">Split-button-dropdowns</h4>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger text-white">Action</button>
                                            <button type="button"
                                                class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">Action</button>
                                            <button type="button"
                                                class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success text-white">Action</button>
                                            <button type="button"
                                                class="btn btn-success dropdown-toggle text-white dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info text-white">Action</button>
                                            <button type="button"
                                                class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary">Action</button>
                                            <button type="button"
                                                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light">Action</button>
                                            <button type="button"
                                                class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-dark">Action</button>
                                            <button type="button"
                                                class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Action
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                                  
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Action&lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle text-white dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                        &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                             
                                            </code>
                                        </pre>
                                    </div>
                                    <div class="col-lg-6 mt-4 no-button-group">
                                        <h4 class="card-title">Large button dropdowns</h4>
                                        <h6 class="card-subtitle">Use a classes to create instant button</h6>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large button
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-lg" type="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large button
                                            </button>
                                            <button type="button"
                                                class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Something else
                                                    here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <pre class="language-html scrollable">
                                            <code>
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button class=&quot;btn btn-secondary btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Large button
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;btn-group&quot;&gt;
                                                    &lt;button class=&quot;btn btn-secondary btn-lg&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        Large button
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                        &lt;span class=&quot;sr-only&quot;&gt;Toggle Dropdown&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;                                               
                                            </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-6 col-xlg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated Drop downs</h4>
                                <h6 class="card-subtitle">Give class to the button <code>animated flipInX, flipInY,
                                        lightSpeedIn, slideInUp </code> use any animations class</h6>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle text-white"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInX">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle text-white"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated flipInY">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated lightSpeedIn">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated slideInUp">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle text-white"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated bounce">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;btn-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                            Action
                                        &lt;/button&gt;
                                        &lt;div class=&quot;dropdown-menu animated flipInX&quot;&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                            &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xlg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Animated Drop downs with icon</h4>
                                <h6 class="card-subtitle">Give class to the button <code>animated flipInX, flipInY,
                                        lightSpeedIn, slideInUp </code> use any animations class</h6>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle text-white"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu animated flipInX">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle text-white"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-trash"></i>
                                    </button>
                                    <div class="dropdown-menu animated flipInY">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <div class="dropdown-menu animated lightSpeedIn">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-times"></i>
                                    </button>
                                    <div class="dropdown-menu animated slideInUp">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success dropdown-toggle text-white"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <div class="dropdown-menu animated bounce">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-check"></i>
                                    </button>
                                    <div class="dropdown-menu animated rubberBand">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;div class=&quot;btn-group&quot;&gt;
                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                            &lt;i class=&quot;ti-trash&quot;&gt;&lt;/i&gt;
                                        &lt;/button&gt;
                                        &lt;div class=&quot;dropdown-menu animated flipInY&quot;&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Another action&lt;/a&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Something else here&lt;/a&gt;
                                            &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0)&quot;&gt;Separated link&lt;/a&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;                                
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row mt-4">
                    <div class="col-lg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Circle buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-success</code> to
                                    quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle"><i class="fa fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-circle text-white"><i
                                        class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle text-white"><i
                                        class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-circle text-white"><i
                                        class="fa fa-heart"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">Circle Large buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-lg btn-success</code>
                                    to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle btn-lg"><i
                                        class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle btn-lg"><i
                                        class="fa fa-list"></i> </button>
                                <button type="button" class="btn btn-success btn-circle btn-lg text-white"><i
                                        class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle btn-lg text-white"><i
                                        class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle btn-lg"><i
                                        class="fa fa-times"></i> </button>
                                <button type="button" class="btn btn-danger btn-circle btn-lg text-white"><i
                                        class="fa fa-heart"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">Circle xtra Large buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-xl btn-success</code>
                                    to quickly create a General btn.</h6>
                                <button type="button" class="btn btn-secondary btn-circle btn-xl"><i
                                        class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-primary btn-circle btn-xl"><i
                                        class="fa fa-list"></i> </button>
                                <button type="button" class="btn btn-success btn-circle btn-xl text-white"><i
                                        class="fa fa-link"></i> </button>
                                <button type="button" class="btn btn-info btn-circle btn-xl text-white"><i
                                        class="fa fa-check"></i> </button>
                                <button type="button" class="btn btn-warning btn-circle btn-xl"><i
                                        class="fa fa-times"></i> </button>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle btn-lg&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-circle btn-xl&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt; &lt;/button&gt;                   
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 button-group">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Social buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-facebook</code> to quickly create
                                    a General btn.</h6>
                                <button class="btn btn-facebook waves-effect waves-light" type="button"> <i
                                        class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect waves-light" type="button"> <i
                                        class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect waves-light" type="button"> <i
                                        class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect waves-light" type="button"> <i
                                        class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect waves-light" type="button"> <i
                                        class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect waves-light" type="button"> <i
                                        class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect waves-light" type="button"> <i
                                        class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect waves-light" type="button"> <i
                                        class="fab fa-youtube"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">With Circle buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-circle btn-success</code> to
                                    quickly create a General btn.</h6>
                                <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i
                                        class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i
                                        class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i
                                        class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect btn-circle waves-light" type="button"> <i
                                        class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect btn-circle waves-light" type="button"> <i
                                        class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect btn-circle waves-light" type="button"> <i
                                        class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect btn-circle waves-light" type="button"> <i
                                        class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect btn-circle waves-light" type="button"> <i
                                        class="fab fa-youtube"></i> </button>
                                <br>
                                <br>
                                <h4 class="card-title">with rounded buttons</h4>
                                <h6 class="card-subtitle">Use a classes <code>btn btn-rounded btn-success</code> to
                                    quickly create a General btn.</h6>
                                <button class="btn btn-facebook waves-effect btn-rounded waves-light" type="button"> <i
                                        class="fab fa-facebook"></i> </button>
                                <button class="btn btn-twitter waves-effect btn-rounded waves-light" type="button"> <i
                                        class="fab fa-twitter"></i> </button>
                                <button class="btn btn-googleplus waves-effect btn-rounded waves-light" type="button">
                                    <i class="fab fa-google-plus"></i> </button>
                                <button class="btn btn-linkedin waves-effect btn-rounded waves-light" type="button"> <i
                                        class="fab fa-linkedin"></i> </button>
                                <button class="btn btn-instagram waves-effect btn-rounded waves-light" type="button"> <i
                                        class="fab fa-instagram"></i> </button>
                                <button class="btn btn-pinterest waves-effect btn-rounded waves-light" type="button"> <i
                                        class="fab fa-pinterest"></i> </button>
                                <button class="btn btn-dribbble waves-effect btn-rounded waves-light" type="button"> <i
                                        class="fab fa-dribbble"></i> </button>
                                <button class="btn btn-youtube waves-effect btn-rounded waves-light" type="button"> <i
                                        class="fab fa-youtube"></i> </button>
                                <pre class="language-html scrollable">
                                    <code>
                                    &lt;button class=&quot;btn btn-facebook waves-effect waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;  
                                    &lt;button class=&quot;btn btn-facebook waves-effect btn-circle waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;
                                    &lt;button class=&quot;btn btn-facebook waves-effect btn-rounded waves-light&quot; type=&quot;button&quot;&gt; &lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt; &lt;/button&gt;                 
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Group buttons</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code
                                                class="highlighter-rouge">.btn</code> in <code
                                                class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-info text-white"><i
                                                    class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-info text-white"><i
                                                    class="fa fa-align-justify"></i></button>
                                            <button type="button" class="btn btn-info text-white"><i
                                                    class="fa fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success text-white"><i
                                                    class="fa fa-fast-backward"></i></button>
                                            <button type="button" class="btn btn-success text-white"><i
                                                    class="fa fa-play"></i></button>
                                            <button type="button" class="btn btn-success text-white"><i
                                                    class="fa fa-fast-forward"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button toolbar pagination</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code
                                                class="highlighter-rouge">.btn</code> in <code
                                                class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary disabled">1</button>
                                                <button type="button" class="btn btn-info text-white">2</button>
                                                <button type="button" class="btn btn-secondary">3</button>
                                                <button type="button" class="btn btn-secondary">4</button>
                                            </div>
                                            <div class="btn-group me-2" role="group" aria-label="Second group">
                                                <button type="button" class="btn btn-secondary">5</button>
                                                <button type="button" class="btn btn-secondary">6</button>
                                                <button type="button" class="btn btn-secondary">7</button>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Third group">
                                                <button type="button" class="btn btn-secondary">8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <pre
                                            class=" scrollable language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Basic example<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Left<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Middle<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Right<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Basic example<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-align-left<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-align-justify<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-align-right<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Basic example<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-fast-backward<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-play<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-fast-forward<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <pre
                                            class=" scrollable language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-toolbar<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>toolbar<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Toolbar with button groups<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group me-2<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>First group<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary disabled<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>1<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>2<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>3<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>4<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group me-2<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Second group<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>5<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>6<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>7<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Third group<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>8<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button Toolbar with Input Group</h4>
                                        <div class="btn-toolbar mb-3" role="toolbar"
                                            aria-label="Toolbar with button groups">
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-move"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-fullscreen"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-target"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-trash"></i></button>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-text" id="btnGroupAddon"><i
                                                        class="ti-email"></i></div>
                                                <input type="text" class="form-control" placeholder="Subscribe Now"
                                                    aria-label="Input group example" aria-describedby="btnGroupAddon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Button Toolbar with Jutify Content Input Group</h4>
                                        <div class="btn-toolbar justify-content-between" role="toolbar"
                                            aria-label="Toolbar with button groups">
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-move"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-fullscreen"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-target"></i></button>
                                                <button type="button" class="btn btn-secondary"><i
                                                        class="ti-trash"></i></button>
                                            </div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text" id="btnGroupAddon2"><i
                                                            class="ti-email"></i></div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Subscribe Now"
                                                    aria-label="Input group example" aria-describedby="btnGroupAddon2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <pre
                                            class=" scrollable language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-toolbar mb-3<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>toolbar<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Toolbar with button groups<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group me-2<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>First group<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-move<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-fullscreen<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-target<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-trash<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-group<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-group-prepend<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-group-text<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btnGroupAddon<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-email<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Subscribe Now<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Input group example<span class="token punctuation">"</span></span> <span class="token attr-name">aria-describedby</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btnGroupAddon<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <pre
                                            class=" scrollable language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-toolbar justify-content-between<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>toolbar<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Toolbar with button groups<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>First group<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-move<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-fullscreen<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-target<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-trash<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-group<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-group-prepend<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-group-text<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btnGroupAddon2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>ti-email<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Subscribe Now<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Input group example<span class="token punctuation">"</span></span> <span class="token attr-name">aria-describedby</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btnGroupAddon2<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Group buttons sizing</h4>
                                        <h6 class="card-subtitle">Wrap a series of buttons with <code
                                                class="highlighter-rouge">.btn</code> in <code
                                                class="highlighter-rouge">.btn-group</code></h6>
                                        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-secondary">Left</button>
                                            <button type="button" class="btn btn-secondary">Middle</button>
                                            <button type="button" class="btn btn-secondary">Right</button>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-info text-white"><i
                                                    class="fa fa-align-left"></i></button>
                                            <button type="button" class="btn btn-info text-white"><i
                                                    class="fa fa-align-justify"></i></button>
                                            <button type="button" class="btn btn-info text-white"><i
                                                    class="fa fa-align-right"></i></button>
                                        </div>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-success text-white"><i
                                                    class="fa fa-fast-backward"></i></button>
                                            <button type="button" class="btn btn-success text-white"><i
                                                    class="fa fa-play"></i></button>
                                            <button type="button" class="btn btn-success text-white"><i
                                                    class="fa fa-fast-forward"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Nesting</h4>
                                        <h6 class="card-subtitle">creat with below code </h6>
                                        <div class="btn-group" role="group"
                                            aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-secondary">1</button>
                                            <button type="button" class="btn btn-secondary">2</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <pre
                                            class=" scrollable language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group btn-group-lg<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Basic example<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Left<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Middle<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Right<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Basic example<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-align-left<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-align-justify<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-align-right<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group btn-group-sm<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Basic example<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-fast-backward<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-play<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-success<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>fa fa-fast-forward<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <pre
                                            class=" scrollable language-html"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span> <span class="token attr-name">aria-label</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Button group with nested dropdown<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>1<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>2<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn-group<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>group<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btnGroupDrop1<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>button<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-secondary dropdown-toggle<span class="token punctuation">"</span></span> <span class="token attr-name">data-bs-toggle</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dropdown<span class="token punctuation">"</span></span> <span class="token attr-name">aria-haspopup</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>true<span class="token punctuation">"</span></span> <span class="token attr-name">aria-expanded</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>false<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            Dropdown
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dropdown-menu<span class="token punctuation">"</span></span> <span class="token attr-name">aria-labelledby</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btnGroupDrop1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dropdown-item<span class="token punctuation">"</span></span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>javascript:void(0)<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Dropdown link<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dropdown-item<span class="token punctuation">"</span></span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>javascript:void(0)<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Dropdown link<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                                    </div>
                                </div>
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Vertical buttons</h4>
                                        <h6 class="card-subtitle">creat vertical button with class of
                                            <code>.btn-group-vertical</code> </h6>
                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                        </div>
                                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop1" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary">Button</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop2" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop3" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupVerticalDrop4" type="button"
                                                    class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Dropdown
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                    <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                                <!-- column -->
                                <div class="col-xlg-6 col-lg-6 mb-4">
                                    <div class="card-body">
                                        <h4 class="card-title">Button with js elements</h4>
                                        <h6 class="card-subtitle">There are a few easy ways to quickly get started with
                                            Bootstrap, each one ... </h6>
                                        <button type="button" class="btn btn-success text-white" data-bs-toggle="button"
                                            aria-pressed="false">
                                            <i class="ti-settings text" aria-hidden="true"></i>
                                            <span class="text">Upload</span>
                                            <i class="ti-check text-active" aria-hidden="true"></i>
                                            <span class="text-active">Success</span>
                                        </button>
                                        <button type="button" class="btn btn-info text-white" data-bs-toggle="button"
                                            data-more="#sh" aria-pressed="false">
                                            <i class="ti-plus text" aria-hidden="true"></i>
                                            <i class="ti-minus text-active" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-outline"
                                            data-bs-toggle="button" aria-pressed="true">
                                            <i class="fa fa-heart text" aria-hidden="true"></i>
                                            <i class="fa fa-heart text-active text-danger" aria-hidden="true"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-outline"
                                            data-bs-toggle="button" aria-pressed="true">
                                            <i class="fa fa-thumbs-o-up text" aria-hidden="true"> 20</i>
                                            <i class="fa fa-thumbs-o-up text-active text-danger" aria-hidden="true">
                                                21</i>
                                        </button>
                                        <div class="btn-group mt-3" data-bs-toggle="buttons" role="group">
                                            <label class="btn btn-outline btn-info text-white">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="options" value="male"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio1"> <i
                                                            class="ti-check text-active" aria-hidden="true"></i>
                                                        Male</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info text-white">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="options" value="female"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio2"> <i
                                                            class="ti-check text-active" aria-hidden="true"></i>
                                                        Female</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-outline btn-info active text-white">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="options" value="n/a"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio3"> <i
                                                            class="ti-check text-active" aria-hidden="true"></i>
                                                        N/A</label>
                                                </div>
                                            </label>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="card-title">Button with checkbox</h4>
                                        <div class="overflow-auto">
                                            <div class="btn-group" data-bs-toggle="buttons">
                                                <label class="btn btn-info active text-white">
                                                    <div class="form-check mr-sm-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox0"
                                                            checked="">
                                                        <label class="form-check-label" for="checkbox0">Checked</label>
                                                    </div>
                                                </label>
                                                <label class="btn btn-info text-white">
                                                    <div class="form-check mr-sm-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox1">
                                                        <label class="form-check-label" for="checkbox1">Checkbox
                                                            2</label>
                                                    </div>
                                                </label>
                                                <label class="btn btn-info text-white">
                                                    <div class="form-check mr-sm-2">
                                                        <input type="checkbox" class="form-check-input" id="checkbox2">
                                                        <label class="form-check-label" for="checkbox2">Checkbox
                                                            3</label>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <h4 class="card-title">Button with Radiobutton</h4>
                                        <div class="btn-group" data-bs-toggle="buttons">
                                            <label class="btn btn-primary active text-white form-label">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio4" name="customRadio"
                                                        class="form-check-input" checked="">
                                                    <label class="form-check-label" for="customRadio4">Selected</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary text-white form-label">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio5" name="customRadio"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio5">Radio 2</label>
                                                </div>
                                            </label>
                                            <label class="btn btn-primary text-white form-label">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio6" name="customRadio"
                                                        class="form-check-input">
                                                    <label class="form-check-label" for="customRadio6">Radio 3</label>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Direction of the Dropdown</h4>
                                <h5 class="card-subtitle">Trigger dropdown menus above elements by adding
                                    <code>.dropup</code> to the parent element.</h5>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdowm Right Side</h5>
                                        <!-- Default dropright button -->
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropright
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Split dropright button -->
                                        <div class="btn-group dropright">
                                            <button type="button" class="btn btn-secondary">
                                                Split dropright
                                            </button>
                                            <button type="button"
                                                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropright</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdown Up Side</h5>
                                        <!-- Default dropup button -->
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropup
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Split dropup button -->
                                        <div class="btn-group dropup">
                                            <button type="button" class="btn btn-secondary">
                                                Split dropup
                                            </button>
                                            <button type="button"
                                                class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title mt-3">Dropdowm Left Side</h5>
                                        <!-- Default dropleft button -->
                                        <div class="btn-group dropleft">
                                            <button type="button" class="btn btn-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropleft
                                            </button>
                                            <div class="dropdown-menu">
                                                <!-- Dropdown menu links -->
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <!-- Split dropleft button -->
                                        <div class="btn-group">
                                            <div class="btn-group dropleft" role="group">
                                                <button type="button"
                                                    class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="sr-only">Toggle Dropleft</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <!-- Dropdown menu links -->
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary">
                                                Split dropleft
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Menu Alignment</h4>
                                <h5 class="card-subtitle">Add <code>.dropdown-menu-end</code> to a
                                    <code>.dropdown-menu</code> to right align the dropdown menu.</h5>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Right-aligned menu
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Left-aligned menu
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-start">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body overflow-auto">
                                <h4 class="card-title">Responsive Alignment</h4>
                                <div class="overflow-auto">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                                            aria-expanded="false">
                                            Left-aligned but right aligned when large screen
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-lg-end">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                    <div class="btn-group mt-2">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                                            aria-expanded="false">
                                            Right-aligned but left aligned when large screen
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Different Menu Content</h4>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Drodown with Header
                                    </button>
                                    <div class="dropdown-menu">
                                        <h6 class="dropdown-header">Dropdown header</h6>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown with Divider
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown with Text
                                    </button>
                                    <div class="dropdown-menu p-4 text-muted" style="max-width: 400px;">
                                        <p>
                                            Some example text that's free-flowing within the dropdown menu.
                                        </p>
                                        <p class="mb-0">
                                            And this is more example text.
                                        </p>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-info dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown with Form
                                    </button>
                                    <div class="dropdown-menu">
                                        <form class="px-4 py-3">
                                            <div class="form-group">
                                                <label for="exampleDropdownFormEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                                    placeholder="email@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleDropdownFormPassword1">Password</label>
                                                <input type="password" class="form-control"
                                                    id="exampleDropdownFormPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="md_checkbox_21"
                                                    class="filled-in chk-col-indigo">
                                                <label for="md_checkbox_21">Remeber Me</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary text-white">Sign in</button>
                                        </form>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div>
                                </div>
                                <h4 class="card-title mt-4">Dropdown Options</h4>
                                <div class="d-flex">
                                    <div class="dropdown me-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-offset="10,20">
                                            Offset
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary">Reference</button>
                                        <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            id="dropdownMenuReference" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" data-reference="parent">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Toggle States [Button Plugin]</h4>
                                <h5 class="card-subtitle">Add <code>data-bs-toggle="button"</code> to toggle a button’s
                                    <code>active </code> state. If you’re pre-toggling a button, you must manually add
                                    the <code>.active</code> class and <code>aria-pressed="true"</code> to the
                                    <code>button.</code> </h5>
                                <div class="mt-3">
                                    <button type="button" class="btn btn-primary text-white" data-bs-toggle="button"
                                        aria-pressed="false" autocomplete="off">
                                        Single toggle
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with Checkbox</h4>
                                <div class="btn-group" data-bs-toggle="buttons">
                                    <label class="btn btn-secondary border-0 text-info font-weight-medium active">
                                        <div class="mr-sm-2 form-check">
                                            <input type="checkbox" class="material-inputs form-check-input"
                                                id="checkbox4" checked>
                                            <label class="form-check-label" for="checkbox4"><span
                                                    class="d-block d-md-none">1</span><span
                                                    class="d-none d-md-block">Checked</span></label>
                                        </div>
                                    </label>
                                    <label class="btn btn-secondary border-0 text-info font-weight-medium">
                                        <div class="mr-sm-2 form-check">
                                            <input type="checkbox" class="material-inputs form-check-input"
                                                id="checkbox5">
                                            <label class="form-check-label" for="checkbox5"><span
                                                    class="d-block d-md-none">2</span><span
                                                    class="d-none d-md-block">Checkbox 2</span></label>
                                        </div>
                                    </label>
                                    <label class="btn btn-secondary border-0 text-info font-weight-medium">
                                        <div class="mr-sm-2 form-check">
                                            <input type="checkbox" class="material-inputs form-check-input"
                                                id="checkbox6">
                                            <label class="form-check-label" for="checkbox6"><span
                                                    class="d-block d-md-none">3</span><span
                                                    class="d-none d-md-block">Checkbox 3</span></label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Button with Radio</h4>
                                <div class="btn-group" data-bs-toggle="buttons">
                                    <label class="btn btn-secondary border-0 text-info font-weight-medium active">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio7" name="customRadio"
                                                class="with-gap material-inputs radio-col-red form-check-input" checked>
                                            <label class="form-check-label" for="customRadio7"><span
                                                    class="d-block d-md-none">1</span><span
                                                    class="d-none d-md-block">Radio 1</span></label>
                                        </div>
                                    </label>
                                    <label class="btn btn-secondary border-0 text-info font-weight-medium">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio8" name="customRadio"
                                                class="with-gap material-inputs radio-col-red form-check-input">
                                            <label class="form-check-label" for="customRadio8"><span
                                                    class="d-block d-md-none">2</span><span
                                                    class="d-none d-md-block">Radio 2</span></label>
                                        </div>
                                    </label>
                                    <label class="btn btn-secondary border-0 text-info font-weight-medium">
                                        <div class="form-check">
                                            <input type="radio" id="customRadio9" name="customRadio"
                                                class="with-gap material-inputs radio-col-red form-check-input">
                                            <label class="form-check-label" for="customRadio9"><span
                                                    class="d-block d-md-none">3</span><span
                                                    class="d-none d-md-block">Radio 3</span></label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                        </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark"
                                        class="default-dark-theme working">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark"
                                        class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark"
                                        class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark"
                                        class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark"
                                        class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img"
                                            class="img-circle"> <span>Varun Dhavan <small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img"
                                            class="img-circle"> <span>Genelia Deshmukh <small
                                                class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img"
                                            class="img-circle"> <span>Ritesh Deshmukh <small
                                                class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img"
                                            class="img-circle"> <span>Arijit Sinh <small
                                                class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img"
                                            class="img-circle"> <span>Govinda Star <small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img"
                                            class="img-circle"> <span>John Abraham<small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img"
                                            class="img-circle"> <span>Hritik Roshan<small
                                                class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img"
                                            class="img-circle"> <span>Pwandeep rajan <small
                                                class="text-success">online</small></span></a>
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
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
</body>

</html>