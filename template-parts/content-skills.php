<section id="skills">
    <div class="container">
        <h2>Skills</h2>
        <p><?php the_field('skills'); ?></p>

    </div>

    <div id="carousel">

        <div class="left"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>

        <div id="skills-slider">
            <ul class="slides">

            <?php $loop = new WP_Query( array( 'post_type' => 'skills_slider', 'posts_per_page' => '-1', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

            <?php while($loop->have_posts()) : $loop->the_post(); ?>

                <li tooltip="<?php the_title(); ?>" class="slide">
                    <i class="<?php the_field('skill') ?>"></i>
                </li>
                
            <?php endwhile; ?>
                            
            <li tooltip="Sketch" class="slide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="58px" version="1.1" viewBox="0 0 26 24">
                        <path fill-rule="evenodd" fill="#EAAC29" d="m22.317 1.9817l3.683 4.2935-13 17.725-13-17.725 3.6833-4.2933 4.6584-1.9817h9.3163l4.659 1.9817zm-13.217 15.258l-3.4667-6.363-2.73-2.0697 6.1967 8.4327zm10.162-6.231h-12.567l6.283 11.516 6.284-11.516zm-2.405 6.231l3.466-6.363 2.73-2.0697-6.196 8.4327zm-11.029-7.3097l-4.745-3.611 2.8817-3.3688 4.095 2.0036-2.2317 4.9762zm3.0334-4.6459l-2.1667 4.8436h12.567l-2.167-4.8436h-8.2333zm11.266 4.6459l4.745-3.611-2.881-3.3688-4.095 2.0036 2.231 4.9762zm-3.033-5.5266h-8.2333l-3.9867-1.9817 3.6183-1.5413 8.9697 0.00003 3.619 1.5413-3.987 1.9817z"
                        />
                    </svg>
                </li>
                
            </ul>
        </div>

        <div class="right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

    </div>
</section>