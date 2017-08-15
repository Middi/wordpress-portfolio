<?php
/*
    Template Name: Home Page
*/


define( 'WP_USE_THEMES', false ); get_header(); ?>


<main>

        <!--====== Jumbotron =======-->

        <?php get_template_part( 'template-parts/content', 'hero' ); ?>

         <!--====== Portfolio =======-->
        
        <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>

         <!--====== About =======-->
        
        <?php get_template_part( 'template-parts/content', 'about' ); ?>

         <!--====== Skills =======-->
        
        <?php get_template_part( 'template-parts/content', 'skills' ); ?>

         <!--====== Contact =======-->

        <?php get_template_part( 'template-parts/content', 'contact' ); ?>

</main>



<?php get_footer();
