<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanilla
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vanilla' ); ?></a>

<div id="page" class="site app-layout">
	<header class="app-layout__header">
		<div class="navbar__container">
				<div  class="navbar__branding">
		<div class="site-branding">
	 <h1 class="site-branding__name site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> 
			 
</div><small>&#8729; Arch Linux &#8729; Laravel &#8729; Symfony &#8729; React JS &#8729; GraphQL &#8729; Vue JS</small> <br> <small>&#8729; info[at]mkoseoglu.com</small> </div></div>
	</header>

	<nav class="drawer" role="navigation" data-drawer data-drawer-container-selector="body" id="primary-menu" aria-hidden="true" aria-expanded="false">

		<div class="drawer__body primary-menu">
			<div class="drawer__search">
				<?php get_search_form(); ?>
			</div>


			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class' => 'primary-menu__links',
			) );
			?>


		</div>
	</nav>

	<div class="site-content app-layout__content">

		 
		<div id="content" class="content-area">




