<?php
// wp query for posts
$args = [
    'post_type' => 'post',
    'posts_per_page' => 4,
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

                <div class="row latest-posts__wrapper">
	
            		<?php
            		while ( $query->have_posts() ) : $query->the_post(); ?>
                        
                        <article class="col-12 col-md-6 col-lg-3 post">
                            
                            <a href="<?php echo esc_url(get_the_permalink(get_the_ID())); ?>" title="<?php echo get_the_title(get_the_ID()); ?>">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'large')); ?>" alt="" class="post__featured-image"/>
                            </a>
                            
                            <a href="<?php echo esc_url(get_the_permalink(get_the_ID())); ?>" title="<?php echo get_the_title(get_the_ID()); ?>">
                                <h3 class="post__title"><?php echo get_the_title(get_the_id()); ?></h3>
                            </a>
                            
                            <a class="post__link" href="<?php echo esc_url(get_the_permalink(get_the_ID())); ?>" title="<?php echo get_the_title(get_the_ID()); ?>">Read more</a>
                            
                        </article>

                    <?php endwhile; ?>
            		
        		</div>
        		
        		<div class="row">
        		    <div class="col-12">
        		        <a href="<?php echo get_home_url(); ?>/blog" title="" class="button button-primary">More from Alegriagrande</a>
        		    </div>
        		</div>
        		
    		</div>	
    		
    	</div>
    </section><!-- #latest-posts -->
<?php endif; ?>

			