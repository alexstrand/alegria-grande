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
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
				
					<?php if ( get_edit_post_link() ) : ?>
						<footer class="entry-footer">
							<?php
							edit_post_link(
								sprintf(
									wp_kses(
										/* translators: %s: Name of current post. Only visible to screen readers */
										__( 'Edit <span class="screen-reader-text">%s</span>', 'alegria-grande' ),
										array(
											'span' => array(
												'class' => array(),
											),
										)
									),
									wp_kses_post( get_the_title() )
								),
								'<span class="edit-link">',
								'</span>'
							);
							?>
						</footer><!-- .entry-footer -->
					<?php endif; ?>
				</article><!-- #post-<?php the_ID(); ?> -->
				
			</div>
		</div>
		
	</div>
</div>
