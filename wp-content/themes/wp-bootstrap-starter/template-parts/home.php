
<?php
/*
Template Name: Homepage
*/
get_header();
?>

<section class="main-slider-section">
	<div id="main-slider">
	<?php if( have_rows('main_slider') ): ?>
        <?php while( have_rows('main_slider') ): the_row(); ?>
           <?php
            $mainimage = get_sub_field('main-img');
            $maintitle = get_sub_field('main-caption');
            $mainbtn = get_sub_field('main-button');
            $mainlink = get_sub_field('main-link');
            ?>
            <div class="main-slider-item">
							<img src="<?php echo $mainimage['url']; ?>" alt="<?php echo $mainimage['alt']; ?>" />
							<div class="container">
								<div class="main-slider-caption">
									<h1><?php echo $maintitle; ?></h1>
									<p><a class="btn btn-lg btn-light" href="<?php echo $mainlink; ?>" role="button"><?php echo $mainbtn; ?></a></p>
								</div>
							</div>
						</div>
        <?php endwhile; ?>
    <?php endif; ?>
	</div>
</section>

<section class="important-information text-center">
	<h3 class="text-primary">Kulüp duyurdu</h3>
	<?php if( have_rows('main_info_list') ): ?>
        <?php while( have_rows('main_info_list') ): the_row(); ?>
           <?php
	            $mainheading = get_sub_field('main_heading');
	            $maininfo = get_sub_field('main_info');
            ?>
						<div class="container py-3">
								<h4><?php echo $mainheading; ?></h4>
								<?php echo $maininfo; ?>
						</div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="news-section">
	<div class="container">
		<div class="row mb-2">

			 <?php
			 $pc = new WP_Query('cat=5&orderby=date&posts_per_page=4'); ?>
			 <?php while ($pc->have_posts()) : $pc->the_post(); ?>
			 	<div class="col-md-12 col-lg-6">
					<div class="card flex-md-row mb-4 box-shadow h-md-250">
						<div class="news-img bg-primary d-none d-md-block">
							<?php echo get_the_post_thumbnail() ?>
						</div>
						<div class="card-body d-flex flex-column align-items-start">
							<strong class="d-inline-block mb-2 text-secodary"><?php the_tags('Tags: '); ?></strong>
							<h3 class="mb-0">
								<a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
							<div class="mb-1 text-muted"><?php the_time('d-m-y') ?></div>
							<div class="card-text mb-auto"><?php the_excerpt (''); ?></div>
							<a href="http://iskenderunyelken.org/category/haber/" class="btn btn-outline-primary m-2">Continue reading</a>
						</div>
					</div>
				</div>
			 <?php endwhile; ?>

		</div>
	</div>
</section>

<?php
get_footer();
