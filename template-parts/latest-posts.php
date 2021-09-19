<?php
// wp query for posts
$args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
];
$query = new WP_Query( $args );

// post loop
if ($query->have_posts()) : ?>

    <!-- Latest posts -->
    <section id="latest-posts" class="container-fluid p-100">
    	<div class="row">
    		
    		<div class="container">
    		    
    		    <div class="row section__headline p-50">
    		        <div class="col-12">
    		            <h2>Latest stories</h2>
    		        </div>
    		    </div>

                <div class="row posts__wrapper">
	
            		<?php
            		while ( $query->have_posts() ) : $query->the_post(); ?>
                        
                        <?php get_template_part( 'template-parts/post-preview' ); ?>
                            
                    <?php endwhile; ?>
            		
        		</div>

        		<div class="row p-100">
        		    <div class="col-12 align-center d-flex justify-content-center">
        		        <a href="<?php echo get_home_url(); ?>/blog" title="" class="button button-primary">All stories</a>
        		    </div>
        		</div>
        		
    		</div>	
    		
    	</div>
    </section><!-- #latest-posts -->
<?php endif; ?>

			