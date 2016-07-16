<?php

/**
 *
 * RS Blog Slider
 * @since 1.0.0
 * @version 1.1.0
 *
 */
function rs_escritorios($atts, $content = '', $id = '') {

	global $post;

	extract(shortcode_atts(array(
		'id'            => '',
		'class'         => '',
		'cats'          => 0,
		'orderby'       => 'ID',
		'exclude_posts' => '',
		'limit'         => ''
	), $atts));
	
	wp_enqueue_script('owl-carousel');
	
	$class = ( $class ) ? ' ' . $class : '';

	// Query args
	$args = array(
		'post_type'     => 'escritorios',
		'orderby' 		=> $orderby,
		'posts_per_page'=> $limit,
		'meta_query' 	=> array(array('key' => '_thumbnail_id')), //get posts with thumbnails only
	);

	if ($cats) {
		
		$cats_tax = array_map('intval',explode( ',', $cats ));
	  
		if (is_array($cats_tax) && count($cats_tax) == 1) {
			$cats_tax = array_shift($cats_tax);
		}
		
		$args['tax_query'] = array(
			array(
				'taxonomy' 	=> 'category',
				'field' 	=> 'ids',
				'terms' 	=> $cats_tax
			)
		);
	}

	if (!empty($exclude_posts)) {

		$exclude_posts_arr = explode(',', $exclude_posts);
		if (is_array($exclude_posts_arr) && count($exclude_posts_arr) > 0) {
			$args['post__not_in'] = array_map('intval', $exclude_posts_arr);
		}
	}


	$query = new WP_Query($args);

	ob_start();
?>

	<!-- Post Slider -->
	<div <?php echo ( $id ? ' id="' . esc_attr($id) . '"' : ''); ?> class="<?php echo sanitize_html_classes($class); ?>">
		<ul class="blog-posts-carousel-escritorios" style="margin-top: -40px;">
			<?php while ($query -> have_posts()) : $query -> the_post(); ?>
				<li>

					<!-- Content Slide -->
					<div class="contentBlogSlider col-xs-12 col-sm-7">
						<div class="main">
							<h4><?php the_title(); ?></h4>
							<?php the_content(); ?>
						</div>

					</div>
					<!-- End Content Slide -->
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
	<!-- End Post Slider -->

	<?php
	wp_reset_postdata();

	$output = ob_get_clean();
	return $output;
}

add_shortcode('rs_escritorios', 'rs_escritorios');
