<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<header class="header">
				<section class="branding">
					<div class="site-title"><?php if ( ! is_singular() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'starthere' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( ! is_singular() ) { echo '</h1>'; } ?></div>
					<div class="site-description"><?php bloginfo( 'description' ); ?></div>
				</section>
				<nav class="menu">
					<div class="search">
						<?php get_search_form(); ?>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav>
			</header>
			<div class="container">