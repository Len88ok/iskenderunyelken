<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section class="page-heading">
	<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
		<div class="col-md-6 px-0">
			<h1 class="display-4 font-italic"><?php single_cat_title(); ?></h1>
			<div class="page-heading-decor">
				<span class="fi1 flaticon-waves"></span>
				<span class="fi1 flaticon-waves"></span>
				<span class="fi1 flaticon-waves"></span>
			</div>
		</div>
	</div>
</section>

<section id="primary" class="page-heading-after p-5">
	<div class="container">
		<div class="after-heading p-5">
			<?php
			if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/news', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</div>
	</div>
</section><!-- #primary -->

<?php
get_footer();
