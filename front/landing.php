<?php
session_start();
require_once 'config.php'; // ajout connexion bdd 
// si la session existe pas soit si l'on est pas connecté on redirige
if (!isset($_SESSION['user'])) {
    header('Location:index.php');
    die();
}

// On récupere les données de l'utilisateur
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
$req->execute(array($_SESSION['user']));
$data = $req->fetch();

?>
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

<!-- Top Bar-->
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
								<!-- <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li> -->
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

<!-- Header Nav-Bar-->
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/logo.png" alt="image" width="60px"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="about-us.php">À propos de nous</a></li>
                        <li><a class="active" href="services.php">Tournois de Palets</a></li>
                        <li><a href="portfolio.php">Galerie Images</a></li>
                        <!-- <li><a href="features.php">Features</a></li> -->
                        <!-- <li><a href="testimonials.php">Testimonials</a></li> -->
                        <!-- <li><a href="pricing.php">Pricing</a></li> -->
						<li><a href="contact.php">Contact</a></li>
                        <li><a href="connexion.php">Connexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<!-- Banniere Principale -->
   	<div class="banner-area banner-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>Espace Membres</h2>
						<ul class="page-title-link">
							<li><a href="#">Votre Profil</a></li>
							<li><a href="#"><?php echo $data['pseudo'] ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>



    
	
	<div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Bonjour <?php echo $data['pseudo']; ?> !</h3>
                <p class="lead">Bienvenue sur ton profil tu peut dorenavant voir les information de compte (Date d'inscription, adresse mail, etc...)</p>
            </div>

            <table border="10" width="100%" align="center">
                <tr>
                    <th>Vos Informations</th>
                </tr>
                <tr>
                    <td>Adresse Mail</td>
                    <td><?php echo $data['email'] ?></td>
                </tr>
                <tr>
                    <td>Date d'Inscription</td>
                    <td><?php echo $data['date_inscription'] ?></td>
                </tr>
            </table>

                

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                    </div>
                </div>
                

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                    </div>
                </div>
                
            </div>
            <div class="btnpadmin">
            <button type="button" class="btn btn-success btn-lg ">
            <a href="./panel/index.php"> <?php if ($data['role'] === '1') { echo "Accéder au Panel Admin";} ?></a>
            </button>
            <p> <?php if ($data['role'] === '0' and '1') { echo "Tu a le role visiteur";} ?></p>
            <hr class="hr1">

        </div><!-- end container -->
    </div><!-- end section -->
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#change_password">
            Changer mon mot de passe
        </button>
        </div>
    </div>
    </div>






    <!-- Modal -->
    <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Changer mon mot de passe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="layouts/change_password.php" method="POST">
                        <label for='current_password'>Mot de passe actuel</label>
                        <input type="password" id="current_password" name="current_password" class="form-control" required />
                        <br />
                        <label for='new_password'>Nouveau mot de passe</label>
                        <input type="password" id="new_password" name="new_password" class="form-control" required />
                        <br />
                        <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                        <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required />
                        <br />
                        <button type="submit" class="btn btn-success">Sauvegarder</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>



    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-2.png" alt="" width="60px"/>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Pages</h3>
                        </div>

                        <ul class="footer-links hov">
                            <li><a href="#">Home <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Blog <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Pricing <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">About <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Faq <span class="icon icon-arrow-right2"></span></a></li>
							<li><a href="#">Contact <span class="icon icon-arrow-right2"></span></a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Subscribe</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which one know this tricks.</p>
                        </div>
						
						<div class="footer-right">
							<form method="get" action="#">
								<input placeholder="Subscribe our newsletter.." name="search">
								<i class="fa fa-envelope-o"></i>
							</form>
						</div>                        
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">GoodWEB</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>

                
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    

</body>
</html>