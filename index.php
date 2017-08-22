<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Portfolio
 */



 define( 'WP_USE_THEMES', false ); get_header(); ?>


<main>

	<section class="hero">

		<div class="container">
			<div class="text-content-projects">
				<a href="http://richardmiddleton.me"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/avatar.png" alt=""></a>
			</div>
		</div>
	</section>
	   
		
	<section class="portfolio">
		<h3>Projects</h3>
		<div class="card-container">


		<?php query_posts( 'posts_per_page=-1' ); ?>
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


		</div>
			<a href="http://github.com/middi" class="btn">View On Github</a>
	</section>


</main>


<?php get_footer();
