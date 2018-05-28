
<article id='post-<?php the_ID(); ?>'<?php post_class('clearfix'); ?>> 

<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	<?php if(has_post_thumbnail()): ?>
			
		<?php endif; ?>
		<small><?php the_category(' '); ?> || <?php the_tags();  ?></small>
		<?php the_excerpt(); ?>


</article> 

