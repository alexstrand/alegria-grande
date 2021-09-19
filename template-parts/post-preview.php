<a class="col-12 col-md-6 col-lg-4 post" href="<?php echo esc_url(get_the_permalink(get_the_ID())); ?>" title="<?php echo get_the_title(get_the_ID()); ?>">
    <div class="featured-image__container">
        <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(),'large')); ?>" alt="Temp alt" class="post__featured-image"/>
    </div>
    <div class="post__info">
        <div class="post__date"><?php echo get_the_date(); ?></div>
        <h3 class="post__title"><?php echo get_the_title(get_the_id()); ?></h3>
        <div class="post__excerpt"><?php echo wp_trim_words( get_the_excerpt(), $num_words = 25 ); ?></div>
        <p class="post__link">Read more »</p>
    </div>
</a>