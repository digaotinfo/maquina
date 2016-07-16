<?php
/**
 *
* RS Team
* @since 1.0.0
* @version 1.0.0
*
*
*/
function rs_servicosList( $atts, $content = '', $id = '' ) {

	global $wp_query, $post;

	extract( shortcode_atts( array(
			'id'                 => '',
			'class'              => '',
			'person_id'          => 0,
			'animation'          => '',
			'animation_delay'    => '',
			'animation_duration' => '',

	), $atts ) );

	$id                 = ( $id ) ? ' id="'. esc_attr($id) .'"' : '';
	$class              = ( $class ) ? ' '. $class : '';
	$animation          = ( $animation ) ? ' wow '. sanitize_html_classes($animation) : '';
	$animation_duration = ( $animation_duration ) ? ' data-wow-duration="'.esc_attr($animation_duration).'s"':'';
	$animation_delay    = ( $animation_delay ) ? ' data-wow-delay="'.esc_attr($animation_delay).'s"':'';

	$args = array(
			'category_name' => 'servicos',
			'posts_per_page'=> 10,
// 			'meta_key'		=> 'relatorioSocial_ordem',
// 			'orderby'		=> 'meta_value_num',
// 			'order'			=> 'ASC'
		
	);

	$tmp_query  = $wp_query;
	$wp_query   = new WP_Query( $args );

	ob_start();

	while( have_posts() ) : the_post();
	?>

<div <?php echo $id; ?> class="col-sm-12 servico item <?php echo sanitize_html_classes($class); ?>"<?php echo $animation_duration; ?><?php echo $animation_delay; ?>>
    <?php if(has_post_thumbnail()): ?>
		<div class="col-sm-2 servico-img text-center">
			<a href="<?php the_permalink(); ?>">
		    	<?php 
		    		//the_post_thumbnail('ts-vertical'); 
		    		$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		    	?>
		    	<img src="<?php echo $img; ?>" class="img-rounded" />
		    </a>
		</div>
    <?php endif; ?>

	<div class="col-sm-10 servico-info">
		<a href="<?php the_permalink(); ?>">
	    	<?php the_content(); ?>
	    </a>
	</div>
</div>

<div class="col-sm-12 divisor">
	<hr>
</div>
  <?php
  endwhile;
?>

<div class="nav-previous alignleft"><?php next_posts_link( 'Página Anterior' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Próxima Página' ); ?></div>

<?php
  wp_reset_query();
  wp_reset_postdata();
  $wp_query = $tmp_query;

  $output = ob_get_clean();

  return $output;

}
add_shortcode('rs_servicosList', 'rs_servicosList');
