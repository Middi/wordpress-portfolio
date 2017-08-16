<section id="portfolio">
    <h3>Projects</h3>
    <div class="card-container">


    <?php query_posts( 'posts_per_page=3' ); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="outer">
                <div class="target">
                    <div class="card">
                        <div class="front">

                            <div class="thumbnail" <?php
                            if ( $id = get_post_thumbnail_id() ) {
                                if ( $src = wp_get_attachment_url($id) )
                                printf( ' style="background-image: url(%s);"', $src );
                            } 
                            ?>>
                            
                            </div>

                            <h5><?php the_title(); ?></h5>
                            <?php the_excerpt('Read More'); ?>
                            <a href="<?php the_field('link'); ?>"  class="btn  btn-front hide-desk">View Site</a>
                        </div>
                        
                        <div class="back">
                            <h5><?php the_title(); ?></h5>
                            <hr>
                            <?php the_content(); ?>
                            <a href="<?php the_field('link'); ?>" class="btn btn-small">View Site</a>
                        </div>
                    </div>
                </div>
            </div>
    

    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_query(); ?>


        <a href="http://github.com/middi" class="btn">View More</a>

    </div>
</section>