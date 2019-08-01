<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
	<link
		href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&display=swap"
		rel="stylesheet">
	
	
	<?php wp_head(); ?>

</head>

<body>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col">
				<nav class="navbar navbar-expand-lg navbar-light fixed-top">
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><p class="logo_item">Ganja</p></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">			
								<?php
								wp_nav_menu( [
									'theme_location'  => 'menu-header', 
									'container'       => false, 
									'container_class' => 'navbar navbar-expand-lg', 
									'menu_class'      => 'navbar-nav', 
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="navbar-nav">%3$s</ul>',
									'depth'           => 0,
									'walker'          => ''
								] );?>
							</div>
								<form action="get_search_form()">
									<input class="search" type="text" placeholder="  Search">
									<button class="BtnSearch" type="form" formtarget=" _self"></button>
								</form>
							
						</nav>
				</div>
			</div>
		</div>
	</header>