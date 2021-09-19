<?php
/**
 * Template Name: Blog
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

		<section id="blog" class="container-fluid p-100">
			<div class="row">
				
				<div class="container">
					
					<div class="row section__headline p-50">
	    		        <div class="col-12">
	    		            <h1>Blog & Stories headline</h1>
	    		        </div>
	    		    </div>
					
					<div id="blog_filters" class="blog__filtering row d-md-flex align-items-center p-50">
						<div class="col-12">
							<?php echo do_shortcode('[facetwp facet="post_search"]'); ?>
						</div>
						<div class="col-12 d-none">
							<?php echo do_shortcode('[facetwp facet="categories"]'); ?>
						</div>
					</div>
					
					<div class="row blog__wrapper">
						
						<?php
						// wp query for posts
						$args = [
						    'post_type' => 'post',
						    'posts_per_page' => 9,
						    'orderby' => 'date',
						    'order' => 'DESC',
						    'facetwp' => true, //facetwp
						];
						$query = new WP_Query( $args );
						
						// post loop
						if ($query->have_posts()) : 
							
							while ( $query->have_posts() ) : $query->the_post(); ?>
						        
						        <?php get_template_part( 'template-parts/post-preview' ); ?>
						
						    <?php endwhile;
						    
						endif; ?>

					</div>
					
					<div class="blog__pagination row d-md-flex align-items-center p-50">
						<div class="col-12">
							<?php echo do_shortcode('[facetwp facet="new_facet"]'); ?>
						</div>
					</div>
					
				</div>
				
			</div>
		</section><!-- #blog -->

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
