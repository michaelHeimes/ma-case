<?php
$team_cards = get_sub_field('team_cards') ?? null;

if( $team_cards ):
?>
<section class="module team-cards text-center">
	<div class="grid-container">
		<div class="card-grid grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3">
			<?php foreach($team_cards as $team_card):
				$photo = $team_card['photo'] ?? null;
				$name = $team_card['name'] ?? null;
				$title = $team_card['title'] ?? null;
				$email_address = $team_card['email_address'] ?? null;
			?>
				<div class="t-card cell text-center">
					<?php if($photo):?>
						<div class="img-wrap">
							<?=wp_get_attachment_image( $photo['id'], 'large' );?>
						</div>
					<?php endif;?>
					<?php if($name):?>
						<h3><?=wp_kses_post( $name );?></h3>
					<?php endif;?>
					<?php if($title):?>
						<p class="m-0"><?=wp_kses_post( $title );?></p>
					<?php endif;?>
					<?php if($name):?>
						<div class="p">
							<a class="color-black" href="mailto:<?=esc_attr( $email_address );?>">
								<?=esc_attr( $email_address );?>
							</a>
						</div>
					<?php endif;?>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
<?php endif;?>