<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alegria_Grande
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-K9BR6NY1WT"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-K9BR6NY1WT');
	</script>

	<meta name="ahrefs-site-verification" content="9349a54deda410e50c76ae1a002aa0791ab9b3fa7fc1650c3d7d7c948845b26d">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,600;1,300&family=Over+the+Rainbow&family=Poppins:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
	<link href="/wp-content/themes/alegria-grande/inc/css/hamburgers.min.css" rel="stylesheet">
	
	<?php wp_head(); ?>
	
	<script> // Facet WP auto scroll to top after pagination
	(function($) {
	    $(document).on('facetwp-loaded', function() {
	        if (FWP.loaded) {
	            $('html, body').animate({
	                scrollTop: $('#blog_filters').offset().top
	            }, 500);
	        }
	    });
	})(jQuery);
	</script>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alegria-grande' ); ?></a>

	<header id="masthead" class="site-header d-flex justify-content-between align-items-center">
		<div class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="row d-flex justify-content-between align-items-center">
						
						<div class="site-branding col-10 col-lg-4">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							?>
						</div><!-- .site-branding -->
				
						<div class=" col-2 col-lg-8 d-flex justify-content-end align-items-center">
							<nav id="site-navigation" class="main-navigation">
								<button id="hamburger-toggle" class="hamburger hamburger--squeeze menu-toggle d-block d-lg-none" aria-expanded="false" type="button">
								  <span class="hamburger-box">
								    <span class="hamburger-inner"></span>
								  </span>
								</button>
								
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'hamburger-menu',
										'menu_class'	 => 'd-flex flex-column align-items-center justify-content-center',
									)
								);
								?>
								
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'	 => 'd-none d-lg-flex justify-content-end',
									)
								);
								?>
							</nav><!-- #site-navigation -->
							
							<div class="social__icons d-none d-lg-block">
								<?php get_template_part( 'template-parts/social-icons' ); ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
