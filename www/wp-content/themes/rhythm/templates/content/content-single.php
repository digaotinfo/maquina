<?php
/**
 * @package Rhythm
 */
?>
<!-- Post -->
<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item mb-80 mb-xs-40'); ?>>

	<!-- Text -->
	<div class="blog-item-body">
		
		<?php get_template_part('templates/content/parts/single-media'); ?>
		
		<?php the_content(); ?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'rhythm' ),
				'after'  => '</div>',
			) );
			
			$a_category =  get_the_category();
			$cat = $a_category[0]->slug;// categoria corrente
// 			print_r( $cat );
		?>
		<?php if( $cat != "social-relatorio" ): ?>
			<footer class="entry-footer">
				<?php rhythm_entry_footer(); ?>
			</footer>
			<!-- .entry-footer -->
		<?php endif; ?>
	</div>
	<!-- End Text -->

</div>
<!-- End Post -->