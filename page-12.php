<?php 

/* Template Name: Adoptions */	


 ?>

<?php  get_header();?>

<?php 


 ?>
<div class="adoptions-page">
	<div class="container ">
		<div class="section-header">


					<h2>Huskies Avaliable for Adoption</h2>
						
		</div>

				<div class="row">
					<?php $loop = new WP_Query(array('post_type' => 'adoptions', 'orderby' => 'post_id', 'order' => 'DESC')); ?>

				<?php while($loop->have_posts()) : $loop->the_post(); ?>
					
						<div class="col-md-4">
					
						<h3><?php the_field('husky_name') ?></h3>

						<?php if( get_field('husky_image') ){ ?>
						 <img src="<?php the_field('husky_image'); ?>" />		<?php }; ?>
						 <div class="husky-details">
						<p class='husky-age'>
							Age: <?php the_field('husky_age') ?>
						</p>
						
						<p class='husky-needs'>
							<?php the_field('husky_needs') ?>
						</p>
						<p class='husky-personality'>
							<?php the_field('husky_personality')?>
						</p>
						</div>


					</div><!-- end col -->
	

					<?php endwhile;wp_reset_query(); ?>

	
				</div><!-- row -->

	</div>
</div>


<?php  get_footer(); ?>