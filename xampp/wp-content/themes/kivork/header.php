<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">-->
	<link
		href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
		rel="stylesheet">
	<!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css"> -->
	
	<?php wp_head(); ?>

</head>

<body>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-1">
					<div class="logo">
						<a href="<?php echo home_url(); ?>"><p class="logo_item">Ganja</p></a>
					</div>
					
				</div>
				<div class="col-lg-7 ml-auto">
					<nav id="nav-wrap">
						<?php wp_nav_menu(array (
							'theme_location'  => 'Header',				 
							'container'       => null, 
							'menu_class'      => 'nav d-flex', 
							'menu_id'         => 'nav-wrap d-flex',
						));?>
					</nav>
				

					<!-- <nav class="navbar navbar-expand-lg justify-content-center">
						<ul class="menu d-flex">
							<li class="nav-item"><a class="nav-link" href="#">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Team</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Testimonail</a></li>
							<li class="nav-item"><a class="nav-link" href="#">News</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="#"><img style="width: 17px; height: 17px;"
										src="img/search.png" alt="search"></a></li>
							<li class="nav-item"><a href="#"><img style="width: 17px; height: 17px;" src="img/bag.png" alt="bag"></a>
							</li>
						</ul>
					</nav> -->
				</div>
			</div>
		</div>
	</header>