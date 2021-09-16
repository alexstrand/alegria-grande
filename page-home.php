<?php
/**
 * Template Name: Home
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alegria_Grande
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php get_template_part( 'template-parts/home-hero' ); ?>
		<?php get_template_part( 'template-parts/latest-posts' ); ?>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
