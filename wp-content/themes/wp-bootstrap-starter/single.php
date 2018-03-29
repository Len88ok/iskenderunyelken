<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

 

<section class="page-heading-after p-5">
	<div class="container">
		<div class="after-heading article">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/news', get_post_format() );

			endwhile; // End of the loop.
			?>
			<a href="http://yelken-hatay.com/category/haber/" class="btn btn-outline-primary m-2">Watch all news</a>

		</div>
	</div>
</section>

<?php
get_footer();
