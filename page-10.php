<?php 

/* Template Name: About Us */	


 ?>
 <?php get_header() ?>

 <?php 

	$about_section_title = get_field('about_section_title');
	$about_section_body = get_field('about_section_body');


  ?>
 
<div class="about-us">
      <div class="container">
        <div class="row">

 			<div class="col-md-12">
 				<h2><?php echo $about_section_title ?></h2>
 				<div class='lead'><?php echo $about_section_body ?></div>
 		
			</div>


		
		</div>
	</div>
</div>
 	
 	

 <?php get_footer() ?>