<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="author" content=“Marquinhus Goncalves“>
	<meta name="description" content=“Mundo S/A”>
	<meta name="keywords" content=““>
	<meta name="robots" content="index, follow">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory');?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" >
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
		<header>
			<div class="container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" alt=""></a>
				<input type="checkbox" id="sidebartoggler" name="" value="">	
				<label class="toggle visible-xs-inline-block" for="sidebartoggler"><i class="fa fa-bars"></i></label>
				<nav class="menu_principal sidebar visible-xs-inline-block"><?php wp_nav_menu(''); ?></nav>
				<nav class="menu_principal hidden-xs" ><?php wp_nav_menu(''); ?></nav>
			</div>
		</header>
