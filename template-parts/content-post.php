<?php
/**
 * Template part for displaying post content in single.php
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
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<div class="post__date"><?php echo get_the_date(); ?></div>
					</header><!-- .entry-header -->
				
					<div class="entry-content p-50">
						<?php
						
						alegria_grande_post_thumbnail();
						
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
