<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Passe Temps Boussiron</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
    </div>

    <!-- Icone Gmail + Apps -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="left-top">
                        <div class="email-box">
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> contact-ptb@gmail.fr</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="right-top">
                        <div class="social-box">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li> -->
                                <ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu Nav-Bar -->
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="image"
                            width="60px"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about-us.php">?? propos de nous</a></li>
                        <li><a href="services.php">Tournois de Palets</a></li>
                        <li><a href="portfolio.php">Galerie Images</a></li>
                        <!-- <li><a href="features.php">Features</a></li> -->
                        <!-- <li><a href="testimonials.php">Testimonials</a></li> -->
                        <!-- <li><a href="pricing.php">Pricing</a></li> -->
                        <li><a href="contact.php">Contact</a></li>
                        <li><a class="active" href="connexion.php">Connexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Titre -->
    <div class="banner-area banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>Connexion</h2>
                        <ul class="page-title-link">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sous-Titre -->
    <div id="contact" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Connexion</h3>

            </div>
            <div class="login-form">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="pconnexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
            <p class="text-center"><a href="inscription.php">Inscription</a></p>
        </div>

            <!-- <div class="row">
                <div class="col-md-8">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" name="contactform">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="Nom d'utilisateur">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="Mot de passe">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" onclick="window.location.href = 'inscription.php';">Inscription</button>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit"
                                        class="btn btn-light btn-radius btn-brd grd1 btn-block">Valider</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div> -->

        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">

                    <!--Logo Footer PTB -->
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-2.png" alt="" width="200px" />
                        </div>
                    </div>
                </div>

                <!--Indentation Footer Page-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="index.php">Accueil <span class="icon icon-arrow-right2"></span></a></li>
                            <li><a href="about-us.php"> ?? propos de nous <span
                                        class="icon icon-arrow-right2"></span></a></li>
                            <li><a href="services.php">Tournois de Palets <span
                                        class="icon icon-arrow-right2"></span></a></li>
                            <li><a href="portfolio.php">Galerie Images<span class="icon icon-arrow-right2"></span></a>
                            </li>
                            <li><a href="contact.php">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul>
                    </div>
                </div>

                <!--Footer Contact-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Contact</h3>
                            <p>Pour toute demande, merci de contact?? un membre du bureau ou envoyer un mail a l'adresse
                                suivante : contact-ptb@gmail.com</p>
                        </div>

                        <div class="footer-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer Copyright-->
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">Tous Droits R??serv??s.&copy; 2022 <a href="#">Le Passe Temps
                            Boussiron</a> Design By :
                        <a>HellFire44</a>
                    </p>
                </div>


            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>

</body>

</html>