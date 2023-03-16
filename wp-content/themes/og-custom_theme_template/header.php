<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_Custom
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>
	<meta charset="utf-8" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="Pristine Code is an WordPress competence evaluation site, created by Anne Essien for Ogun Labs">
	<meta name="keywords" content="Custom theme, WordPress Settings Page, WordPress Development">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ct-custom' ); ?></a>
		<div class="background">
				<div class="top_nav">
					<div class="left">
						<div class="tele"><p><span>CALL US NOW! </span>385.154.35.66.78</p></div>
					</div> 
					<div class="right">
					<ul>
						<li><a href="#">LOGIN</a></li>
						<li><a href="#">SIGNUP</a></li>
					</ul>
				</div>
			</div>

		<header id="header" class="site-header">
		<?php $og_custom_options = get_option('theme_og_custom_options'); ?>
			<?php if ( $og_custom_options['logo'] != '' ): ?>
				<div id="logo">
					<img src="<?php echo $og_custom_options['logo']; ?>" />
				</div>
			<?php  endif; ?>
			<h1 class="logo"><a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<nav id="main-nav" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'container' => 'ul',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
			<a href="javascript:void(0);" class="icon" onclick="togglemenu()">
				<i class="fa fa-bars"></i>
			</a>
		</header><!-- #masthead -->
		<nav id="mobile-nav" class="mobile-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'container' => 'ul',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

		<div id="content" class="layer-622-holder">
