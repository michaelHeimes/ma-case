<?php
$global_contact_info = get_field('global_contact_info', 'option') ?? null;
	
if($global_contact_info):
	$office_phone = $global_contact_info['office_phone'] ?? null;
	$address = $global_contact_info['address'] ?? null;
	$address = preg_replace('/<br\s*\/?>/i', '', $address, 1);
	$email = $global_contact_info['email'] ?? null;	
?>
<section class="module contact-info-two-columns text-center">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<?php if($address):?>
				<div class="address cell small-12 medium-6 tablet-4 text-center">
					<b class="p"><?=wp_kses_post( $address );?></b>
				</div>
			<?php endif;?>
			<?php if( $office_phone || $email ):?>
				<div class="cell small-12 medium-6 tablet-4 text-center">
					<b class="p">
						<?php if($office_phone):?>
							Phone: <a href="tel:<?=esc_attr($office_phone);?>"><?=esc_attr($office_phone);?></a>
						<?php endif;?>
						<?php if($email):?>
							<div>
								<a class="color-black" href="mailto:<?=esc_attr($email);?>"><?=esc_attr($email);?></a>
							</div>
						<?php endif;?>
					</b>
				</div>
			<?php endif;?>
		</div>
	</div>
</section>
<?php endif;?>