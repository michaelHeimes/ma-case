<?php
$outlined_title_cards = get_sub_field('outlined_title_cards') ?? null;
if( $outlined_title_cards ):
?>
<section class="module outlined-title-cards text-center">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center small-up-1 medium-up-2 tablet-up-3">
			<?php foreach($outlined_title_cards as $outlined_title_card):
				$title = $outlined_title_card['title'] ?? null;
				if($title):
			?>
				<div class="cell">
					<div class="inner green-outline h3 h-100 grid-x align-middle align-center color-green">
						<?=wp_kses_post($title);?>
					</div>
				</div>
			<?php endif; endforeach;?>
		</div>
	</div>
</section>
<?php endif;?>