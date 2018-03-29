<?php
/*
Template Name: Athlets
*/
get_header();
?>
<section class="page-heading athlets">
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
		<div class="after-heading text-center">
			<?php if( have_rows('athlet_teams') ): ?>
	    	<?php while( have_rows('athlet_teams') ): the_row(); ?>
    		<?php
        	$athletteam = get_sub_field('athlets_team_name');           	
        ?>
	  		<h3 class="text-primary title-boat"><?php echo $athletteam; ?></h3>
					<div class="row">
						<?php if( have_rows('athlet_list') ): ?>
			      	<?php while( have_rows('athlet_list') ): the_row(); ?>
			      		<?php
		            	$athletphoto = get_sub_field('athlet_photo');
		            	$athletschool = get_sub_field('athlet_school');
		            	$athletstart = get_sub_field('athlet_start');
		            	$athletheight = get_sub_field('athlet_height');
		            	$athletweight = get_sub_field('athlet_weight');
		            	$athletclass = get_sub_field('athlet_class');
		            	$athletnumber = get_sub_field('athlet_number');		            	
		            	$athletname = get_sub_field('athlet_name');
		            	$athletage = get_sub_field('athlet_age');            	
		            ?>
								<div class="col-12 col-md-6 col-lg-3 mb-3">
									<div class="card bg-primary box-shadow mx-auto">
										<div class="athlet-photo">
											<img class="card-img-top" src="<?php echo $athletphoto['url']; ?>" alt="<?php echo $athletphoto['alt']; ?>">
											<ul class="text-light m-0 athlet-info pt-4 px-2 text-left">
												<li class="pb-2 text-uppercase mb-2 text-center"><h5 class="text-uppercase">Sporcu Bilgisi</h5></li>
												<li class="pb-2 text-uppercase "><span class="font-bold">OKULU:</span> <?php echo $athletschool; ?></li>
												<li class="pb-2 text-uppercase"><span class="font-bold">YELKENE BAŞLAMA YILI:</span> <?php echo $athletstart; ?></li>
												<li class="pb-2 text-uppercase"><span class="font-bold">BOY:</span> <?php echo $athletheight; ?></li>
												<li class="pb-2 text-uppercase"><span class="font-bold">KİLO:</span> <?php echo $athletweight; ?></li>
												<li class="pb-2 text-uppercase"><span class="font-bold">SINIFI: </span> <?php echo $athletclass; ?></li>
												<li class="pb-2 text-uppercase"><span class="font-bold">YELKEN NO:</span> <?php echo $athletnumber; ?></li>
											</ul>
										</div>
										<div class="card-body p-1 text-center">
											<div class="athlet-about">
												<h5 class="text-light p-0 m-0"><?php echo $athletname; ?></h5>
												<span><?php echo $athletage; ?></span>
											</div>
										</div>
									</div>
								</div>							
						<?php endwhile; ?>
	    		<?php endif; ?>
	    		</div>
				<?php endwhile; ?>
			<?php endif; ?>										
		</div>
	</div>
</section>
<?php
get_footer();