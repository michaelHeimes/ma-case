<?php
$logo =get_sub_field('logo') ?? null;
$title =get_sub_field('title') ?? null;
$copy =get_sub_field('copy') ?? null;

if( $logo || $title || $copy ):
?>
<section class="module outlined-centered-logo-title-copy text-center">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 medium-11 tablet-10 large-8">
				<div class="inner green-outline h3">
					<?php if($logo):?>
						<div class="logo-wrap bg-white">
							<?=wp_get_attachment_image( $logo['id'], 'full' );?>
						</div>
					<?php endif;?>
					<?php if($title):?>
						<div class="title-wrap">
							<?=wp_kses_post($title);?>
						</div>
					<?php endif;?>
					<?php if($copy):?>
						<div class="copy-wrap">
							<?=wp_kses_post($copy);?>
						</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif;?>