<?php
/*
Template Name: Success
*/
get_header();
?>
<section class="page-heading history">
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
   

<section class="success-info page-heading-after">
	<div class="container">
		<div class="after-heading">
      <h2 class="title text-center mb-5"><strong><?php the_field('success_subtitle'); ?></strong></h2>
			<?php if( have_rows('champions_success') ): ?>
        <?php while( have_rows('champions_success') ): the_row(); ?>
           
        
				<div class="row p-md-3">
					<div class="col-lg-6 p-0">
	  				<div class="success-profile p-5">
	  					<div class="success-img">
	  						<?php
		            	$champphoto = get_sub_field('champ_photo');
		            	$champname = get_sub_field('champ_name');
		            	$champbirth = get_sub_field('champ_birth');
		            	$champinfo = get_sub_field('champ_info');
		            ?>
								<img class="rounded-circle" src="<?php echo $champphoto['url']; ?>" alt="<?php echo $champphoto['alt']; ?>" />
	  					</div>		
	  					<div class="success-name text-center">
	  						<h3><?php echo $champname; ?></h3>
	  					</div>	
	  					<div class="success-age text-center"><?php echo $champbirth; ?></div>
	  					<div class="py-3"><?php echo $champinfo; ?></div>
		            	<h4>Achievments</h4>					            
			            <ul class="success-list">
			            	<?php if( have_rows('champ_achievments') ): ?>
							        <?php while( have_rows('champ_achievments') ): the_row(); ?>
							           <?php
							            $champachievment = get_sub_field('champ_achievment');
							            ?>
							            <li class="success-item"><?php echo $champachievment; ?></li>
							        <?php endwhile; ?>
							    	<?php endif; ?>
			            </ul>
	  				</div>
					</div>
					<div class="col-lg-6 p-0">
	  				<div class="success-slider-wrap p-5">	
							<div class="success-slider-for">
							  <?php if( have_rows('success_slider') ): ?>
					        <?php while( have_rows('success_slider') ): the_row(); ?>
					           <?php
					            $successimage = get_sub_field('success_img');
					            ?>
					            <div class="success-slider-large">
												<img src="<?php echo $successimage['url']; ?>" alt="<?php echo $successimage['alt']; ?>" />
											</div>
					        <?php endwhile; ?>
					    	<?php endif; ?>
							</div>						
							<div class="success-slider-nav">
							  <?php if( have_rows('success_slider') ): ?>
					        <?php while( have_rows('success_slider') ): the_row(); ?>
					           <?php
					            $successimage = get_sub_field('success_img');
					            ?>
					            <div class="success-slider-small">
												<img src="<?php echo $successimage['url']; ?>" alt="<?php echo $successimage['alt']; ?>" />
											</div>
					        <?php endwhile; ?>
					    	<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
    	<?php endif; ?>
		</div>
	</div>
</section>
<?php
get_footer();

