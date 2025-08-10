<?php
$logo = get_sub_field('logo') ?? null;
$title = get_sub_field('title') ?? null;
$cta_link = get_sub_field('cta_link') ?? null;
if( $logo || $title || $cta_link ):
?>
<section class="module centered-logo-title-cta-link text-center">
	<div class="grid-container">
		<div class="grid-x align-center">
			<div class="cell small-12 medium-11 tablet-8 large-6">
				<?php if($logo):?>
					<div class="text-center">
						<?=wp_get_attachment_image( $logo['id'], 'full' );?>
					</div>
				<?php endif;?>
				<?php if($title):?>
					<div class="title-wrap">
						<h2>
							<?=wp_kses_post( $title );?>
						</h2>
					</div>
				<?php endif;?>
				<?php if($cta_link):
					$link_url = $cta_link['url'];
					$link_title = $cta_link['title'];
					$link_target = $cta_link['target'] ? $cta_link['target'] : '_self';	
				?>
					<div class="link-wrap">
						<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
<?php endif;?>