<section class='shop-section'>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-sm-12">
		
<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'huskyrescuenz' ),
			'after'  => '</div>',
		) );
		?>
		<?php if ( get_edit_post_link() ) : ?>
		<div >
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'huskyresucuenz' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</div>
	</div><!-- .entry-content -->

	
			
	<?php endif; ?>
	
</article>
</section>