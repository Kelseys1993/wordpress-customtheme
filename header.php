<!DOCTYPE html>
<html>
<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> <?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet">
	<?php wp_head(); ?>
</head>



	<?php 
		
		if( is_front_page() ):
			$husky_classes = array( 'husky-class', 'my-class' );
		else:
			$husky_classes = array( 'no-husky-class' );
		endif;
		
	?>
	<body <?php body_class( $husky_classes ); ?>>
	


	<!-- HEADER
	================================================== -->
	<header class="site-header">
		
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" class='header-image' alt='header image'>
		
		<!-- NAVBAR
		================================================== -->

		<div class="navbar-wrapper">
			
			<div class="navbar navbar-inverse " role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					
					</div> <!-- navbar header -->
							<?php 
								wp_nav_menu(array(
									
								'theme_location' => 'primary',
								'container' => 'nav',
								'container_class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav navbar-right'
									)
								);
							?>
						</div>
					  </div><!-- container-fluid -->
				
				</div>
				
				
			
	
	</header>
	<div id="content" class="site-content">
