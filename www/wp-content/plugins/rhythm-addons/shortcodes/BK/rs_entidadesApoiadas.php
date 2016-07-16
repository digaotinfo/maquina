<?php
/**
 *
 * RS Team
 * @since 1.0.0
 * @version 1.0.0
 *
 *
 */
function rs_entidadesApoiadas( $atts, $content = '', $id = '' ) {

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
//   		'post_type'     => 'entidadesApoiadas',
  		'category_name' => 'entidades-apoiadas',
  		'posts_per_page'=> 10,
  		'meta_key'		=> 'entidadesApoiadas_ordem',
  		'orderby'		=> 'meta_value_num',
  		'order'			=> 'ASC'
			
  );

  $tmp_query  = $wp_query;
  $wp_query   = new WP_Query( $args );

  ob_start();

  while( have_posts() ) : the_post();
?>

<div <?php echo $id; ?> class="team-item entidades-apoiadas <?php echo sanitize_html_classes($class); ?>"<?php echo $animation_duration; ?><?php echo $animation_delay; ?>>
    <?php if(has_post_thumbnail()): ?>
    <div class="img">
	    <?php 
	    	$url = esc_url(get_field("entidadesApoiadas_link"));
	    	if( !empty($url) ){
	    		?>
		    	<a href="<?php echo $url; ?>" target="_blank">
		      		<?php the_post_thumbnail('ts-vertical'); ?>
		      	</a>
	    		<?php
	    	}else{?>
	    		<a href="<?php the_permalink(); ?>" target="_blank">
	    			<?php the_post_thumbnail('ts-vertical'); ?>
	    		</a>
	    		<?php
//  	    		the_post_thumbnail('ts-vertical');
	    	}
	    ?>
    </div>
    <?php endif; ?>

  </div>


  <?php

  endwhile;
  wp_reset_query();
  wp_reset_postdata();
  $wp_query = $tmp_query;

  $output = ob_get_clean();

  return $output;

}
add_shortcode('rs_entidadesApoiadas', 'rs_entidadesApoiadas');
