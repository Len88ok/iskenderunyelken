<?php
/*
Template Name: History
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

<section class="history-info page-heading-after">
	<div class="container">
		<div class="after-heading">
  		<div class="history-creation">
        <div class="row">
        	<div class="col-lg-6 col-md-12">
        		<div id="history-slider">
          		<?php if( have_rows('history_slider') ): ?>
				        <?php while( have_rows('history_slider') ): the_row(); ?>
				           <?php
				            $historyimage = get_sub_field('history_img');
				            ?>
				            <div class="history-slider-item">
											<img src="<?php echo $historyimage['url']; ?>" alt="<?php echo $historyimage['alt']; ?>" />
										</div>
				        <?php endwhile; ?>
				    	<?php endif; ?>
			  		</div>
           </div>
          <div class="col-lg-5 col-md-12 ml-auto">
              <h2 class="title text-center"><strong><?php the_field('history_subtitle'); ?></strong></h2>
              <div class="history-description"><?php the_field('club_foundation'); ?></div>
              <?php if( have_rows('history_text') ): ?>
				        <?php while( have_rows('history_text') ): the_row(); ?>
				           <?php
				            $historyparagraph = get_sub_field('history_paragraph');
				            ?>
              		<?php echo $historyparagraph; ?>				            
				        <?php endwhile; ?>
				    	<?php endif; ?>
          </div>                   
        </div>
      </div>
      <div class="history-best">
      	<div class="row">
      		<div class="col-lg-3 col-md-12">
						<h3 class="history-best-title mb-0 mb-md-2">
							Services									
						</h3>
						<div class="history-best-description">
							<?php the_field('club_services'); ?>
						</div>
      		</div>
      		<div class="col-lg-3 col-md-12">
						<h3 class="history-best-title mb-0 mb-md-2">
							Established
						</h3>
						<div class="history-best-description">
							<?php the_field('club_birth'); ?>
						</div>	
      		</div>
      		<div class="col-lg-3 col-md-12">
						<h3 class="history-best-title mb-0 mb-md-2">
							Location
						</h3>
						<div class="history-best-description">
							<?php the_field('club_location'); ?>
						</div>
      		</div>
      		<div class="col-lg-3 col-md-12">
						<h3 class="history-best-title mb-0 mb-md-2">
							Employees
						</h3>
						<div class="history-best-description">
							<?php the_field('club_employees'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
