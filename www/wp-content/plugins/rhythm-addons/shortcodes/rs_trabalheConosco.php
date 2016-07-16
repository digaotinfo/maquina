<?php
/**
 *
 * RS Team
 * @since 1.0.0
 * @version 1.0.0
 *
 *
 */
function rs_trabalheConosco( $atts, $content = '', $id = '' ) {

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
//   		'post_type'     => 'trabalheConosco',
//   		'posts_per_page'=> 10,
  		//   		'meta_key'		=> 'equipe_ordem',
  //   		'orderby'		=> 'meta_value_num',
  //   		'order'			=> 'ASC'
  		'category_name' => 'trabalhe-conosco'
  );

  $tmp_query  = $wp_query;
  $wp_query   = new WP_Query( $args );

  ob_start();

  while( have_posts() ) : the_post();

  
?>

<div <?php echo $id; ?> class="team-item trabalhe-conosco <?php echo sanitize_html_classes($animation); ?><?php echo sanitize_html_classes($class); ?>"<?php echo $animation_duration; ?><?php echo $animation_delay; ?>>

    <div class="team-item-descr col-xs-12">

        <div class="titulo">
            <?php the_title(); ?>
        </div>

        <div class="info">
            <?php the_content(); ?>
        </div>

        <div class="post-prev-more btn">
		  <a href="<?php the_field("trabalheconosco_link_de_redirecionamento"); ?>" class="btn btn-mod btn-gray btn-round"><?php the_field("tabalheconosco_label_button") ?> <i class="fa fa-angle-right"></i></a>
		</div>



    </div>
  </div>


  <?php

  endwhile;
  wp_reset_query();
  wp_reset_postdata();
  $wp_query = $tmp_query;

  $output = ob_get_clean();

  return $output;

}
add_shortcode('rs_trabalheConosco', 'rs_trabalheConosco');
