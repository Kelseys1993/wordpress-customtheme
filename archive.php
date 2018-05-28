<?php
/*
Template Name: Archives
*/

 get_header(); ?>
 <section>
<div class='container'>
<div class="row">
	
	<div class="col-xs-12 col-sm-8">
		
		<div class="row text-center no-margin">

		<?php  if( have_posts() ): ?>
			<header class="page-header">
			<?php the_archive_title('<h1 class"page-title">', '</h1>'); 
			      the_archive_description('<div class="archive-description">','</div>');
			?>
			</header>
		<?php while( have_posts() ): the_post(); 
				
				 get_template_part('template-parts/content','archive'); 
				
			 endwhile;
				
			
				the_posts_navigation(); 
		

		else :
			
			get_template_part( 'template-parts/content', 'none' );
			
		 endif; ?>


		</div>
	
	</div>
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
</div>
</div>
</section>
<?php get_footer(); ?>
