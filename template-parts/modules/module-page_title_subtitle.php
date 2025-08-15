<?php
$title = get_sub_field('title') ?? null;
$subtitle = get_sub_field('subtitle') ?? null;

if( $title || $subtitle ):
?>
<section class="module title-subtitle text-center">
	<div class="grid-container">
		<div class="grid-x align-center">
			<div class="cell small-12 medium-10 tablet-8 large-6">
				<?php if($title):?>
					<h1 class="h2 m-0"><?=wp_kses_post( $title );?></h1>
				<?php endif;?>
				<?php if($subtitle):?>
					<p><b><?=wp_kses_post( $subtitle );?></b></p>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
<?php endif;?>