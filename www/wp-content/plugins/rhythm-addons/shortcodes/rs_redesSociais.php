<?php
/**
 *
 * VC Redes Sociais by Digão(ah mlk...rsssss)
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function rs_redesSociais( $atts, $content = '', $id = '' ){
  extract( shortcode_atts( array(
    'id'         => '',
    'class'      => '',
    'align'      => '',
    'text_size'  => '',
    'text_color' => '',
    'line_height' => '',
    'letter_spacing'  => '',
  ), $atts ) );

//   $id         = ( $id ) ? ' id="'. esc_attr($id) .'"' : '';
//   $class      = ( $class ) ? ' '. sanitize_html_classes($class) : '';
//   $align      = ( $align ) ? ' align-'.$align:'';

//   $text_size      = ( $text_size )? 'font-size:'.$text_size.';':'';
//   $text_color     = ( $text_color )? 'color:'.$text_color.';':'';
//   $line_height    = ( $line_height )? 'line-height:'.$line_height.';':'';
//   $letter_spacing = ( $letter_spacing )? 'letter-spacing:'.$letter_spacing.';':'';
//   $el_style       = ( $text_size || $text_color ) ? 'style="'.esc_attr($text_color.$text_size.$line_height.$letter_spacing).'"':'';

	$args = array (
		'post_type' => 'redesSociais',
		'posts_per_page' => 10,
		'meta_key' => 'redessociais_ordem',
		'orderby' => 'ordem',
		'order' => 'ASC'
	);
  $loop = new WP_Query ( $args );
  
  $html = "<div class='icones redes-sociais'>";
  while ( $loop->have_posts () ) :
  
  	$loop->the_post();
  	$img = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'thumbnail_size' );
  	$link = esc_url(get_field("redessociais_link"));
	$html .= '<div class="icone"><a href="'.$link.'" target="_blank"><i class="fa fa-'.get_field("redes_sociais_icon").'" aria-hidden="true"></i></a></div>';
	
  endwhile;
  $html .= "</div>";

  return $html;
}
add_shortcode( 'rs_redesSociais', 'rs_redesSociais');
