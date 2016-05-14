<?php
/**
 * La Cabecera de nuestro tema
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta property="fb:admins" content="731366668" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes, maximum-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="web, develop, desarrollo, guayana, puerto ordaz, puerto, venezuela, " />
	<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
	<meta http-equiv="content-language" content="es-VE" />
	<meta http-equiv="author" content="Jorge Saud" />
	<meta http-equiv="contact" content="jorge@zonapro.net" />
	<meta name="copyright" content="Copyright (c)2008 
	Zonapro.net All Rights Reserved." />
	<?php if(is_single() || is_page() || is_home()):?>
		<meta name="googlebot" content="index,noarchive,follow,noodp" />
		<meta name="robots" content="all,index,follow" />
		<meta name="msnbot" content="all,index,follow" />
	<?php else :?>
		<meta name="googlebot" content="noindex,noarchive,follow,noodp" />
		<meta name="robots" content="noindex,follow" />
		<meta name="msnbot" content="noindex,follow" />
	<?php endif;?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
	<!-- <link href="https://plus.google.com/110701055107397029625" rel="author" /> -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
	<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
        	assets: '<?php echo get_template_directory_uri(); ?>',
        	tests: {}
        });
    </script>
</head>

<body <?php body_class(); ?>>
	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header" role="banner"style="background-color:<?php echo get_theme_mod( 'color_principal')?>">
			<div class="capaSuperior" >
				<div class="layer" data-stellar-background-ratio="1" id="grid" style="background-image:url(<?php echo get_theme_mod('imagen_de_grid');?>)"></div>
				<div class="layer" data-stellar-background-ratio="0.8" id="imagen" style="background-image:url(<?php echo get_theme_mod( 'imagen_de_fondo');?>)"></div>
				<div class="layer"  data-stellar-offset-parent="true" id="logocontenedor">
					<div id="logo"  data-stellar-ratio="2"  data-stellar-vertical-offset="50" class="col-xs-12 text-center">
						<?php if ( get_header_image() ) : ?>
							<div id="site-header">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php header_image(); ?>"   width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
								</a>
							</div>
						<?php endif; ?>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="layer" id="menu">
					<div class="container-fluid">
						<nav class="navbar navbar-zonapro" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-zonapro-navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<?php menuSuperior_nav(); ?>
						</nav>
					</div>

				</div>
			</div>
			<div class="clearfix"></div>
		</header>
		<div class="separadorSuperior"></div>
