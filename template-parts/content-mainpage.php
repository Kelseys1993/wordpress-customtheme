<?php

$home_title= get_field('home_title');
$home_body= get_field('home_body');
$image_one = get_field('image_one');
$image_two = get_field('image_two')



  ?>

<div class='main-page1'>
	<div class="container">
        <div class="row">

 			<div class="col-lg-8 col-xs-12">
				<h2><?php echo $home_title ?></h2>
				<div class='body'>
				<?php echo $home_body ?>
				</div>
	</div>


		<div class='about-sidebar col-lg-4 col-xs-12 '>
			<div id='image1'>
					<img src="<?php 	echo $image_one['url']; ?>" alt="<?php 	echo $image_one['alt'] ?>">	
			</div>
			<div id='image2'>
				<img src="<?php 	echo $image_two['url']; ?>" alt="<?php 	echo $image_two['alt'] ?>">
			</div>
			
		</div>

		</div> <!-- row -->
	</div> <!-- container -->
</div> <!-- mainpage -->

