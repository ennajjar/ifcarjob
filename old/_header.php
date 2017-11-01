<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Ifcarjob - page d'accueil</title>
	<meta name="description" content="Handyman - Job Board HTML Template - 1.0">
	<meta name="author" content="http://themeforest.net/user/dan_fisher">


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
		
	<!-- CSS
	================================================== -->
	<!-- Base + Vendors CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="css/fonts/entypo/css/entypo.css">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
	<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen">
	<link rel="stylesheet" href="vendor/job-manager/frontend.css" media="screen">

	<!-- Theme CSS-->
	<link rel="stylesheet" href="css/aileron.css" media="screen">
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/animate.min.css">
   <?php if(isset($styles) && !empty($styles)) {
   		foreach($styles as $style){
   			echo sprintf('<link rel="stylesheet" href="css/%s.css">', $style);
   		}
   } 

   ?>

	<!-- Head Libs -->
	<script src="vendor/modernizr.js"></script>

	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicons/favicon.ico" type="image/x-icon">

	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/favicon-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/favicon-152.png">
	
</head>
<body>
<div class="site-wrapper">
	<!-- Header -->
	<header class="header header-menu-fullw">
		<div class="header-top">
			<div class="container padding-right-0">
				<div class="header-top-left"></div>
				<div class="header-top-right">
					<ul class="nav-top-header">
						<li><a href="aboutus.php">Qui sommes nous</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<ul class="social-links-header">
						<li><a href="#" class="btn btn-sm"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="btn btn-sm"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="btn btn-sm"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="btn btn-sm"><i class="fa fa-youtube"></i></a></li>
						<li><a href="#" class="btn btn-sm"><i class="fa fa-viadeo-square" aria-hidden="true"></i></a></li>						
					</ul>
				</div>
			</div>
		</div>
		
		<div class="header-main">
			<div class="container">
				<button type="button" class="navbar-toggle">
							<i class="fa fa-bars"></i>
						</button>
				<div class="row">
					<div class="col-md-3 padding-left-0 padding-right-0">
						<a href="index.php"><img src="images/logo-ifcarjob.png" alt="ifcarjob"></a> 
					</div>
					<div class="col-md-9 padding-left-0 padding-right-0">
						<img src="images/banner_top.jpg" width="100%" height="93" alt="">
					</div>
					<div class="col-md-9 padding-left-0 padding-right-0">
						<nav class="nav-main">
							<div class="nav-main-inner">
								<ul data-breakpoint="992" class="flexnav">
									<li class="active"><a href="index.php">Accueil</a></li>
									<li><a href="#">Offres d'emploi</a></li>
									<li><a href="#">Espace candidat</a></li>
									<li><a href="#">Espace recruteur</a></li>
									<li><a href="#">Job coaching</a></li>
									<li><a href="#">Actualités</a></li>
								</ul>
							</div>
						</nav> <!-- Navigation / End -->

					</div>
					<div class="col-md-3 padding-left-0 padding-right-0">
						<div class="col-md-6 padding-topbottom btn-top"><a href="candidat_recruteur.php" class="btn btn-primary btn-block btn-color-blue"><i class="fa fa-user"></i> Inscription</a></div>
						<div class="col-md-6 padding-topbottom btn-top"><a href="login.php" class="btn btn-primary btn-block btn-color-green"><i class="fa fa-lock"></i> Connexion</a></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header / End -->

	<!-- Main -->
	<div class="main" role="main">

<div class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Modal title</h4>
      		</div>
      		<div class="modal-body">
        		<p>One fine body&hellip;</p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		<button type="button" class="btn btn-primary">Save changes</button>
      		</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->