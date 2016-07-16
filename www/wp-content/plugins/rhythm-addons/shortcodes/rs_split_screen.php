<?php
/**
 *
 * RS Split Screen
 * @version 1.0.0
 *
 *
 */
function rs_split_screen($atts, $content = '', $id = '') {

	extract(shortcode_atts(array(
		'id'               => '',
		'class'            => '',
		'image'            => '',
		'header'           => '',
	), $atts));

	$id                        = ( $id ) ? ' id="' . esc_attr($id) . '"' : '';
	$class                     = ( $class ) ? ' ' . sanitize_html_classes($class) : '';
	
	ob_start();

	$image_url = '';
	if (is_numeric($image) && !empty($image)) {
		$image_src = wp_get_attachment_image_src($image, 'full');
		if (isset($image_src[0])) {
			$image_url = esc_url($image_src[0]);
		}
	}
	?>
	<section class="split-section bg-gray-lighter">
		<div class="clearfix relative">
			
			<!-- Section Headings -->
			<div class="split-section-headings right">
				<div class="ssh-table">
					<div class="ssh-cell page-section bg-scroll" data-background="<?php echo esc_url($image_url);?>"></div>
				</div>
			</div>
			<!-- End Section Headings -->
			
			<!-- Section Content -->
			<div class="split-section-content small-section pt-100 pb-100 pt-sm-50 pb-sm-50">
				
				<div class="split-section-wrapper left">
				
					<div class="text">
						<h2 class="font-alt mt-0 mb-50 mb-xxs-20"><?php echo esc_html($header); ?></h2>
						
						<?php echo do_shortcode($content); ?>

						<!-- <div class="row">
							
							<div class="col-sm-6">
								<div class="alt-service-item mt-0 mb-20">
									<div class="alt-service-icon">
										<i class="fa fa-paper-plane-o"></i>
									</div>
									<h3 class="alt-services-title font-alt">Quality planning</h3>
									Vitae gravida nibh. Morbi dignissim nunc at risus convallis.
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="alt-service-item mt-0 mb-20">
									<div class="alt-service-icon">
										<i class="fa fa-graduation-cap"></i>
									</div>
									<h3 class="alt-services-title font-alt">Highly skilled workers</h3>
									Lorem ipsum dolor gravida nibh. Morbi dignissim nunc at risus convallis.
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="alt-service-item mt-0 mb-20">
									<div class="alt-service-icon">
										<i class="fa fa-line-chart"></i>
									</div>
									<h3 class="alt-services-title font-alt">10 years experience</h3>
									Vitae gravida nibh. Morbi dignissim nunc at risus convallis.
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="alt-service-item mt-0 mb-20">
									<div class="alt-service-icon">
										<i class="fa fa-pie-chart"></i>
									</div>
									<h3 class="alt-services-title font-alt">Effective Solutions</h3>
									Vitae gravida nibh. Morbi dignissim nunc at risus convallis.
								</div>
							</div>
							
						</div> -->
					
					</div>
				</div>
				
			</div>
			<!-- End Section Content -->
	
		</div>
	</section>
	<?php

	$output = ob_get_clean();
	return $output;
}


add_shortcode('rs_split_screen', 'rs_split_screen');