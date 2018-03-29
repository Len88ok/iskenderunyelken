<?php
/*
Template Name: Courses
*/
get_header();
?>
<section class="page-heading courses">
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
<section class="courses-block page-heading-after">
<div class="container">
	<div class="after-heading">
		<h2 class="title text-center mb-4"><strong><?php the_field('courses_subtitle'); ?></strong></h2>
		<div class="courses-main">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
					<h3 class="courses-main-title py-0 py-mb-4">
					Dönem
					</h3>
					<div class="courses-main-description">
						<?php the_field('courses_period'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
					<h3 class="courses-main-title py-0 py-mb-4">
					Konum
					</h3>
					<div class="courses-main-description">
						<?php the_field('courses_location'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
					<h3 class="courses-main-title py-0 py-mb-4">
					Asgari yaş
					</h3>
					<div class="courses-main-description">
						<?php the_field('courses_age'); ?>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
					<h3 class="courses-main-title py-0 py-mb-4">
					Gruplar
					</h3>
					<div class="courses-main-description">
						<?php the_field('courses_group'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="courses-info">
			<div class="row my-5">
				<div class="col-lg-7 col-md-12">					
					<div class="courses-description"><?php the_field('courses_desc1'); ?></div>
					<div class="courses-steps text-center">
						<p class="courses-description mb-4 text-left">Sonraki program dahil olmak üzere eğitim:</p>
						<div class="row">
						  <?php if( have_rows('courses_steps') ): ?>
				        <?php while( have_rows('courses_steps') ): the_row(); ?>		
				        <?php
		            	$coursesstepindex = get_sub_field('courses_step_index');
		            	$coursesstep = get_sub_field('courses_step');
		            ?>		           
				            <div class="col-sm-4 step-item">
											<div class="courses-step-wrap mb-4 mb-md-0">
												<i class="courses-mark-devider d-none d-sm-block text-primary">&#8594;</i>
												<span class="courses-mark border border-primary rounded-circle d-block mx-auto mb-3"><?php echo $coursesstepindex; ?></span>
												<div class="courses-mark-caption text-uppercase"><?php echo $coursesstep; ?></div>
											</div>
										</div>
				        <?php endwhile; ?>
				    	<?php endif; ?>
						</div>
					</div>
					<div class="courses-description"><?php the_field('courses_desc2'); ?></div>
				</div>
				<div class="col-lg-5 col-md-12">
        	<div class="courses-slider">
				  	<?php if( have_rows('courses_slider') ): ?>
		        	<?php while( have_rows('courses_slider') ): the_row(); ?>
		           <?php
		            $coursesimage = get_sub_field('courses_img');
		            ?>
		            <div class="courses-slider-item">
										<img src="<?php echo $coursesimage['url']; ?>" alt="<?php echo $coursesimage['alt']; ?>" />
								</div>
		        	<?php endwhile; ?>
		    		<?php endif; ?>
		    	</div>
				</div>
			</div>
		</div>
		<div class="courses-equipment text-center">
			<div class="row">
				<div class="col-12 col-md-6 my-2 my-md-0">
					<div class="courses-equipment-club bg-primary p-4">
						<div class="courses-equipment-icon rounded-circle d-block mx-auto mb-3 bg-white">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 401.625 401.625" style="enable-background:new 0 0 401.625 401.625;" xml:space="preserve">
								<g>
									<g>
										<path d="M153,172.125c0-86.062,19.125-153,19.125-153s-57.375,9.562-114.75,105.188S0,286.875,0,286.875h172.125    C172.125,286.875,153,258.188,153,172.125z" fill="#87C2D4"/>
										<polygon points="229.5,114.75 229.5,286.875 401.625,286.875   " fill="#87C2D4"/>
											<path d="M210.375,306V19.125H191.25V306H1.913H0c0,42.075,34.425,76.5,76.5,76.5h248.625c42.075,0,76.5-34.425,76.5-76.5h-1.912    H210.375z" fill="#87C2D4"/>
										</g>
									</g>
								</svg>
							</div>
							<h3 class="text-white">Bizden</h3>
							<ul>
								<?php if( have_rows('courses_our_equipment') ): ?>
		        			<?php while( have_rows('courses_our_equipment') ): the_row(); ?>
		        				<?php
		        				 	$ourequipment = get_sub_field('our_equipment');
		        				 ?>
										<li><?php echo $ourequipment; ?></li>
							    <?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="col-12 col-md-6 my-2 my-md-0">
						<div class="courses-equipment-athlet bg-primary p-4">
							<div class="courses-equipment-icon rounded-circle d-block mx-auto mb-3 bg-white">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve" width="512px" height="512px">
									<g>
										<path d="M436.715,91.015l-5.268-34.353c-0.178-1.156-1.173-2.01-2.342-2.01H60.896c-1.17,0-2.164,0.854-2.342,2.01l-5.269,34.353   c-0.104,0.683,0.094,1.378,0.544,1.902c0.45,0.524,1.107,0.826,1.798,0.826h378.744c0.691,0,1.349-0.302,1.798-0.826   C436.62,92.393,436.818,91.698,436.715,91.015z" fill="#87C2D4"/>
										<path d="M489.955,430.915c-11.609-75.665-46.418-302.665-46.418-302.665c-0.29-1.893-1.891-3.266-3.805-3.266H254.5   c-0.454,0-0.884,0.208-1.164,0.565c-0.28,0.357-0.382,0.823-0.275,1.264c0,0,18.603,75.446,24.793,102.411   c0.804,3.501-1.308,7.02-4.799,7.865c-0.507,0.123-1.025,0.185-1.54,0.185c-3.015,0.001-5.616-2.049-6.326-4.984   c-4.686-19.361-18.749-77.445-18.749-77.445c-0.161-0.665-0.756-1.132-1.439-1.132c-0.684,0-1.278,0.468-1.439,1.132   l-18.749,77.446c-0.71,2.935-3.311,4.984-6.326,4.984c-0.515,0-1.033-0.062-1.539-0.185c-3.491-0.845-5.644-4.374-4.8-7.865   l24.794-102.411c0.107-0.441,0.005-0.907-0.275-1.264c-0.28-0.357-0.71-0.565-1.164-0.565H50.268c-1.915,0-3.516,1.374-3.806,3.266   L0.045,430.914c-0.171,1.111,0.151,2.238,0.885,3.092c0.731,0.853,1.797,1.342,2.92,1.342h192.498c1.71,0,3.192-1.101,3.686-2.739   L245,283.409l44.967,149.201c0.494,1.638,1.976,2.739,3.687,2.739h192.496c1.124,0,2.189-0.489,2.922-1.342   C489.804,433.152,490.126,432.026,489.955,430.915z" fill="#87C2D4"/>
									</g>
								</svg>
							</div>
							<h3 class="text-white">Atlet itibaren</h3>
							<ul>
								<?php if( have_rows('courses_athlet_equipment') ): ?>
		        			<?php while( have_rows('courses_athlet_equipment') ): the_row(); ?>
		        				<?php
					            $athletequipment = get_sub_field('athlet_equipment');
				            ?>
										<li><?php echo $athletequipment; ?></li>
							    <?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="courses-price p-3 my-md-5 p-md-5 mx-auto text-center">
				<div class="courses-price-amount text-primary">
					<?php the_field('courses_price'); ?>
				</div>
				<div class="courses-description"><?php the_field('courses_price_info'); ?></div>
				<div class="courses-price-discount">
					İyi bir indirim programımız var:
					<ul>
						<?php if( have_rows('courses_discount') ): ?>
        			<?php while( have_rows('courses_discount') ): the_row(); ?>
        				<?php
			            $discountnumber = get_sub_field('discount_number');
			            $discountname = get_sub_field('discount_name');
		            ?>
								<li><span class="text-primary"><?php echo $discountnumber; ?></span> <?php echo $discountname; ?></li>
					    <?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
				<?php if( have_rows('courses_notifications') ): ?>
    			<?php while( have_rows('courses_notifications') ): the_row(); ?>
    				<?php
	            $coursesnotification = get_sub_field('courses_notification');
            ?>
						<div class="courses-price-small p-0"><small>* <?php echo $coursesnotification; ?></small></div>
			    <?php endwhile; ?>
				<?php endif; ?>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-primary my-4" data-toggle="modal" data-target="#regModal">Bir ders ayırın</button>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();