<?php get_header(); ?>

<div class="container">
	
<div class="row">
<div class='col-md-9'>
	

	<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			
			while ( have_posts() ) :
				the_post();?>
				<div class='post-container'>
				<header class="entry-header">
	<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		<small>Posted on: <?php the_time('F j, Y');  ?> <?php the_category(); ?></small>
	</header>
			<?php the_excerpt();?>
				</div>
			<?php endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		</div>
<div class='col-md-3'>
		<?php get_sidebar(); ?>
		</div>
	</div>
</div>


	

<?php get_footer(); ?>