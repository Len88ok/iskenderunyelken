<?php
/*
Template Name: Gallery
*/
get_header();
?>
<section class="page-heading gallery">
	<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="background-image: url(<?php the_field('background_image'); ?>);">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
      <div class="page-heading-decor">
      	<span class="fi1 flaticon-waves"></span>
      	<span class="fi1 flaticon-waves"></span>
      	<span class="fi1 flaticon-waves"></span>
      </div>
    </div>
  </div>
</section>  

<section class="athlets-block page-heading-after">
	<div class="container">
		<div class="after-heading p-0">
			<div class="tz-gallery">
				<div class="row p-0 m-0">
					<?php if( have_rows('gallery_photos') ): ?>
				    <?php while( have_rows('gallery_photos') ): the_row(); ?>
				       <?php
				        $galleryimage = get_sub_field('gallery_photo');
				        ?>
				        <div class="col-sm-12 col-md-4">
						        <a class="lightbox" href="<?php echo $galleryimage['url']; ?>">
											<img src="<?php echo $galleryimage['url']; ?>" alt="<?php echo $galleryimage['alt']; ?>" />	
						        </a>
						    </div>
				    <?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();