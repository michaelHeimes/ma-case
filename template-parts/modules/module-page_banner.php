<?php
$style = get_sub_field('style') ?? null;
$hero_image_title_cta_link = get_sub_field('hero_image_title_cta_link') ?? null;
$image_cta_link = get_sub_field('image_cta_link') ?? null;

$img = null;
$title = null;
$cta_link = null;

if( $style == 'hero-title' && $hero_image_title_cta_link['background_image'] ) {
	$img = $hero_image_title_cta_link['background_image'];
}

if( $style == 'image-link' && $image_cta_link['image'] ) {
	$img = $image_cta_link['image'];
}

if( $style == 'hero-title' && $hero_image_title_cta_link['title_text'] ) {
	$title = $hero_image_title_cta_link['title_text'];
}

if( $style == 'hero-title' && $hero_image_title_cta_link['cta_button_link'] ) {
	$cta_link = $hero_image_title_cta_link['cta_button_link'];
}

if( $style == 'image-link' && $image_cta_link['cta_button_link'] ) {
	$cta_link = $image_cta_link['cta_button_link'];
}

if( $hero_image_title_cta_link || $image_cta_link ):
?>
<section class="module page-banner has-object-fit <?=esc_html($style);?>">
	<?php if( $style == 'image-link' &&  $img ):?>
		<div class="img-wrap has-object-fit">
	<?php endif;?>
			<?=wp_get_attachment_image( $img['id'], 'full', false, [ 'class' => 'img-fill' ] );?>
	<?php if( $style == 'image-link' &&  $img ):?>
		</div>
	<?php endif;?>
	<div class="grid-container relative">
		<div class="grid-x">
			<div class="cell small-12">
				<?php if($title):?>
					<div class="title-wrap">
						<h1 class="color-white uppercase">
							<?=wp_kses_post( $title );?>
						</h1>
					</div>
				<?php endif;?>
				<?php if($cta_link):
					$link_url = $cta_link['url'];
					$link_title = $cta_link['title'];
					$link_target = $cta_link['target'] ? $cta_link['target'] : '_self';	
				?>
					<div class="link-wrap">
						<a class="button bg-purple" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
<?php endif;?>