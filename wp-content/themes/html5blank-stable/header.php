<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

		

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link type="css/text" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <style type="text/css" media="screen">
        	.jumbotron{
        		border:none;
        	}
        </style>

	</head>
	<body <?php body_class(); ?>>
	<script src="<?php echo get_template_directory_uri(); ?>/js/lib/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<!-- wrapper -->
		<div class="container-fluid wrapper col-xs-10 vertical-center">
		<!-- header -->

		<header class="header clear" role="banner">
			
			<div class="logo">
				<a href="<?php get_template_directory_uri() ?>">
					<img src="<?php echo get_template_directory_uri() ?>/images/p-logo.png" alt="">
				</a>
			</div>
			<!-- nav -->
			<nav class="navbar navbar-inverse" role="navigation" style="border-radius: 0px">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#enduro-navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span> 
						</button>
						
						<a class="navbar-brand" href="home" >
							Enduro Asia
						</a>
						
					</div>

					<div class="collapse navbar-collapse" id="enduro-navbar">
						
						<?php 
						$args = array(
							'theme_location'  => 'header-menu',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => 'menu-{menu slug}-container',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="nav navbar-nav" style="margin:0px;">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
							);
							
						wp_nav_menu( $args ); ?>
				
					</div>

			</nav>
			<!-- /nav -->

		</header>
		<!-- /header -->
		<div class="container-fluid home-content">
			