<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alegria_Grande
 */

?>

<div class="container-fluid">
	<div class="row">
		
		<div class="container content__wrapper p-100">
			<div class="row">
				
				<article id="post-<?php the_ID(); ?>" class="post-id-<?php echo get_the_ID(); ?> col-12">
					<header class="entry-header p-50">
						<?php 
						
						if ( get_field('custom_page_headline') ) :
							echo '<h1 class="entry-title">' . get_field('custom_page_headline') . '</h1>';
						else :
							the_title( '<h1 class="entry-title">', '</h1>' ); 
						endif;	
						?>
					</header><!-- .entry-header -->
				
					<?php alegria_grande_post_thumbnail(); ?>
				
					<div class="entry-content">
						<?php
						the_content();
				
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alegria-grande' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->
				
				</article><!-- #post-<?php the_ID(); ?> -->
				
			</div>
		</div>
		
	</div>
</div>
