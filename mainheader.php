<?php
header("Content-Type: text/html");
include("data/function.php");
/* //print_r($_SESSION['patient_login_id']);
$obj = new Get_query();
if(!empty($_SESSION['doctor_login_id'])){
 $sdf = $obj->select(tbl_doc_info_personal,' doc_fullname ',' doc_p_id='.$_SESSION['doctor_login_id']); $u_name = $sdf[0]['doc_fullname']; 
$p_verify =  $obj->select(tbl_phone_verify,' p_status ',' u_id='.$_SESSION['doctor_login_id']); 
 $p_v = $p_verify[0]['p_status'];
 }
else if(!empty($_SESSION['patient_login_id'])){ 
$sdf = $obj->select(tbl_patient_info_personal,' p_name ',' p_id='.$_SESSION['patient_login_id']); $u_name = $sdf[0]['p_name'];
$p_verify =  $obj->select(tbl_phone_verify,' p_status ',' u_id='.$_SESSION['patient_login_id']); 
 $p_v = $p_verify[0]['p_status'];
 }
else {}
 */
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Remedazo</title>
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_URL_ROOT; ?>images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_URL_ROOT; ?>images//apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL_ROOT; ?>images//apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL_ROOT; ?>images//apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL_ROOT; ?>images//apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_URL_ROOT; ?>images//apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL_ROOT; ?>images//apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL_ROOT; ?>images//apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL_ROOT; ?>images//apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo BASE_URL_ROOT; ?>images//android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL_ROOT; ?>images//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL_ROOT; ?>images//favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL_ROOT; ?>images//favicon-16x16.png">
<link href="<?php echo BASE_URL_ROOT; ?>css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo BASE_URL_ROOT; ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link href="<?php echo BASE_URL_ROOT; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- Mobile menu files here -->
<link rel="stylesheet" href="css/menu_style.css"> <!-- Resource style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

<!--<link href="style.css" rel="stylesheet" type="text/css" media="all" />-->
<link href="<?php echo BASE_URL_ROOT; ?>mainstyle.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="now dummy" />
<link rel="stylesheet" href="<?php echo BASE_URL_ROOT; ?>css/sweetalert.css">
  <!--.......................-->
<!-- //for-mobile-apps -->

<!--link rel="stylesheet" type="text/css" href="/assets/style_main.css" /-->
<link rel="stylesheet" href="<?php echo BASE_URL_ROOT; ?>css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_ROOT; ?>css/custom.css" />	
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_ROOT; ?>css/jquery.timepicker.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL_ROOT; ?>css/bootstrap-datepicker.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="main_header">
	<!-- Top bar nav -->
		<!-- Full Screen -->
		<div class="top_header full_screen">
		  <div class="container">
			<div class="top_bar navbar">
				<div class="num toP">
					<a href="tel:+919999012346"><i class="fa fa-phone"></i> +91-9999012346</a>
				</div>
				<div class="logo toP">
					<a class="navbar-brand" href="/">
						<img src="<?php echo BASE_URL_ROOT; ?>/images/logo_main.svg" />
					</a>
				</div>
				<div class="social_icons toP">
					<ul class="top_ul">
						<li><a href="mailto:contact@remedazo.com"><i class="fa fa-envelope"></i></a></li>
						<li><a href="https://www.facebook.com/Remedazomedicaltourism" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/remedazo" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://twitter.com/remedazo" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/company/34221336/admin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		  </div>
		</div>
		<!-- Small Screen -->
		<div class="top_header small_screen">
		  <div class="container">
			<div class="top_bar navbar">
				<div class="logo toP">
					<a class="navbar-brand" href="#">
						<img src="<?php echo BASE_URL_ROOT; ?>/images/logo_main.svg" />
					</a>
				</div>
				<div class="top_text">
					<div class="num toP">
						<a href="tel:+919999012346"><i class="fa fa-phone"></i> +91-9999012346</a>
					</div>
					<div class="social_icons toP">
						<ul class="top_ul">
							<li><a href="mailto:contact@remedazo.com"><i class="fa fa-envelope"></i></a></li>
							<li><a href="https://www.facebook.com/Remedazomedicaltourism" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/remedazo" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://twitter.com/remedazo" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/company/34221336/admin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		  </div>
		</div>
	<!-- Main nav -->
	
	<div class="cd-main-header">
		<ul class="cd-header-buttons">
			<li><a class="cd-nav-trigger" href="#cd-primary-nav">Menu<span></span></a></li>
		</ul> <!-- cd-header-buttons -->
	</div>

	<main class="cd-main-content"></main>
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark cd-nav">
	 <div class="container">
	  <div class="navbar-collapse" id="collapsibleNavbar">
		<ul id="cd-primary-nav" class="navbar-nav cd-primary-nav is-fixed">
		  <li class="nav-item">
			<a class="nav-link active" href="<?php echo BASE_URL_ROOT; ?>">Home</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="/aboutus.php">About</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="/second-opinion.php">Second Opinion</a>
		  </li>    
		  <li class="nav-item">
			<a class="nav-link" href="#">Find a Doctor</a>
		  </li>
		  <li class="nav-item has-children">
			<a class="nav-link" href="#">Services</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="/blog">Blog</a>
		  </li>
		  <li class="nav-item has-children">
			<a class="nav-link" href="#">More</a>
			<ul class="cd-secondary-nav is-hidden">
				<li class="go-back"><a href="#0">Menu</a></li>
				<li class="see-all"><a href="#">All Clothing</a></li>
				<li class="has-children">
					<a href="#">Accessories</a>

					<ul class="is-hidden">
						<li class="go-back"><a href="#0">Clothing</a></li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Bottoms</a>

					<ul class="is-hidden">
						<li class="go-back"><a href="#0">Clothing</a></li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Jackets</a>

					<ul class="is-hidden">
						<li class="go-back"><a href="#0">Clothing</a></li>
					</ul>
				</li>

				<li class="has-children">
					<a href="#">Tops</a>

					<ul class="is-hidden">
						<li class="go-back"><a href="#0">Clothing</a></li>
					</ul>
				</li>
			</ul>
		  </li>
		</ul>
		<ul class="navbar-nav right_nav">
			<div class="sl-nav">
				<ul>
				  <li>En <i class="fa fa-angle-down" aria-hidden="true"></i>
					<div class="triangle"></div>
					<ul>
					  <li><i class="sl-flag flag-usa"><div id="germany"></div></i> <span>Englisch</span></li>
					  <li><i class="sl-flag flag-de"><div id="germany"></div></i> <span class="active">Deutsch</span></li>
					</ul>
				  </li>
				</ul>
			</div>

		  <li class="nav-item login_btn">
			<a class="nav-link" href="#">Login</a>
		  </li>
		</ul>
	  </div>  
	 </div>
	</nav>
</header>
<!-- Header end here --> 