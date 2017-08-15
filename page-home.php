<?php
/*
    Template Name: Home Page
*/


define( 'WP_USE_THEMES', false ); get_header(); ?>



<main>


        <!--===========================
                   Jumbotron
        ============================-->
        <section id="hero">
            <div class="container">
                <div class="text-content">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/avatar.png" alt="">
                    <h1><?php the_field('subheading'); ?></h1>
                </div>
            </div>
        </section>


        <!--===========================
                  Portfolio
        ============================-->
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

                                    <h5><?php the_title(); ?></h5><?php the_excerpt('Read More'); ?>
                                    <a href="#" class="btn  btn-front hide-desk">View Site</a>
                                </div>
                                
                                <div class="back">
                                    <h5><?php the_title(); ?></h5>
                                    <hr>
                                    <p class="return"><?php the_content(); ?></p>
                                    
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


        <!--===========================
                    About
        ============================-->
        <section id="about">
            <div class="container">
                <h2>About Me</h2>
                <p><?php the_field('about'); ?></p>
            </div>
            <div class="button-container">
                <a href="#contact" class="btn btn-contact">Contact</a>
                
                <a href="http://rm.local:5757/wordpress-3/wp-content/uploads/2017/08/Richard-Middleton.pdf" class="btn btn-cv" target="_blank">Resume</a>
            </div>
        </section>


        <!--===========================
                    Skills
        ============================-->
        <section id="skills">
            <div class="container">
                <h2>Skills</h2>
                <p><?php the_field('skills'); ?></p>

            </div>

            <div id="carousel">

                <div class="left"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>

                <div id="skills-slider">
                    <ul class="slides">

                        <li tooltip="HTML5" class="slide">
                            <i class="devicon-html5-plain-wordmark colored"></i>
                        </li>
                        
                        <li tooltip="CSS3" class="slide">
                            <i class="devicon-css3-plain-wordmark colored"></i>
                        </li>

                        <li tooltip="Javascript" class="slide">
                            <i class="devicon-javascript-plain colored"></i>
                        </li>

                        <li tooltip="jQuery" class="slide">
                            <i class="devicon-jquery-plain-wordmark colored"></i>
                        </li>

                        <li tooltip="PHP" class="slide">
                            <i class="devicon-php-plain colored"></i>
                        </li>

                        <li tooltip="Bootstrap" class="slide">
                            <i class="devicon-bootstrap-plain devicon colored"></i>
                        </li>

                        <li tooltip="Photoshop" class="slide">
                            <i class="devicon-photoshop-plain colored"></i>
                        </li>

                        <li tooltip="GitHub" class="slide">
                            <i class="devicon-github-plain colored"></i>
                        </li>

                        <li tooltip="Sass" class="slide">
                            <i class="devicon-sass-original devicon colored"></i>
                        </li>
                        
                        <li tooltip="Node.js" class="slide">
                            <i class="devicon-nodejs-plain colored"></i>
                        </li>

                        <li tooltip="MongoDB" class="slide">
                            <i class="devicon-mongodb-plain colored"></i>
                        </li>

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


        <!--===========================
                   Contact
        ============================-->
        <section id="contact">
            <div class="container">
                <h2>Contact</h2>
                <div class="contact-container">

                    <div class="email">
                        <h4>Email</h4>
                        <p>Richard[at]richardmiddleton.me</p>
                    </div>
                    <div class="location">
                        <h4>Location</h4>
                        <p>Leeds, U.K</p>
                    </div>

                </div>
            </div>
        </section>

    </main>



<?php get_footer();
