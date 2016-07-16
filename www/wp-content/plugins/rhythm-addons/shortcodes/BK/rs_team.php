<?php
/**
 *
 * RS Team
 * @since 1.0.0
 * @version 1.0.0
 *
 *
 */
function rs_team( $atts, $content = '', $id = '' ) {

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

  if( !empty($atts["person_id"]) && ($atts["person_id"] != "all") ){
	  $args = array(
	    'post_type'      => 'team',
	    'posts_per_page' => 1,
	    'post__in'       => explode(',', $person_id),
	  );
  }else{
  	$args = array(
  		'post_type'     => 'team',
//   	'posts_per_page'=> 10,
  		'meta_key'		=> 'equipe_ordem',
  		'orderby'		=> 'meta_value_num',
  		'order'			=> 'ASC'
  	);
  }

  $tmp_query  = $wp_query;
  $wp_query   = new WP_Query( $args );

  ob_start();

  while( have_posts() ) : the_post();
	  // get the meta values
	  $team_position  = ts_get_post_opt('team-position');
	  $team_header    = ts_get_post_opt('team-header');
	  $team_facebook  = ts_get_post_opt('team-facebook');
	  $team_twitter   = ts_get_post_opt('team-twitter');
	  $team_pinterest = ts_get_post_opt('team-pinterest');
	  
	  $mostrarNaHome = get_field("equipehome");
	  if($mostrarNaHome == true):
?>
		<div <?php echo $id; ?> class="team-item <?php echo sanitize_html_classes($animation); ?><?php echo sanitize_html_classes($class); ?>"<?php echo $animation_duration; ?><?php echo $animation_delay; ?>>
		    <?php if(has_post_thumbnail()): ?>
		    <div class="team-item-image">
		      <?php the_post_thumbnail('ts-vertical'); ?>
		        <div class="team-item-detail">
		
		            <h4 class="font-alt normal"><?php //echo get_field("equipe_cargo"); ?></h4>
		
		            <?php the_content(); ?>
		
		            <?php if(!empty($team_facebook) || !empty($team_twitter) || !empty($team_pinterest)) : ?>
		            <div class="team-social-links">
		            	
		            	<?php 
		            		$url_facebook = get_field("equipe_facebook");
		            		$url_youtube = get_field("equipe_youtube");
		            		$url_twitter = get_field("equipe_twitter");
		            		$url_linkedin = get_field("equipe_linkedin");
		            		$url_gplus = get_field("equipe_gplus");
		            		$url_pinterest = get_field("equipe_pinterest");
		            	?>
		            	
		                <?php if(!empty($url_facebook)): ?>
		                  <a href="<?php echo esc_url($url_facebook); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
		                <?php endif; ?>
		                <?php if(!empty($url_youtube)): ?>
		                  <a href="<?php echo esc_url($url_youtube); ?>" target="_blank"><i class="fa fa-youtube-square"></i></a>
		                <?php endif; ?>
		                <?php if(!empty($url_twitter)): ?>
		                  <a href="<?php echo esc_url($url_twitter); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
		                <?php endif;?>
		                <?php if(!empty($url_linkedin)): ?>
		                  <a href="<?php echo esc_url($url_linkedin); ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
		                <?php endif; ?>
		                <?php if(!empty($url_gplus)): ?>
		                  <a href="<?php echo esc_url($url_gplus); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
		                <?php endif; ?>
		                <?php if(!empty($pinterest)): ?>
		                  <a href="<?php echo esc_url($pinterest); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
		                <?php endif; ?>
		            </div>
		            <?php endif; ?>
		
		        </div>
		    </div>
		    <?php endif; ?>
		
		    <div class="team-item-descr font-alt">
		
		        <div class="team-item-name">
		            <?php the_title(); ?>
		        </div>
		
		        <div class="team-item-role">
		            <?php echo get_field("equipe_cargo"); ?>
		        </div>
		
		    </div>
		  </div>


  <?php
	  endif;
  endwhile;
  wp_reset_query();
  wp_reset_postdata();
  $wp_query = $tmp_query;

  $output = ob_get_clean();

  return $output;

}
add_shortcode('rs_team', 'rs_team');
