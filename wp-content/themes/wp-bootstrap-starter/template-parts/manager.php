<?php
/*
Template Name: Manager
*/
get_header();
?>
<section class="page-heading managment">
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

<section class="managment-block page-heading-after">
	<div class="container">
		<div class="after-heading">
	    <h2 class="title text-center mb-5"><strong><?php the_field('managment_subtitle'); ?></strong></h2>

			<div class="row">
				<div class="col-lg-5">
					<div class="bg-primary py-3 px-3 pt-md-5 py-md-5 text-center overflow-hidden ">
		        <div class="manager-profile">
		          <h2 class="manager-name"><?php the_field('managment_name'); ?></h2>
		          <p class="lead manager-position"><?php the_field('managment_position'); ?></p>
		        </div>
		        <div class="manager-info bg-light box-shadow mx-auto pb-3">
		        	<div class="manager-photo">		        		
								<img src="<?php the_field('manager_photo'); ?>" alt="<?php the_field('manager_photo'); ?>">	
		        	</div>
		        	<div class="manager-about">
	          		<h3 class="title">Ilginç gerçekler</h3>
								<ul class="text-left">											
									<?php if( have_rows('manager_facts') ): ?>
						        <?php while( have_rows('manager_facts') ): the_row(); ?>
						           <?php
						            $managerfact = get_sub_field('manager_fact');
						            ?>
						            <li><?php echo $managerfact; ?></li>
						        <?php endwhile; ?>
						    	<?php endif; ?>
								</ul>
		        	</div>	
		        </div>
	      	</div>
				</div>
				<div class="col-lg-7">
					<div class="managment-info-wrap text-center">
						<div class="managment-info p-2 p-md-3 mb-2">
							<div class="managment-icon mx-auto">
								<svg id="question" viewBox="0 0 496.158 496.158" width="100%" height="100%"><title>question</title><path style="fill:#25B7D3;" d="M496.158,248.085c0-137.022-111.069-248.082-248.075-248.082C111.07,0.003,0,111.063,0,248.085 c0,137.001,111.07,248.07,248.083,248.07C385.089,496.155,496.158,385.086,496.158,248.085z"></path><path style="fill:#FFFFFF;" d="M138.216,173.592c0-13.915,4.467-28.015,13.403-42.297c8.933-14.282,21.973-26.11,39.111-35.486 c17.139-9.373,37.134-14.062,59.985-14.062c21.238,0,39.99,3.921,56.25,11.755c16.26,7.838,28.818,18.495,37.683,31.97 c8.861,13.479,13.293,28.125,13.293,43.945c0,12.452-2.527,23.367-7.581,32.739c-5.054,9.376-11.062,17.469-18.018,24.279 c-6.959,6.812-19.446,18.275-37.463,34.388c-4.981,4.542-8.975,8.535-11.975,11.976c-3.004,3.443-5.239,6.592-6.702,9.447 c-1.466,2.857-2.603,5.713-3.406,8.57c-0.807,2.855-2.015,7.875-3.625,15.051c-2.784,15.236-11.501,22.852-26.147,22.852 c-7.618,0-14.028-2.489-19.226-7.471c-5.201-4.979-7.8-12.377-7.8-22.192c0-12.305,1.902-22.962,5.713-31.97 c3.808-9.01,8.861-16.92,15.161-23.73c6.296-6.812,14.794-14.904,25.488-24.28c9.373-8.202,16.15-14.392,20.325-18.567 c4.175-4.175,7.69-8.823,10.547-13.953c2.856-5.126,4.285-10.691,4.285-16.699c0-11.718-4.36-21.605-13.074-29.663 c-8.717-8.054-19.961-12.085-33.728-12.085c-16.116,0-27.981,4.065-35.596,12.195c-7.618,8.13-14.062,20.105-19.336,35.925 c-4.981,16.555-14.43,24.829-28.345,24.829c-8.206,0-15.127-2.891-20.764-8.679C141.035,186.593,138.216,180.331,138.216,173.592z M245.442,414.412c-8.937,0-16.737-2.895-23.401-8.68c-6.667-5.784-9.998-13.877-9.998-24.279c0-9.229,3.22-16.991,9.668-23.291 c6.444-6.297,14.354-9.448,23.73-9.448c9.229,0,16.991,3.151,23.291,9.448c6.296,6.3,9.448,14.062,9.448,23.291 c0,10.255-3.296,18.312-9.888,24.17C261.7,411.481,254.084,414.412,245.442,414.412z"></path></svg>
							</div>
							<div class="managment-heading">
								<h3 class="text-primary">Neden yelken?</h3>
							</div>
							<div class="managment-text">
								<?php the_field('managment_why'); ?>
							</div>
						</div>

						<div class="managment-info p-2 p-md-3 mb-2">
							<div class="managment-icon mx-auto">
								<svg id="next" viewBox="0 0 496.158 496.158" width="100%" height="100%"><title>next</title><path style="fill:#25B7D3;" d="M496.158,248.085c0-137.021-111.07-248.082-248.076-248.082C111.07,0.003,0,111.063,0,248.085 c0,137.002,111.07,248.07,248.083,248.07C385.088,496.155,496.158,385.087,496.158,248.085z"></path><g> <path style="fill:#FFFFFF;" d="M400.884,237.559l-141.185-86.691c-3.854-2.367-8.927-2.471-12.873-0.262 c-4.018,2.248-6.513,6.504-6.513,11.106v172.7c0,4.596,2.487,8.848,6.493,11.097c1.899,1.068,4.056,1.63,6.234,1.63 c2.338,0,4.627-0.642,6.621-1.855l141.184-86.01c3.758-2.289,6.098-6.445,6.105-10.846 C406.958,244.026,404.634,239.86,400.884,237.559z"></path> <path style="fill:#FFFFFF;" d="M335.583,221.572H101.256c-6.655,0-12.048,5.396-12.048,12.048v28.916 c0,6.654,5.393,12.047,12.048,12.047h234.328c6.654,0,12.047-5.393,12.047-12.047V233.62 C347.631,226.968,342.237,221.572,335.583,221.572z"></path> </g></svg>
							</div>
							<div class="managment-heading">
								<h3 class="text-primary">Gelecek için planlar</h3>
							</div>
							<div class="managment-text">
								<?php the_field('managment_plans'); ?>
							</div>
						</div>

						<div class="managment-info p-2 p-md-3 mb-2">
							<div class="managment-icon mx-auto">
								<svg id="link" viewBox="0 0 496.158 496.158" width="100%" height="100%"><title>link</title><path style="fill:#25B7D3;" d="M0,248.085C0,111.064,111.07,0.003,248.076,0.003c137.012,0,248.082,111.061,248.082,248.082 c0,137.002-111.07,248.07-248.082,248.07C111.07,496.155,0,385.087,0,248.085z"></path><g> <path style="fill:#FFFFFF;" d="M394.463,151.309l-49.615-49.614c-10.727-10.728-28.119-10.726-38.844,0l-76.631,76.63 c-10.726,10.728-10.727,28.119-0.001,38.847l49.615,49.614c10.727,10.727,28.119,10.726,38.845-0.002l76.631-76.63 C405.188,179.429,405.189,162.036,394.463,151.309z M312.59,235.423c-6.289,6.288-16.484,6.289-22.772,0.001l-29.084-29.084 c-6.288-6.288-6.287-16.483,0.001-22.772l50.511-50.511c6.287-6.287,16.482-6.288,22.771,0l29.084,29.085 c6.288,6.287,6.287,16.482,0,22.77L312.59,235.423z"></path> <path style="fill:#FFFFFF;" d="M266.786,278.986l-49.614-49.614c-10.727-10.727-28.119-10.726-38.845,0l-76.631,76.632 c-10.726,10.726-10.727,28.118,0,38.844l49.615,49.615c10.726,10.727,28.119,10.725,38.844,0l76.632-76.633 C277.511,307.105,277.513,289.713,266.786,278.986z M184.912,363.1c-6.288,6.288-16.482,6.29-22.771,0.001l-29.084-29.084 c-6.289-6.288-6.288-16.483,0-22.771l50.512-50.512c6.287-6.287,16.482-6.288,22.771,0l29.084,29.084 c6.288,6.289,6.287,16.484,0,22.771L184.912,363.1z"></path> </g><path style="fill:#48A1AF;" d="M306.907,191.673l-2.42-2.421c-7.742-7.743-20.34-7.743-28.083,0l-87.151,87.151 c-7.742,7.742-7.742,20.34,0,28.082l2.42,2.421c7.742,7.741,20.34,7.741,28.083,0l87.151-87.152 C314.649,212.013,314.649,199.414,306.907,191.673z"></path><path style="fill:#FFFFFF;" d="M215.398,302.548c-5.348,5.348-14.02,5.349-19.368,0.001l-2.421-2.421 c-5.348-5.348-5.348-14.02,0-19.367l87.152-87.152c5.348-5.349,14.019-5.348,19.368,0.002l2.42,2.42 c5.347,5.348,5.349,14.019,0,19.366L215.398,302.548z"></path></svg>
							</div>
							<div class="managment-heading">
								<h3 class="text-primary">Yönetici irtibatları</h3>
							</div>
							<div class="managment-text">
							Üyelik ve ilginç tekliflerle ilgili sorularınız için bizimle iletişime geçmekten çekinmeyin. 
								<ul class="managment-contacts">
									<li class="managment-phone"><?php the_field('managment_phone'); ?></li>
									<li class="managment-email"><a href="<?php the_field('managment_email'); ?>"><?php the_field('managment_email'); ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();