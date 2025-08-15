<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trailhead
 */
$logo = get_field('footer_logo', 'option') ?? null;
$global_contact_info = get_field('global_contact_info', 'option') ?? null;
$footer_disclaimer_left = get_field('footer_disclaimer_left', 'option') ?? null;
$footer_disclaimer_right = get_field('footer_disclaimer_right', 'option') ?? null;
?>

				<footer id="colophon" class="site-footer bg-light-green">
					<div class="site-info">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 medium-4 footer-col text-center">
									<?php if( !empty( $logo ) ) {
										echo wp_get_attachment_image( $logo['id'], 'full' );
									}?>
								</div>
								<?php if($global_contact_info):
									$office_phone = $global_contact_info['office_phone'] ?? null;
									$address = $global_contact_info['address'] ?? null;
									$email = $global_contact_info['email'] ?? null;	
								?>
									<div class="cell small-12 medium-5 tablet-4 footer-col text-center">
										<h5>Contact Information</h5>
										<?php if($office_phone):?>
											<div class="p m-0">
												Office: <a class="color-black" href="tel:<?=esc_attr($office_phone);?>"><?=esc_attr($office_phone);?></a>
											</div>
										<?php endif;?>
										<?php if($address):?>
											<div class="address p m-0">
												<?=wp_kses_post( $address );?>
											</div>
										<?php endif;?>
										<?php if($email):?>
											<div class="p m-0">
												<a class="color-black" href="mailto:<?=esc_attr($email);?>"><?=esc_attr($email);?></a>
											</div>
										<?php endif;?>
									</div>
								<?php endif;?>
								<div class="footer-links-wrap cell small-12 medium-3 tablet-4 footer-col">
									<h5>Links</h5>
									<?php trailhead_footer_links();?>
								</div>
							</div>
						</div>
					</div><!-- .site-info -->
					
					<?php if($footer_disclaimer_left || $footer_disclaimer_right ):?>
						<div class="disclaimer bg-charcoal color-white">
							<div class="grid-container">
								<div class="grid-x grid-padding-x">
									<?php if($footer_disclaimer_left):?>
										<div class="cell small-12 medium-6 footer-col">
											<?=wp_kses_post($footer_disclaimer_left);?>
										</div>
									<?php endif;?>
									<?php if($footer_disclaimer_right):?>
										<div class="cell small-12 medium-6">
											<?=wp_kses_post($footer_disclaimer_right);?>
										</div>
									<?php endif;?>
								</div>
							</div>
						</div>
					<?php endif;?>
					
					
				</footer><!-- #colophon -->
					
			</div><!-- #page -->
			
		</div>  <!-- end .off-canvas-content -->
							
	</div> <!-- end .off-canvas-wrapper -->
					
<?php wp_footer(); ?>

</body>
</html>
