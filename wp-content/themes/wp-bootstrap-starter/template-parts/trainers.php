<?php
/*
Template Name: Trainers
*/
get_header();
?>
<section class="page-heading trainers">
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
<section class="trainers-block page-heading-after">
	<div class="container">
		<div class="after-heading">
			<h2 class="title text-center mb-5"><strong><?php the_field('trainers_subtitle'); ?></strong></h2>
			<div class="trainers-wrap">
				<div class="row">
					<?php if( have_rows('trainers_list') ): ?>
        	<?php while( have_rows('trainers_list') ): the_row(); ?>
  						<?php
	            	$trainerphoto = get_sub_field('trainer_photo');
	            	$trainername = get_sub_field('trainer_name');
	            	$trainerposition = get_sub_field('trainer_position');
	            	$trainerinfo = get_sub_field('trainer_info');
	            	$traineremail = get_sub_field('trainer_email');
	            	$trainerfb = get_sub_field('trainer_fb');
	            	$trainerln = get_sub_field('trainer_ln');
	            ?>
							<div class="col-md-4">
								<div class="card mb-4 p-4 box-shadow">
									<div class="circle-icon bg-primary rounded-circle d-block mx-auto"></div>
									<div class="trainer-photo mx-auto">
										<img class="card-img-top" src="<?php echo $trainerphoto['url']; ?>" alt="<?php echo $trainerphoto['alt']; ?>">
									</div>
									<div class="card-body">
										<div class="trainer-info text-center">
											<h4 class="text-primary"><?php echo $trainername; ?></h4>
											<span class="trainer-position"><?php echo $trainerposition; ?></span>
										</div>
										<div><?php echo $trainerinfo; ?></div>
										<div class="trainer-contacts text-center">
											<p class="text-primary">Eğitmenimiz ile iletişime geçin</p>
											<a href="<?php echo $traineremail; ?>"><?php echo $traineremail; ?></a>
											<div class="d-flex align-items-center justify-content-center">
												<a href="<?php echo $trainerfb; ?>" class="trainer-socials m-2"><span class="socials-wrap fi"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
												<a href="<?php echo $trainerln; ?>" class="trainer-socials m-2"><span class="socials-wrap fi"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
											</div>
										</div>
									</div>
								</div>
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