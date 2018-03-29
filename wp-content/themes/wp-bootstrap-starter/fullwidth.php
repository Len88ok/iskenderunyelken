<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

	</section><!-- #primary -->

<?php
get_footer();
