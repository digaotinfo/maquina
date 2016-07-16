<?php
/**
 *
* RS Team
* @since 1.0.0
* @version 1.0.0
*
*
*/
function rs_equipe( $atts, $content = '', $id = '' ) {

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

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
			'post_type' 	=> 'team',
			'posts_per_page'=> 20,
			'meta_key'		=> 'equipe_ordem',
			'orderby'		=> 'meta_value_num',
			'order'			=> 'ASC',
			'paged'			=>$paged
		
	);

	$tmp_query  = $wp_query;
	$wp_query   = new WP_Query( $args );
	
	ob_start();

	while( have_posts() ) : the_post();
	?>

<div <?php echo $id; ?> class="col-sm-12 equipe item <?php echo sanitize_html_classes($class); ?>"<?php echo $animation_duration; ?><?php echo $animation_delay; ?>>
    <?php if(has_post_thumbnail()): ?>
		<div class="col-sm-2 equipe text-center">
	    	<?php 
	    		$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	    	?>
	    	<img src="<?php echo $img; ?>" class="img-rounded" />
		</div>
    <?php endif; ?>

	<div class="col-sm-10 equipe-info">
		<div class="col-xs-12 nome">
			<?php the_title(); ?>
		</div>
		<div class="col-xs-12 cargo">
			<small> <?php the_field("equipe_cargo"); ?> </small>
		</div>
		<div class="col-xs-12 descricao">
    		<?php the_content(); ?>
    	</div>
    	<div class="col-xs-12 redesSociais">
    		<?php 
            	$url_facebook = get_field("equipe_facebook");
            	$url_youtube = get_field("equipeyoutube");
            	$url_twitter = get_field("equipe_twitter");
            	$url_linkedin = get_field("equipe_linkedin");
            	$url_gplus = get_field("equipe_gplus");
            	$url_pinterest = get_field("equipe_pinterest");
            ?>
    			<?php if(!empty($url_facebook)): ?>
                  <a href="<?php echo esc_url($url_facebook); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <?php if(!empty($url_youtube)): ?>
                  <a href="<?php echo esc_url($url_youtube); ?>" target="_blank" title="YouTube"><i class="fa fa-youtube-square"></i></a>
                <?php endif; ?>
                <?php if(!empty($url_twitter)): ?>
                  <a href="<?php echo esc_url($url_twitter); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
                <?php endif;?>
                <?php if(!empty($url_linkedin)): ?>
                  <a href="<?php echo esc_url($url_linkedin); ?>" target="_blank" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
                <?php endif; ?>
                <?php if(!empty($url_gplus)): ?>
                  <a href="<?php echo esc_url($url_gplus); ?>" target="_blank" title="G+"><i class="fa fa-google-plus"></i></a>
                <?php endif; ?>
                <?php if(!empty($pinterest)): ?>
                  <a href="<?php echo esc_url($pinterest); ?>" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                <?php endif; ?>
    	</div>
	</div>
</div>

<div class="col-sm-12 divisor">
	<hr>
</div>
  <?php
  endwhile;
?>
<div class="nav-previous alignleft"> <?php previous_posts_link( utf8_encode('Página Anterior') ); ?> </div>
<div class="nav-next alignright"><?php next_posts_link( utf8_encode('Próxima Página') ); ?></div>
<?php
  wp_reset_query();
  wp_reset_postdata();
  $wp_query = $tmp_query;

  $output = ob_get_clean();

  return $output;

}
add_shortcode('rs_equipe', 'rs_equipe');
