<?php
$heading = get_sub_field('heading') ?? null;
$copy = get_sub_field('copy') ?? null;
$cta_link = get_sub_field('cta_link') ?? null;
$image = get_sub_field('image') ?? null;

if( $heading || $copy || $cta_link || $image ):
?>
<section class="module copy-cta-left-img-right">
	<div class="grid-container">
		<div class="inner relative bg-light-green">
			<div class="grid-x grid-padding-x align-bottom tablet-flex-dir-row-reverse">
				<?php if($image):?>
					<div class="cell small-12 medium-8 tablet-6">
						<?=wp_get_attachment_image( $image['id'], 'full' );?>
					</div>
				<?php endif;?>
				<div class="cell small-12 tablet-6">
					<?php if($heading):?>
						<h2>
							<?=wp_kses_post( $heading );?>
						</h2>
					<?php endif;?>
					<?php if($copy):?>
						<div class="copy-wrap">
							<?=wp_kses_post( $copy );?>
						</div>
					<?php endif;?>
					<?php if($cta_link):
						$link_url = $cta_link['url'];
						$link_title = $cta_link['title'];
						$link_target = $cta_link['target'] ? $cta_link['target'] : '_self';	
					?>
						<div class="link-wrap">
							<a class="button bg-primary-green" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
					<?php endif;?>
				</div>
			</div>
			<div class="square top-left-square bg-light-green"></div>
			<div class="square bottom-right-square bg-black"></div>
		</div>
	</div>
</section>
<?php endif;?>