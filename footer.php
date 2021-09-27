<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alegria_Grande
 */

?>

	<footer id="colophon" class="site-footer container-fluid p-50">
		
		<div class="row">
			<div class="container">
				
				<div id="instagran__feed" class="row p-50">
					<div class="col-12">
						<?php echo do_shortcode('[instagram-feed num=4 cols=4 showfollow=false showbutton=false]'); ?>
					</div>
				</div><!-- #instagran__feed -->
				
				<div class="social__icons">
					<?php get_template_part( 'template-parts/social-icons' ); ?>
				</div>
				
				<div class="site-info row">
			
					<div class="col-12">
						© <?php echo get_bloginfo( 'name' ); ?> <?php echo do_shortcode('[year]'); ?>
					</div>
					
					<!-- Scroll to top arrow -->
					<a id="scroll-top__arrow" href="#masthead">
						<i class="fas fa-chevron-up"></i>
					</a>
			
				</div><!-- .site-info -->
			</div>
		</div>
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
