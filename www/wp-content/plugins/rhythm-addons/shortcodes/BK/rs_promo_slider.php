<?php
/**
 *
 * RS Promo Slider
 * @since 1.0.0
 * @version 1.0.0
 *
 *
 */
function rs_promo_slider( $atts, $content = '', $id = '' ) {

  extract( shortcode_atts( array(
    'id'    => '',
    'class' => '',
    'style' => 'fixed_height_slider',
    'background' => '',
  ), $atts ) );
  


  global $slider_type;
  $slider_type = $style;

  $data_background = '';
  if ( is_numeric( $background ) && !empty($background) ) {
    $image_src  = wp_get_attachment_image_src( $background, 'full' );
    $data_background = ' data-background='.esc_url($image_src[0]).'';
  }

  $id     = ( $id ) ? ' id="'. esc_attr($id) .'home"' : '';
  $class  = ( $class ) ? ' '. sanitize_html_classes($class) : '';

  $output =  '<div '.$id.' class="home-section fullwidth-slider promo-slider bg-dark'.$class.'" '.$data_background.'>';
  $output .=  do_shortcode( $content );
//   $output .=  do_shortcode( wp_kses_data($content ));
  $output .=  '</div>';

  wp_enqueue_script( 'owl-carousel' );

  return $output;
}
add_shortcode('rs_promo_slider', 'rs_promo_slider');

function rs_promo_slide( $atts, $content = '', $id = '' ) {

  extract( shortcode_atts( array(
    'background'              => '',
    'small_heading'           => '',
    'heading'                 => '',
    'small_heading_below'     => 'no',
    'button'                  => 'no',
    'button_style'            => 'btn-round',
    'overlay_style'           => '',
    'button_size'             => 'btn-small',
    'btn_one_link'            => '',
    'btn_text'                => '',
    'btn_lightbox'            => '',
    'btn_text_two'            => '',
	'btn_lightbox_two'        => '',
    'btn_two_link'            => '',
	'add_player_icon'		  => 'no',
	'self_hosted_video'		  => '',
	'embedded_video'		  => '',

    // colors
    'small_heading_color'     => '',
    'heading_color'           => '',
    'button_border_color'     => '',
    'button_text_color'       => '',
    'button_text_color_hover' => '',
    'button_background_hover' => ''

  ), $atts ) );

  global $slider_type;

  
  $small_heading_color = ( $small_heading_color ) ? ' style="color:'.esc_attr($small_heading_color).';"':'';
  $heading_color       = ( $heading_color ) ? ' style="color:'.esc_attr($heading_color).';"':'';
  $uniqid_class = '';
  $customize    = ( $button_background_hover || $button_text_color || $button_text_color_hover || $button_border_color ) ? true:false;

  $data_background = '';
  if ( is_numeric( $background ) && !empty($background) ) {
    $image_src  = wp_get_attachment_image_src( $background, 'full' );
    $data_background = ' data-background='.esc_url($image_src[0]).'';
  }

  $lightbox = $lightbox_two = '';
  if ( function_exists( 'vc_parse_multi_attribute' ) ) {
    $parse_args = vc_parse_multi_attribute( $btn_one_link );
    $href       = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : '#';
    $title      = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : 'button';
    $target     = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : '_self';
	$lightbox = ( $btn_lightbox == 1 ) ? 'lightbox mfp-iframe' : '';
  }

  if ( function_exists( 'vc_parse_multi_attribute' ) ) {
    $parse_args = vc_parse_multi_attribute( $btn_two_link );
    $href_two   = ( isset( $parse_args['url'] ) ) ? $parse_args['url'] : '#';
    $title_two  = ( isset( $parse_args['title'] ) ) ? $parse_args['title'] : 'button';
    $target_two = ( isset( $parse_args['target'] ) ) ? trim( $parse_args['target'] ) : '_self';
	$lightbox_two = ( $btn_lightbox_two == 1 ) ? 'lightbox mfp-iframe' : '';
  }

  if (!empty($lightbox) || !empty($lightbox_two)) {
	  wp_enqueue_script('jquery-magnific-popup');
  }

  if( $customize ) {

    $uniqid       = uniqid();
    $custom_style = '';

    if( $button_border_color || $button_text_color ) {
      $custom_style .=  '.btn-promo-custom-'.$uniqid.'{';
      $custom_style .=  ( $button_text_color ) ? 'color:'.$button_text_color.'!important;':'';
      $custom_style .=  ( $button_border_color ) ? 'border-color:'.$button_border_color.' !important;':'';
      $custom_style .= '}';
    }

    if( $button_background_hover || $button_text_color_hover ) {
      $custom_style .=  '.btn-promo-custom-'.$uniqid.':hover {';
      $custom_style .=  ( $button_text_color_hover ) ? 'color:'.$button_text_color_hover.'!important;':'';
      $custom_style .=  ( $button_background_hover ) ? 'background:'.$button_background_hover.'!important;':'';
      $custom_style .=  'border-color:transparent !important';
      $custom_style .= '}';
    }

    ts_add_inline_style( $custom_style );

    $uniqid_class = ' btn-promo-custom-'. $uniqid;
  }

  if( $slider_type == 'fixed_height_slider' ) {
    $upper_class = 'fixed-height-small';
    $lower_class = 'js-height-parent';
  } else {
    $upper_class  = '';
    $lower_class  = 'js-height-full';
  }

  $output  = '<section class="home-section bg-scroll '.$upper_class.' '.sanitize_html_classes($overlay_style).'" '.$data_background.'>';

	$output .=  '<h2 class="section-title text-center">'.$heading.'</h2>';
	$output .= 	'<div class="col-sm-8"></div>';
	$output .= 	'<div class="col-sm-4">';
	$output .=  '<div class="content"'.$small_heading_color.'>'.$content.'</div>';


  $output .=  '</div>';
  $output .=  '</section>';

  return $output;


}
add_shortcode('rs_promo_slide', 'rs_promo_slide');
