<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aurelia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class('cbp-spmenu-push'); ?> style="background-image: url('<?php the_field('background_image'); ?>');">
<?php if ( is_page(268) || is_page(288) ) : ?>

<?php else : ?>
	<!-- Mobile Menu -->
	<div id="showRight">
		<div class="nav-icon3"><span></span><span></span><span></span><span></span></div>
	</div>
	<div class="body-overlay overlay"></div>
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'header-menu' ) ); ?>
	</div>
	<!-- Mobile Menu  #end -->

	<?php
		$logo = get_field('site_logo', 'option'); // Logo is uploaded in the WPAdmin Theme Settings
		$banner = get_field('banner_image'); // Banner is uploaded on the page
		$title = get_field('banner_content'); // Content of the header
		if (!$banner) $banner = get_template_directory_uri() . '/src/images/default.jpg'; // Default Banner Image

		if (is_front_page()) {
			$class = 'home-header'; // Class for Homepage Header
		} else {
			$class = 'inner-header'; // Class for Inner Header
		}
		if (!$title) $title = '<h1>' . get_the_title() . '</h1>';
		if ( (is_single()) || (is_home()) ) { // BLOG, id number is supplied e.g. 22
			$title = "<h1>" . get_the_title(22). "</h1>";
			$banner = get_field('banner_image', '22');
		}
		if ( is_archive() ) $title = "<h1>" . get_the_archive_title() . "</h1>"; // Archive
		if ( is_404() ) $title = "<h1> 404. error</h1>"; // 404 Error Title
		if ( is_search() ) $title = "<h1> Search Results</h1>"; // Search Result Title

		$bg = 'style="background-image: url(' . $banner . ')"';

		if ( !is_page_template() && !is_front_page() ) $darkNav = 'dark-nav';
	?>
	<!-- NAVIGATION -->
		<div class="container mobile-logo">
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="<?= site_url(); ?>">
						<img src="wp-content/themes/aurelia/src/svg/logo.svg"  title="" />
					</a>
					<div class="mobile-contact-container">
						<a href="tel:2873542">+632 8 AURELIA (8 287 – 3542)</a>
						<br/>
						<a href="mailto:sales@aureliaresidences.com">sales@aureliaresidences.com</a>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="nav-container <?php echo $darkNav; ?>">
			<div class="contact-container">
				<a href="tel:2873542">+632 8 AURELIA (8 287 – 3542)</a>
				<span>|</span> 
				<a href="mailto:sales@aureliaresidences.com">sales@aureliaresidences.com</a>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'header-menu' ) ); ?>
			</nav>
		</div>
		
		<?php if ( is_page_template() || is_front_page()) : ?>
		<div class="banner <?php echo $class; ?>">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 align-self-center text-center">
						<?php echo $title; ?>
					</div>
				</div>
			</div>
			<span class="banner-img" <?= ($bg) ? $bg : ''; ?>>
				<?php if (is_front_page()) : ?>
					<div class="text-center"><span class="scroll-down">SCROLL DOWN</span></div>
				<?php endif; ?>
			</span>
			<?php if (!is_front_page()) : ?>
				<div class="overlay"></div>
			<?php endif; ?>
		</div>
		<?php else : ?>
		<div class="container white-bg">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<?php endif; ?>

<?php endif; ?>
